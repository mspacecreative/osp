<?php
if ( have_rows('cta_links') ):
	while ( have_rows('cta_links') ): the_row();	
		
	if ( have_rows('cta_link') ):
	while ( have_rows('cta_link') ): the_row();
		$linklabel = get_sub_field('label');
		$exturl = get_sub_field('url');
		$pagelink = get_sub_field('page');
		$pdf = get_sub_field('pdf');
		$linktype = get_sub_field('link_type');
								
		echo 
		'<p class="inline-links">
			<a class="btn dark blue" href="'; if ( $linktype == 'internal' ): echo $pagelink; elseif ( $linktype == 'external' ): echo $exturl; elseif ( $linktype == 'pdf' ): echo $pdf; endif; echo '"'; if ( $linktype == 'external' || $linktype == 'pdf' ): echo ' target="_blank"'; endif; echo '>' 
				. $linklabel . 
			'</a>
		</p>';
				
	endwhile;
	endif;
	
	endwhile;
endif;