<?php

return [
    'template' => [
      'wrapper_start'     => ADMIN_TEMPLATE_PATH . 'wrapperstart.php',
      'nav'               => ADMIN_TEMPLATE_PATH . 'nav.php',
      'header'            => ADMIN_TEMPLATE_PATH . 'header.php',
      ':view'             => ':action.view',
      'wrapper_end'       => ADMIN_TEMPLATE_PATH . 'wrapperend.php',
    ],


    'header_resources' => [
        'css' => [
            'googleapis'     =>  'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
            'ionicframework'     =>  'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
            'fontawesome'     => ADMIN_CSS . 'plugins/fontawesome-free/css/all.min.css',
            'tempusdominus'     => ADMIN_CSS . 'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
            'icheck-bootstrap'     => ADMIN_CSS . 'plugins/icheck-bootstrap/icheck-bootstrap.min.css',
            'jqvmap'     => ADMIN_CSS . 'plugins/jqvmap/jqvmap.min.css',
            'adminlte'     => ADMIN_CSS . 'dist/css/adminlte.min.css',
            'OverlayScrollbars'     => ADMIN_CSS . 'plugins/overlayScrollbars/css/OverlayScrollbars.min.css',

            'daterangepicker'     => ADMIN_CSS . 'plugins/daterangepicker/daterangepicker.css',
            'summernote'     => ADMIN_CSS . 'plugins/summernote/summernote-bs4.min.css'
        ],

      'js' => [
        'modernizr'     => JS . 'vendor/modernizr-2.8.3.min.js',
      ],

    ],
  'plugins_scripts' => [
    'jquery'              => ADMIN_JS . 'plugins/jquery/jquery.min.js',
    'bootstrap'           => ADMIN_JS . 'plugins/bootstrap/js/bootstrap.bundle.min.js',
    'chartjs'             => ADMIN_JS . 'plugins/chart.js/Chart.min.js',
    'jqvmap'              => ADMIN_JS . 'plugins/jqvmap/jquery.vmap.min.js',
    'jqueryMap'           => ADMIN_JS . 'plugins/jqvmap/maps/jquery.vmap.usa.js',
    'jquery-knob'         => ADMIN_JS . 'plugins/jquery-knob/jquery.knob.min.js',
    'moment'              => ADMIN_JS . 'plugins/moment/moment.min.js',
    'daterangepicker'     => ADMIN_JS . 'plugins/daterangepicker/daterangepicker.js',
    'tempusdominus'       => ADMIN_JS . 'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
    'summernote'          => ADMIN_JS . 'plugins/summernote/summernote-bs4.min.js',
    'overlayScrollbars'   => ADMIN_JS . 'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
    'adminlte'            => ADMIN_JS . 'dist/js/adminlte.js',
    'main'                => ADMIN_JS . 'dist/js/main.js',
    'demo'                => ADMIN_JS . 'dist/js/demo.js',
    'dashboard'           => ADMIN_JS . 'dist/js/pages/dashboard.js',
  ]

];

