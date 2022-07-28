<?php
$rowheading = get_field('row_heading');
$rowheadingalignment = get_field('row_heading_alignment');
$headingtag = get_field('heading_tag');
switch ($headingtag) {
    case 'h1':
        $headingtag = '<h1>' . $rowheading . '</h1>';
        break;
    case 'h2':
        $headingtag = '<h2>' . $rowheading . '</h2>';
        break;
    case 'h3':
        $headingtag = '<h3>' . $rowheading . '</h3>';
        break;
    case 'h4':
        $headingtag = '<h4>' . $rowheading . '</h4>';
        break;
    case 'h5':
        $headingtag = '<h5>' . $rowheading . '</h5>';
        break;
    case 'h6':
        $headingtag = '<h6>' . $rowheading . '</h6>';
        break;
    default:
        $headingtag = '<h1>' . $rowheading . '</h1>';
        break;
}
    
echo $headingtag;