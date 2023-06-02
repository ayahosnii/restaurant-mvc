<?php

return [
    'template' => [
        'nav'               => TEMPLATE_PATH . 'nav.php',
        ':view'             => ':action.view',
    ],
    'header_resources' => [
        'css' => [
            'animate'     => CSS . 'animate-3.7.0.css',
            'fawsome'     => CSS . 'font-awesome-4.7.0.min.css',
            'bootstrap'     => CSS . 'bootstrap-4.1.3.min.css',
            'owl-carousel'     => CSS . 'owl-carousel.min.css',
            'datetimepicker'     => CSS . 'jquery.datetimepicker.min.css',
            'style'     => CSS . 'style.css',
        ],
        'js' => [
            'jquery'     => JS . 'vendor/jquery-2.2.4.min.js',
            'bootstrap'     => JS . 'vendor/bootstrap-4.1.3.min.js',
            'wow'     => JS . 'vendor/wow.min.js',
            'owl-carousel'     => JS . 'vendor/owl-carousel.min.js',
            'datetimepicker'     => JS . 'vendor/jquery.datetimepicker.full.min.js',
            'nice-select'     => JS . 'vendor/jquery.nice-select.min.js',
            'main'     => JS . 'main.js',
        ],

    ],
];

