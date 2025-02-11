<!-- LOADER -->
<div id="preloader">
    <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
    </div>
</div><!-- end loader -->
<!-- END LOADER -->

<div class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="left-top">
                    <div class="email-box">
                        <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> youremail@gmail.com</a>
                    </div>
                    <div class="phone-box">
                        <a href="tel:1234567890"><i class="fa fa-phone" aria-hidden="true"></i> +1 234 567 890</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="right-top">
                    <div class="social-box">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss-square" aria-hidden="true"></i></a></li>
                        <ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header header_style_01">
    <nav class="megamenu navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logos/btj.png" alt="image" style="max-height: 70px;"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/">Home</a></li>
                    <li><a class="nav-link {{ ($title === "About") ? 'active' : ''}}" href="/about">About us</a></li>
                    <li><a class="nav-link {{ ($title === "Contact") ? 'active' : ''}}" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>