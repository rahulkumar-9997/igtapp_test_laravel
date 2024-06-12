<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     <script> window.Laravel = { csrfToken: 'csrf_token() ' } </script>
    <title>IGTAPPS Machine Test</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <!--favicon-->
    <link rel="icon" href="{{asset('backend/images/favicon-32x32.png')}}" type="image/png" />
    <!--plugins-->
    <link rel="stylesheet" href="{{asset('backend/plugins/notifications/css/lobibox.min.css')}}" />
    <link href="{{asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
    <link href="{{asset('backend/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('backend/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('backend/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/bootstrap-extended.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{asset('backend/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/css/header-colors.css')}}" />
    
    <!--<link rel="stylesheet" href="{{asset('/css/app.css')}}">-->
    @stack('styles')
</head>
<?php
