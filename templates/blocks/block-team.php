<?php 
$heading = get_field('heading');
$headingtag = get_field('heading_tag');
$headingalignment = (get_field('heading_alignment') === 'center') ? ' text-align-center' : '';
$cpt = get_field('post_type');
$layout = get_field('layout');
$colcount = get_field('column_count');
$liststyle = get_field('list_style');
$logoalignment = get_field('logo_alignment');
$placeholderperson = get_template_directory_uri() . '/assets/img/placeholders/person.png';

switch ($headingtag) {
    case 'h1':
        $headingtag = 'h1';
        break;
    case 'h2':
        $headingtag = 'h2';
        break;
    case 'h3':
        $headingtag = 'h3';
        break;
    default:
        $headingtag = 'h2';
        break;
}

switch ($colcount) {
    case 'one':
        $colcount = 'col col-lg-12 col-md-12 col-sm-12 col-xs-12';
        break;
    case 'two':
        $colcount = 'col col-lg-6 col-md-6 col-sm-6 col-xs-12';
        break;
    case 'three':
        $colcount = 'col col-lg-4 col-md-4 col-sm-6 col-xs-12';
        break;
    case 'four':
        $colcount = 'col col-lg-3 col-md-3 col-sm-6 col-xs-12';
        break;
    default:
    $colcount = 'col col-lg-4 col-md-4 col-sm-6 col-xs-12';
        break;
}
switch ($sectionwidth) {
    case 'full':
        $sectionwidth = '';
        break;
    case '1280':
        $sectionwidth = '1280';
        break;
    case '1080':
        $sectionwidth = '1080';
        break;
    case '800':
        $sectionwidth = '800';
        break;
    default:
    $sectionwidth = '';
        break;
}
switch ($logoalignment) {
    case 'left':
        $logoalignment = '';
        break;
    case 'center':
        $logoalignment = ' center-lg center-md center-sm center-xs centred-logo';
        break;
    case 'right':
        $logoalignment = ' end-lg end-md end-sm end-xs right-aligned-logo';
        break;
    default:
        $logoalignment = '';
        break;
}
include 'includes/section-width.php';
include 'includes/column-gutters.php';
include 'includes/section-padding.php';
echo 
'<section class="team-members section' . $sectionpadding . '">
    <div class="innerContainer content-loop">
        <div class="container' . $sectionwidth . '">';
        if ($heading) {
            echo '<' . $headingtag . ' class="our-team-heading' . $headingalignment . '">' . $heading . '</' . $headingtag . '>';
        }
        if ($cpt) {
            if ($layout == 'grid') {
                echo 
                '<div class="row center-lg center-md center-sm center-xs' . $sectiongutters . '">';
            }
            foreach ($cpt as $item) {
                setup_postdata($item);
                $title = $item->post_title ? '<h3>' . $item->post_title . '</h3>' : '';
                $content = $item->post_content ? $item->post_content : '';
                $featimg = get_the_post_thumbnail_url($item->ID, 'medium-square');
                $readbio = '<a href="#" data-id="' . $item->ID . '" class="btn blue read-bio">' . __('Read bio') . '</a>'; 
                //$externallink = get_field('url', $item->ID);
                $linklabel = get_field('button_label', $item->ID) ? get_field('button_label', $item->ID) : __('Read bio');
                $position = get_field('title__position', $item->ID);
                $location_array = get_the_terms($item, 'company_location');
                $location = array();
                $firstname = current(explode(' ', get_the_title($item->ID)));
                $email = get_field('email_address', $item->ID) ? '<a href="mailto:' . get_field('email_address', $item->ID) . '" class="btn blue">' . __('Email ') . $firstname . '</a>' : '';
                $bluebutton = $content ? $readbio : $email;

                // RANDOM IMAGES
                $bgimg = array(
                    '/2022/02/pexels-emiliano-arano-1350197.jpg',
                    '/2022/02/pexels-lisha-riabinina-37487.jpg',
                    '/2020/11/AdobeStock_246493972.jpeg',
                    '/2020/11/ivan-bandura-5cwigXmGWTo-unsplash.jpg',
                    '/2020/11/pexels-matthew-barra-812958.jpg',
                    '/2022/02/pexels-lisa-fotios-691858.jpg',
                    '/2022/02/aquaculture-2.jpeg',
                    '/2022/06/seaweed.png',
                );
                shuffle($bgimg);
                $upload_dir = wp_upload_dir();

                foreach ($bgimg as $img) {
                    $bgimgresult .= ' style="background-image: url(' . $upload_dir['baseurl'] . $img . ');"';
                }

                echo $first_word;

                if ($location_array) {
                    foreach ($location_array as $cat) {
                        if ($cat->parent) {
                            array_push($location, $cat->name);
                        }
                    }
                }
                if ($location_array) {
                    foreach ($location_array as $cat) {
                        if (!$cat->parent) {
                            array_push($location, $cat->name);
                        }
                    }
                }

                $location_array = $location_array ? '<br>' . implode(', ', $location) : '';
                
                if ($layout == 'list') {
                    echo 
                    '<div class="row extra-col-spacing bottom-border gutterSpaceWide">';
                        if ($liststyle == 'inline' || $liststyle == '') {
                        echo 
                        '<div class="col col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="logo-container logo-container--inline' . $logoalignment . '">';
                            if ($featimg) {
                                echo 
                                '<img src="' . $featimg . '" class="feat-img--list">';
                            }
                            echo 
                            '</div>
                        </div>';
                        }
                        if ($liststyle == 'inline' || $liststyle == NULL) {
                            echo
                            '<div class="col button-top-margin col-lg-9 col-md-9 col-sm-8 col-xs-12">';
                        } elseif ($liststyle == 'stacked') {
                            echo
                            '<div class="col col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="logo-container">
                                    <img src="' . $featimg . '" class="feat-img--list stacked">
                                </div>
                            </div>
                            <div class="col button-top-margin col-lg-12 col-md-12 col-sm-12 col-xs-12">';
                        } else {
                            echo
                            '<div class="col button-top-margin col-lg-9 col-md-9 col-sm-8 col-xs-12">';
                        }
                                echo $title;
                            
                            if ($location_array) {
                                echo '<span style="margin-bottom: 15px; display: inline-block;"><strong>' . __('Location: ') . '</strong>' . implode(', ', $location) . '</span>';
                            }
                            if ($location_array && $status) {
                                echo esc_html_e('&nbsp;&nbsp;|&nbsp;&nbsp;');
                            }
                            if ($status) {
                                echo '<span style="margin-bottom: 15px; display: inline-block;"><strong>' . __('Status: ') . '</strong>' . $status[0]->name . '</span>';
                            }
                            echo $content;
                            if ($externallink) {
                                echo '<a href="' . $externallink . '" target="_blank" class="btn blue external-link">' . $linklabel . '</a>';
                            }
                        echo 
                        '</div>
                    </div>';
                } elseif ($layout == 'grid') {
                    echo 
                    '<div class="' . $colcount . '">
                        <div class="boxed"' . $bgimgresult . '>
                            <div class="logo-container' . $logoalignment . '">';
                                if (!empty($content)) {
                                echo 
                                '<a href="#" class="read-bio team-member-link">';
                                }
                                    if ($featimg) {
                                        echo 
                                        '<img src="' . $featimg . '" class="feat-img--list">';
                                    } else {
                                        echo 
                                        '<img src="' . $placeholderperson . '">';
                                    }
                                if (!empty($content)) {
                                echo
                                '</a>';
                                }
                            echo 
                            '</div>'
                            . $title;
                            if ($position) {
                                echo '<p>' . $position, $location_array . '</p>';
                            }
                            echo
                            $bluebutton;
                            echo 
                        '</div>
                    </div>';
                }
                if (!empty($content)) {
                    echo
                    '<div class="bio-overlay">
                        <div class="bio-overlay--inner">
                            <div class="bio-content-table-cell" style="position: relative;">
                                <div style="position: relative;">
                                    <span class="mc-close-window close-modal" style="background-image: url(' . get_template_directory_uri() . '/assets/img/icons/close.png); background-size: 100%;"></span>  
                                    ' . $content . '
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            }
            if ($layout == 'grid') {
                echo 
                '</div>';
            }
        echo
        '</div>';
        }
    echo 
    '</div>
</section>';