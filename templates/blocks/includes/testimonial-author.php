<?php
if ( $author && $title && $company ) {
    echo '<p class="testimonialAuthor">' . esc_html('- '), $author . ', ' . $title . ', ' . $company . '</p>';
} elseif ( $author && $title ) {
    echo '<p class="testimonialAuthor">' . esc_html('- '), $author . ', ' . $title . '</p>';
} elseif ( $author && $company ) {
    echo '<p class="testimonialAuthor">' . esc_html('- '), $author . ', ' . $company . '</p>';
} elseif ( $author ) {
    echo '<p class="testimonialAuthor">' . esc_html('- '), $author . '</p>';
}