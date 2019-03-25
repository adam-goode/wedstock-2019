<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="hero" style="background-image: url('images/hero-img.jpg')";></div>
                        <div class="logo-wrapper">
                        <div class="logo-container d-block justify-content-center">
                            <img class="logo" src="/images/logo.svg" alt="">
                                                    <h2 class="text-center">Helen and Joe are getting married!</h2>
                            <h2 class="text-center">Saturday 24th August 2019</h2>
                            <h2 class="text-center">Alcott Farm, Alvechurch B48 7EH</h2>
                        </div>
                        <div class="caption-wrapper">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="venue" id="venue" style="background-image: url('images/section-two-bg.jpg')";>
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-7 venue-inner text-center text-md-left">
                        <img src="images/venue-heading.svg" class="venue-heading pb-md-5 pb-3" alt="">
                        <h2>Alcott Farm, Alvechurch B48 7EH</h2>
                        <p class="introduction">Our wedding ceremony and reception will be at Alcott Farm, just outside Alvechurch village.</p>
                        <p>It’s a beautiful 65-acre farm, and anyone who knows Helen will not be surprised to hear, it’s home to a load of horses. </p>
                        <p>The easiest way to find it is to head from Alvechurch village along Radford Road towards Weatheroak Hill. When you reach the Coach and Horses pub, turn right onto Icknield Street. Follow the road along from there and you’ll see a sign for Alcott Weddings, alongside the gate to the car park. </p>
                        <p>There’s plenty of parking on-site for everyone, so park up and let’s get partying! We’re keeping our fingers crossed for good weather, but there’s always a chance it could be cold and rainy, so please make sure you bring enough warm stuff to keep you toasty all evening. </p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            View map <i class="fas fa-angle-right"></i>
                        </button>

                    </div>
                </div>
            </div>
        </div>

        <div class="stage-times">
            <div class="container h-100">
                <div class="row h-100 align-items-end justify-content-center">
                    <div class="col-12 col-md-9 text-md-right text-center pb-5 stage-time-inner">
                        <h2>1.30pm – Arrival and drinks</h2>
                        <h2>2pm – The ceremony</h2>
                        <h2>4pm – Festival feast and speeches</h2>
                        <h2>7pm – Evening guests join the party</h2>
                        <h2>8pm – Cake cutting</h2>
                        <h2>8.30pm – First dance</h2>
                        <h2>9pm – Live music</h2>

                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 px-0">
                    <div class="fire-img" style="background-image: url('images/camp.jpg')";>
                        <div class="staying-over">
                            <img src="/images/staying-over.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 camping-info">
                    <div class="row align-items-center justify-content-center h-100 p-5">
                        <div class="col-12 col-md-10 text-center text-md-left">
                            <p>In true festival fashion, there are plenty of options for staying overnight on-site. </p>
                            <p>If you’d like to be a true festival goer, you’re welcome to bring your own tent! The venue charges £10 per tent and we can provide bacon butties in the morning!</p>
                            <p>You can also book a glamping pod, if you’re feeling a bit posh! 4m bell tents cost £160 to hire and sleep up to 4 people in style, with memory foam mattresses, fairy lights, rugs and cushions. There are other options available to sleep 6 or 8 people – just ask us if you’d like details of those. If you’d like to book one, email tipiandbelltenthire@gmail.com, quoting our names and the wedding date as a reference so they know you’re with us!</p>
                            <p>If you have a caravan, motorhome or, if you’re a real rock star, your very own tour bus, you can bring it along! The venue charges £10 if you’d like to park onsite overnight. </p>
                            <p>If camping isn’t your style, there are three hotels within three miles of the venue – hopefully close enough so that you can pop back in the morning for breakfast! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center staying-location">
                <a href="" class="col-12 col-md-4 d-inline-block staying-location-info w-100">
                    <span class="col-12 d-block">Westmead Hotel <span class="d-block small">(2 miles away)</span></span>
                </a>
                <a href="" class="col-12 col-md-4 d-inline-block staying-location-info w-100">
                    <span class="col-12 d-block">The Limes Country Lodge Hotel <span class="d-block small">(2 miles away)</span></span>
                </a>
                <a href="" class="col-12 col-md-4 d-inline-block staying-location-info w-100">
                    <span class="col-12 d-block">Abbey Hotel <span class="d-block small">(3 miles away)</span></span>
                </a>
            </div>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="present-hero" style="background-image: url('images/present.jpg')";></div>
                <div class="presents-wrapper">
                    <div class="presents-inner d-flex h-100 align-items-center justify-content-center">
                        <div class="row w-100 justify-content-center">
                            <div class="col-12 col-md-6">
                                <img class="logo" src="/images/presents.svg" alt="">
                                <p class="text-center mx-5">The most important thing to us is that our favourite people are there to celebrate with us on our big day. So if you’re able to make it, you’ve already given us the best gift ever! If you’d still really like to give us a present, there is one thing we can think of. We’re planning to go on a safari honeymoon in South Africa, so any contributions towards making our trip even more memorable would be massively appreciated. (But honestly, only if you want to. Phew, that was awkward!)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div class="present-hero" style="background-image: url('images/post.jpg')";></div>
                <div class="presents-wrapper">
                    <div class="presents-inner d-flex h-100 align-items-center">
                        <div class="row w-100 justify-content-center">
                            <div class="col-12 col-md-10">
                                <img class="rsvp ml-5 mb-3" src="/images/rsvp.svg" alt="">
                                <p class="text-left mx-5">So, can you make it? Please let us know whether or not you’ll be coming before DATE </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38988.3722942098!2d-1.946354195606252!3d52.35639737305314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bf776882481f%3A0x3d7209a06b6cf259!2sAlcott+Farm!5e0!3m2!1sen!2suk!4v1552599860259" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}" type="text/javascript" > </script>

    </body>
</html>
