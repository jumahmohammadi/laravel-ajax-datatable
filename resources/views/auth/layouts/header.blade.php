<!DOCTYPE html>
<html lang="fa-AF" dir="rtl">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            <?= trans('auth.login_title')?>
        </title>
        <link rel="icon" type="image/x-icon" href="{{asset('icons/logo.png')}}">
        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custome.css')}}">
        @yield(" internal_css")
    </head>

    <body>

        <div class="load">
            <div class="loader"></div>
        </div>
