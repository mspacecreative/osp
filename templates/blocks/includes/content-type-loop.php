<?php
$numposts = get_field('number_of_posts') ? get_field('number_of_posts') : '3';
$contenttype = get_field('content_type');
$requestformat = get_field('request_format');
//$curated = get_field('curated');
//$queried = get_field('queried');
$curatedposts = get_field('curated_posts');
$colratio = get_field('number_of_columns');
switch ($colratio) {
    case 'one':
        $colratio = ' col-lg-12 col-md-12 col-sm-12';
        break;
    case 'two':
        $colratio = ' col-lg-6 col-md-6 col-ms-6';
        break;
    case 'three':
        $colratio = ' col-lg-4 col-md-4 col-ms-6';
        break;
    case 'four':
        $colratio = ' col-lg-3 col-md-3 col-ms-6';
        break;
    default:
        $colratio = ' col-lg-4 col-md-4 col-ms-6';
        break;
}
$args = array(
    'posts_per_page' => $numposts,
    'post_type' => $contenttype,
);
$queriedloop = new WP_Query($args);

include 'column-gutters.php';

if ($displayformat == 'cards') {
    
    echo 
    '<div class="row cardGrid' . $sectiongutters . '">';

    if ($requestformat == 'queried') {
        if ($queriedloop->have_posts()) {
            while ($queriedloop->have_posts()) {
                $queriedloop->the_post();
                $title = get_the_title($queriedloop->ID);
                $excerpt = get_the_excerpt($queriedloop->ID);
                $date = get_the_date( 'F j, Y', $queriedloop->ID );
                $readmore = '<a class="readMore" href="' . get_the_permalink($queriedloop->ID) . '">' . esc_html_e('Read more', 'osp') . '</a>';
                echo 
                '<div class="col' . $colratio . ' col-xs-12">
                    <div class="colInner cardContainer whiteBg">
                        <h4>' . $title . '</h4>
                        <h5 class="date"> ' . $date . '</h5>'
                        . $readmore .
                    '</div>
                </div>';
            }
        }
    } elseif ($requestformat == 'curated') {
        foreach ($curatedposts as $curatedpost) {
            setup_postdata($curatedpost);
            $title = get_the_title($curatedpost->ID);
            $excerpt = get_the_excerpt($curatedpost->ID);
            $date = get_the_date( 'F j, Y', $curatedpost->ID );
            $readmore = '<a class="readMore" href="' . get_the_permalink($curatedpost->ID) . '">' . esc_html_e('Read more', 'osp') . '</a>';
            echo 
            '<div class="col' . $colratio . ' col-xs-12">
                <div class="colInner cardContainer whiteBg">
                    <h4>' . $title . '</h4>
                    <h5 class="date"> ' . $date . '</h5>'
                    . $readmore .
                '</div>
            </div>';
        }
    }

    echo 
    '</div>';
}