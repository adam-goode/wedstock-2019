<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Wedstock 2019</title>
                <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.typekit.net/sce2eaq.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link rel="apple-touch-icon" sizes="57x57" href="/images/icon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/icon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/icon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/icon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/icon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/icon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/icon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/icon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/icon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/images/icon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/images/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/icon/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

    </head>
    <body>
 
    <header class="cd-auto-hide-header">
        <nav class="cd-primary-nav">
            <nav class="navbar navbar-expand-sm fixed-top wid-100 p-0">
                <div class="d-flex justify-content-center wid-100" id="navbarSupportedContent">
                    <ul class="navbar-nav d-md-flex d-sm-inline d-contents justify-content-center align-items-center text-center m-auto wid-100">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#venue">The Venue</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link d-flex align-items-center" href="#stageTimes">Stage Times</a>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#stayingOver">Staying Over</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#presents">Presents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#contact">RSVP</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </nav> 
    </header> 

    @include('partials.alerts')

