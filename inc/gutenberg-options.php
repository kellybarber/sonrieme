<?php

add_filter('image_size_names_choose', function ($sizes){
    $custom_sizes = array(
        'page-header' => 'Page Header',
        'section-header' => 'Section Header'
    );
    return array_merge( $sizes, $custom_sizes );
});