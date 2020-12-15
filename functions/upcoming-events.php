<?php function printUpcomingEvents() {
	
	ob_start();
	
	include "includes/Eventbrite.php";
	
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
    
    echo '
    <h2>Upcoming Events</h2>';
	
	if ( $events > 0 ) {
	
	echo '<div class="row gutterSpaceWide">';
	
		foreach ($events->events as $event) {
			$eventimg = $event->logo->url;
			$eventurl = $event->url;
			$eventdate = $event->start->local;
			$fixdate = new DateTime($eventdate);
			$finaldate = $fixdate->format('F j, Y');
			$eventTitle = $event->name->html;
				
			echo '
			<div class="col col-lg-4 col-md-6 col-sm-6 col-xs-12">
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
		}
	
	echo '</div>';
	
	} else {
		echo '
		<p>There are no upcoming events. Please check back soon!</p>';
	}
    
    return ob_get_clean(); 
}
add_shortcode('display_upcoming_events', 'printUpcomingEvents');
