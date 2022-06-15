<!DOCTYPE html>
<html lang="AF-fa" dir="rtl">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            <?= trans('label.system_title');?> 
        </title>
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icons/logo.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('icons/logo.png')  }}">
        <!-- Nucleo Icons -->
        <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custome.css')}}">
        @yield("internal_css")
    </head>

    <body class="g-sidenav-show bg-gray-100">
