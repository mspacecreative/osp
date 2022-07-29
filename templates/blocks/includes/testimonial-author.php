<?php
if ($author): 
    echo '<p class="testimonialAuthor">' . esc_html('- ') . '<strong>' . $author . '</strong>'; 
endif; 

if ($title || $company): 
    echo '<br><span style="margin-left: 11px;">'; 
endif; 

if ($title && $company): 
    echo $title . ', ' . $company; 
elseif ($title): 
    echo $title; 
elseif ($company): 
    echo $company; 
endif;