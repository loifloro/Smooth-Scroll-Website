<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll Website</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kumbh+Sans">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
</head>
<body>
    <!--Hero Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="#home"  id="navbar-logo">LOIX</a>
       
        <div class="navbar__toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
        </div>
        <ul class="navbar__menu">
            <li class="navbar__item">
                <a href="#home" class="navbar__link" id="home-page"> Home</a>
            </li>
            <li class="navbar__item">
                <a href="#about" class="navbar__link" id="about-page">About</a>
            </li>
            <li class="navbar__item">
                <a href="#services" class="navbar__link" id="services-page">Services </a>
            </li>
            <li class="navbar__btn">
                <a href="#sign-up" class="button" id="signup">Sign  Up</a>
            </li>  
        </ul>
        </div>
    </nav>

    <!--Hero Section -->
    <div class="hero" id="home">
        <div class="hero__container">
            <h1 class="hero__heading"> Choose your <span> colors </span></h1>
            <p class="hero__description">Unlimited Posibilities</p>
            <button class="main__btn"><a href="#">Explore</a></button>
        </div>
    </div>

    <!-- About Section -->
    <div class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                    <div class="main__img--card"> <i class="fas fa-layer-group"></i> </div>    
            </div>
            <div class="main__content">
                <h1>What do we do?</h1>
                <h2>We help business scale</h2>
                <p>Schedule a call to learn more about our services</p>
                <button class="main__btn"><a href="#">Schedule Call</a></button>
            </div>
        </div>    
    </div>

    <!-- Services Section -->
    <div class="services" id="services">
        <h1> Services </h1>
        <div class="services__wrapper">
            <!-- First Card -->
            <div class="services__card">
                <h2> Custom Colorways</h2>
                <p> AI Powered Technology</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
            <!-- Second Card -->
            <div class="services__card">
                <h2> Custom Colorways</h2>
                <p> AI Powered Technology</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
            <!-- Third Card -->
            <div class="services__card">
                <h2> Custom Colorways</h2>
                <p> AI Powered Technology</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
            <!-- Fourth Card -->
            <div class="services__card">
                <h2> Custom Colorways</h2>
                <p> AI Powered Technology</p>
                <div class="services__btn"><button>Get Started</button></div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="main" id="sign-up">
        <div class="main__container">
                <div class="main__content">
                <h1>Join Our Team</h1>
                <h2>We help business scale</h2>
                <p>Schedule a call to learn more about our services</p>
                <button class="main__btn"><a href="#">Sign Up</a></button>    
            </div>
            <div class="main__img--container">
                <div class="main__img--card"> <i class="fas fa-users"></i> </div>    
            </div>
            
        </div>    
    </div>

    <!-- Footer Section -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>About Us</h2>
                    <a href="/sign-up">How it works</a>
                    <a href="/sign-up">Testimonials</a>
                    <a href="/sign-up">Careers</a>
                    <a href="/sign-up">Terms of Services</a>
                </div>
                <div class="footer__link--items">
                    <h2>Contact Us</h2>
                    <a href="/sign-up">How it works</a>
                    <a href="/sign-up">Testimonials</a>
                    <a href="/sign-up">Careers</a>
                    <a href="/sign-up">Terms of Services</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Video</h2>
                    <a href="/sign-up">How it works</a>
                    <a href="/sign-up">Testimonials</a>
                    <a href="/sign-up">Careers</a>
                    <a href="/sign-up">Terms of Services</a>
                </div>
                <div class="footer__link--items">
                    <h2>Social Media</h2>
                    <a href="/sign-up">How it works</a>
                    <a href="/sign-up">Testimonials</a>
                    <a href="/sign-up">Careers</a>
                    <a href="/sign-up">Terms of Services</a>
                </div>
            </div>
        </div>
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="" class="" id="footer__logo">LOIX</a>
                </div>
                <p class="website__rights">© LOIX 2021. All rights reserved</p>
                <div class="social__icons">
                    <a href="" class="social__icon--links"> <i class="fab fa-facebook"></i></a>
                    <a href="" class="social__icon--links"> <i class="fab fa-twitter"></i></a>
                    <a href="" class="social__icon--links"> <i class="fab fa-youtube"></i></a>
                    <a href="" class="social__icon--links"> <i class="fab fa-pinterest"></i></a>
                    
                    
                </div>
            </div>
        </section>
    </div>


    
    <script src="app.js"></script>
</body>
</html>
