<?php 
include "includes/Eventbrite.php";

function printUpcomingEvents() {
	
	ob_start();
	
	$authentication_tokens = array(
        'token'  => 'LCZRTYT47Q6Q6JO2HTMQ'
    );

    $eb_client = new Eventbrite( $authentication_tokens );
    
    $events = $eb_client->events(
    	array(
	    	'status' => 'live',
	    	'order_by' => 'start_asc'
	    )
    );
    
    $json = json_encode($events);
	$items = array();
	
	if ( isset($json->items) ) {
	
	echo '<div class="row cards gutterSpaceWide">';
	
		foreach ($events->events as $event) {
			$eventimg = $event->logo->url;
			$eventurl = $event->url;
			$eventdate = $event->start->local;
			$fixdate = new DateTime($eventdate);
			$finaldate = $fixdate->format('F j, Y');
			$eventTitle = $event->name->html;
				
			echo '
			<div class="col col-lg-4 col-md-6 col-sm-6 col-xs-6">
				<div class="cardContainer">
					<a href="' . $eventurl . '" target="_blank">
						<img src="' . $eventimg . '">
					</a>
					<div class="colInner">
						<a href="' . $eventurl . '" target="_blank">
							<p class="display-medium-title details-title">' . $eventTitle . '</p>
						</a>
						<p class="display-medium-date-read">
							<span class="display-medium-date">' . $finaldate . '</span>
						</p>
						<p>
							<a href="' . $eventurl . '" target="_blank" class="text-right display-medium-readmore">Details</a>
						</p>
					</div>
				</div>
			</div>';
			
			if ( is_page( 51 ) ) {
				echo '
				<p><a class="button dark blue" href="' . home_url( 'events' ) . '">' . __('View all events') . '</a></p>';
			}
		}
	
	echo '</div>';
	
	}
	if ( empty($items) ) {
		
		if ( is_page( 51 ) ) {
			echo '
			<p style="margin-bottom: 0;">There are no upcoming events. Please check back soon!</p>
			<p><a class="button dark blue" href="' . home_url( 'events' ) . '">' . __('View all events') . '</a></p>';
		} else {
			echo '
			<p style="margin-bottom: 50px;">There are no upcoming events. Please check back soon!</p>';
		}
	}
    
    return ob_get_clean(); 
}
add_shortcode('display_upcoming_events', 'printUpcomingEvents');


function printPastEvents() {
	
	ob_start();
	
	$authentication_tokens = array(
        'token'  => 'LCZRTYT47Q6Q6JO2HTMQ'
    );

    $eb_client = new Eventbrite( $authentication_tokens );
    
    $events = $eb_client->events(
    	array(
	    	'status' => 'ended',
	    	'order_by' => 'start_desc',
	    	'show_series_parent' => true
	    )
    );
    
    echo '
    <h2>Past Events</h2>
    <div class="row cards gutterSpaceWide">';
	    
	foreach ($events->events as $event) {
		$eventimg = $event->logo->url;
		$eventurl = $event->url;
		$eventdate = $event->start->local;
		$fixdate = new DateTime($eventdate);
		$finaldate = $fixdate->format('F j, Y');
		$eventTitle = $event->name->html;
			
		echo '
		<div class="col col-lg-4 col-md-6 col-sm-6 col-xs-6">
			<div class="cardContainer">
			<div class="statusLabel">
				<p>' . __('ENDED') . '</p>
			</div>
				<a href="' . $eventurl . '" target="_blank">
					<img src="' . $eventimg . '">
				</a>
				<div class="colInner">
					<a href="' . $eventurl . '" target="_blank">
						<p class="display-medium-title details-title">' . $eventTitle . '</p>
					</a>
					<p class="display-medium-date-read">
						<span class="display-medium-date">' . $finaldate . '</span>
					</p>
					<p>
						<a href="' . $eventurl . '" target="_blank" class="text-right display-medium-readmore">Details</a>
					</p>
				</div>
			</div>
		</div>';
	}
	
	echo '</div>';
    
    return ob_get_clean(); 
}
add_shortcode('display_past_events', 'printPastEvents');