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

 
    </head>
    <body>
    <div id="app">

    <header class="cd-auto-hide-header">
        <nav class="cd-primary-nav">
            <nav class="navbar navbar-expand-sm fixed-top wid-100 p-0">
                <div class="d-flex justify-content-center wid-100" id="navbarSupportedContent">
                    <ul class="navbar-nav d-md-flex d-sm-inline d-contents justify-content-center align-items-center text-center m-auto wid-100">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#venue">The Venue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">Stage Times</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">Staying Over</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">Presents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center" href="#">RSVP</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </nav> 
    </header> 