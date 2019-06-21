<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>
        <meta charset="utf-8">
        <title>Josh Hoath</title>
    </head>
    <body>
        <nav class="sidebar d-none d-lg-block " data-aos="fade-right">
            <ul>
                <li class="text-center"><a href="#about-me">About Me</a></li>
                <li class="text-center"><a href="#portfolio">Portfolio</a></li>
                <li class="text-center"><a href="#contact-me">Contact Me</a></li>
                <li class="text-center"><a href="https://github.com/JoshHoath">Github</a></li>
                <li class="text-center footer">&copy; Josh Hoath 2019</li>
            </ul>
        </nav>
        <div id="particles-js"></div>
        <div class="intro text-center">
            <h1 class="text-center" data-aos="fade-down" data-aos-duration="1500">Hi, my name is <p>Josh<p></h1>
            <h4 class="text-center" data-aos="fade-up" data-aos-duration="3000">I'm a Junior full-stack web developer</h4>
            <div class="btn-wrapper" data-aos="fade-up" data-aos-duration="6000">
                <div class="btn-wrapper__container">
                    <div class="btn-inner">
                        <a class="btn-inner__text" href="#portfolio">See my Work</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="about">
            <h2 class="text-center" id="about-me">About me</h2>
            <div class="text-center avatar-pic">
                <div class="avatar-container">
                    <img src="images/me.jpg" alt="Josh Hoath">
                </div>
                <div class="about-text">
                    <h5 class="text-center description">I have passion for front end design with a developing skill set as a backend developer. I am always looking for new opportunities
                        to enhance my skills. I have the ability to work proficiently on my own, but flourish in a team enviroment. I pride my self on my ability to problem solve, as well as a
                        keen eye for detail. I would be a valued addition to a team.
                    </h5>
                </div>
            </div>
            <div class="lang">
                <div class="html-container">
                    <h6 class="html">HTML5</h6>
                    <div class="meter">
                        <span class="html-meter"></span>
                    </div>
                </div>
                <div class="css-container">
                    <h6 class="css">CSS3</h6>
                    <div class="meter">
                        <span class="css-meter"></span>
                    </div>
                </div>
                <div class="js-container">
                    <h6 class="js">JavaScript</h6>
                    <div class="meter">
                        <span class="js-meter"></span>
                    </div>
                </div>
                <div class="jquery-container">
                    <h6 class="jqeuery">JQuery</h6>
                    <div class="meter">
                        <span class="jquery-meter"></span>
                    </div>
                </div>
                <div class="php-container">
                    <h6 class="php">PHP</h6>
                    <div class="meter">
                        <span class="php-meter"></span>
                    </div>
                </div>
                <div class="laravel-container">
                    <h6 class="larvel">Laravel</h6>
                    <div class="meter">
                        <span class="larvel-meter"></span>
                    </div>
                </div>
                <div class="vuejs-container">
                    <h6 class="vuejs">Vue.js</h6>
                    <div class="meter">
                        <span class="vuejs-meter"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-view" id="portfolio">
            <div class="left-bar">
                <div class="text-card-one">
                    <div class="container text-center">
                        <h5>Currently rebuilding a school project. A basic CRUD application, adding a gif vue component, and hastag system. Where some of my free time goes</h5>
                        <span class="btn btn-warning">Laravel</span>
                        <span class="btn btn-success">VueJS</span>
                        <span class="btn btn-primary">CSS3</span>
                        <span class="btn btn-primary"><a href="https://github.com/JoshHoath/Final" target="_blank">Github</a></span>
                    </div>
                </div>
                <div class="text-card-two">
                    <div class="container text-center">
                        <h5>Colaborating on a website with class mates and proffesor, for a local non-profit orginization. Comming Soon...</h5>
                        <span class="btn btn-success">Wordpress</span>
                        <span class="btn btn-primary">CSS3</span>
                        <span class="btn btn-primary"><a href="https://github.com/jimmyjames88/pursesofhope" target="_blank">Github</a></span>
                    </div>
                </div>
                <div class="text-card-three">
                    <div class="container text-center">
                        <h5>This was my very first website. As part of a school project we were tasked with building a basic static pizza website</h5>
                        <span class="btn btn-success">HTML5</span>
                        <span class="btn btn-primary">CSS3</span>
                        <span class="btn btn-primary"><a href="https://github.com/JoshHoath/Okotoks-Pizza" target="_blank">Github</a></span>
                    </div>
                </div>
                <div class="text-card-four">
                    <div class="container text-center">
                        <h5>Basic rock paper scissors</h5>
                        <span class="btn btn-success">Vue.Js</span>
                        <span class="btn btn-danger">Webpack</span>
                        <span class="btn btn-primary"><a href="#">GitHub</a></span>
                    </div>
                </div>
            </div>
            <div class="right-bar">
                <div class="card-one text-center" data-aos="fade-in-left" data-aos-duration="1000">
                    <h5 class="twitter-container">Twitter Clone</h5>
                    <button class="btn btn-custom"><a href="https://josh-tweeter-staging.herokuapp.com/" target="_blank"><i class="fas fa-arrow-right"></i></a></button>
                </div>
                <div class="card-two text-center" data-aos="fade-in-middle" data-aos-duration="1000">
                    <h5 class="poh-container">Purses of hope</h5>
                </div>
                <div class="card-three text-center" data-aos="fade-in-right" data-aos-duration="1000">
                    <h5 class="opp-container">Okotoks Pizza</h5>
                    <button class="btn btn-custom"><a href="/2ndOPP/index.html" target="_blank"><i class="fas fa-arrow-right"></i></a></button></h5>
                </div>
                <div class="card-four text-center" data-aos="fade-in-middle" data-aos-duration="1000">
                    <h5 class="rps-container">Rock Paper Scissors</h5>
                    <a href="/rps2/index.html"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="contact-container" id="contact-me">
            <div class="contact-title text-center">
                <h2>Want to work together?</h2>
            </div>
            <div class="contact-form">
                <form id="contact-form" method="post" action="contact-form.php">
                    <input name="name" type="text" class="form-control" placeholder="Full Name" required>
                    <br>
                    <input name="email" type="text" class="form-control" placeholder="Your Email" required>
                    <br>
                    <input name="subject" type="text" class="form-control" placeholder="Subject" required>
                    <br>
                    <textarea name="message" class="form-control" placeholder="Message" row="4"required></textarea>
                    <br>
                    <button type="submit" name="submit" class="form-control submit">Send Message</button>
                </form>
            </div>
        </div>
        <button onclick="topFunction()" id="myBtn"><i class="fas fa-arrow-up"></i></button>
    <script src="js/particles.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    </body>
</html>
