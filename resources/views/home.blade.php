<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}} | Home</title>
    <link rel="icon" href="{{ asset('images/dc-logo.png')}}" type="image/png">

    @vite('resources/js/app.js')
</head>
<body>
    <header class="container">
        <nav>
            <figure>
                <a href="#"><img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="DC"></a>
            </figure>
            <ul>
               <li><a href="{{ url('/')}}">Home</a></li>
               <li><a href="{{ route('characters')}}">characters</a></li>
               <li><a href="{{ route('comics')}}">comics</a></li>
               <li><a href="{{ route('tv')}}">tv</a></li>
               <li><a href="{{ route('games')}}">games</a></li>
               <li><a href="{{ route('collectibles')}}">collectibles</a></li>
               <li><a href="{{ route('videos')}}">videos</a></li>
               <li><a href="{{ route('fans')}}">fans</a></li>
               <li><a href="{{ route('news')}}">news</a></li>
               <li><a href="{{ route('shop')}}">shop</a></li>
            </ul>
            <div class="search">
                <form action="#">
                    <input type="text" placeholder="search">
                    <i class="fas fa-magnifying-glass"></i>
                </form>
            </div>
        </nav>
    </header>
    <div class="jumbotron">ciao</div>
</body>
<footer>
    <!-- Footer top -->
    <nav class="footer-top">
        <div class="container">
            <div class="footer-row">
                <div class="footer-col">
                    <ul>
                        <h4>DC COMICS</h4>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                    <h4>SHOP</h4>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>DC</h4>
                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choises</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>SITES</h4>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
                <div>
                    <img src="../img/dc-logo-bg.png" alt="logo-dc">
                </div>
            </div>
        </div>
    </nav>

    <!-- Footer bottom -->
    <nav class="footer-bottom">
        <nav class="container">
            <div class="left-nav">
                <button>SIGN UP NOW!</button>
            </div>
            <div class="right-nav">
                <span>follow us</span>
                <ul>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png')}}"></a></li>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png')}}"></a></li>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png')}}"></a></li>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}"></a></li>
                    <li><a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png')}}"></a></li>
                </ul>
            </div>
        </nav>
    </nav>
</footer>
</html>