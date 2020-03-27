<?php
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sharon Harrah | Portfolio</title>
    <meta name="description" content="Sharon Harrah - Social Media & Content Marketing Specialist Portfolio">
    <meta name="keywords" content="Sharon Harrah, Harrah, social media specialist, content marketing specialist, portfolio">
    <meta name="author" content="Paul Kwon">

    <!-- Animate CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   
    <!--Index CSS-->
    <link rel="stylesheet" href="/css/index.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
  
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140027274-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-140027274-1');
    </script>
    <script src="js/offline.js"></script>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#home">Sharon Harrah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#work">Work</a>
                </li>
            </ul>
        </div>
    </nav>
        <div id="content" class="container-fluid">
            <section id="home" class="animated lightSpeedIn delay-1s">
                <div class="container-fluid">
                    <div class="row">
                        <div id="splash" class="embed-responsive embed-responsive-21by9">
                            <video autoplay loop src="<?php echo $splash->value;?>"></video>
                        </div>
                     
                    </div>
                </div>
            </section>
            <section id="about">
                <div class="container-fluid">
                    <div class="row">
                        <img src="<?php echo $aboutMe->value;?>" alt="About Me Image" style="width:100%; height: 100%;">
                    </div>
                    <div id="social" class="row">
                        <div class="col">
                            <span class= "social">
                                <a aria-label="Resume" href="/views/resume.php" target="_blank" style="text-decoration: none; color: black;">
                                    RESUME
                                </a>
                            </span>
                            <span class="social">
                                <a aria-label="Linkedin" href="http://www.linkedin.com/in/sharonharrah/" target="_blank" style="text-decoration: none; color: black">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </span>
                            <span class="social">
                                <a aria-label="Email" href="mailto: sharon.harrah@hotmail.com" style="text-decoration: none; color: black;">
                                    <i class="fas fa-envelope"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </section>
            <section id="experience">
                <h1 class="robot" style="text-align:center">EXPERIENCE</h1>
                <div class="timeline container">
                    <!-- UW ASUWT -->
                    <div class="row">
                        <div class="col-xs-12 work left">
                            <div class="card">
                                <div class="card-header" style="text-align:center;">
                                    <h3 class="robot">UW ASUWT</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Student Government Multimedia Specialist</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Collaborate and translate project ideas into media productions. Produce, film, edit, and execute media projects. Develop promotional materials and ensure consistent use of Associated Students of University of Washington Tacoma (ASUWT) branding.</li>
                                    </ul>
                                    <ul class="container">
                                        <li>Use programs on Adobe Creative Cloud and Canva to create advertisements, logos, contents, and more for ASUWT and associated organizations.</li>
                                        <li>Create marketing and edit pictures that are shared on UWT campus, ASUWT Instagram, Facebook, Twitter, Email, and public website.</li>
                                        <li>Create captions that are clear, concise, and consistent for a diverse audience.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="date">
                                <h2 class="robot">October 2018 - Present</h2>
                            </div>
                            <div class="carot-top"></div>
                        </div>
                    </div>
                    <!-- TCPC -->
                    <div class="row">
                        <div class="col">
                            <div class="date">
                                <h2 class="robot">September 2015 - Present</h2>
                            </div>
                            <div class="carot-bottom"></div>
                        </div>
                        <div class="col-xs-12 work right">
                            <div class="card">
                                <div class="card-header" style="text-align:center;">
                                    <h3 class="robot">Tacoma Central Church</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Director of Youth Group (Volunteer)</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Worked under the supervision of the Youth Group Pastor that developed and oversaw programs and activities that were directed toward middle school and high school students in order to aid their spiritual development and growth.</li>
                                    </ul>
                                    <ul class="container">
                                        <li>Created the social media pages.</li>
                                        <li>Create various promotional goods or marketing materials.</li>
                                        <li>In charge of administrative work and weekly finance.</li>
                                        <li>Planned/Budgeted mid-large scale events and lead weekly meetings.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- T-Town Cafe -->
                    <div class="row">
                        <div class="col-xs-12 work left">
                            <div class="card">
                                <div class="card-header" style="text-align:center;">
                                    <h3 class="robot">T-Town Cafe</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Server | Barista</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Serve customer's needs as a cashier while preparing all beverages and desserts ordered.</li>
                                    </ul>
                                    <ul class="container">
                                        <li>Started the business social media account on  <a aria-label="TTownInstagram" href="https://www.instagram.com/t_towncafe/" style="color:#EF233B;" target="_blank">Instagram</a>.</li>
                                        <li>Helped create content/edit pictures to gain a presence in a diverse area.</li>
                                        <li>Created a temporary logo for the coffee and dessert cups, and punch card.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="date">
                                <h2 class="robot">April 2018 - November 2018</h2>
                            </div>
                            <div class="carot-top"></div>
                            <div class="carot"></div>
                        </div>
                    </div>
                    <!-- Macys -->
                    <div class="row">
                        <div class="col">
                            <div class="date">
                                <h2 class="robot">March 2016 - June 2017</h2>
                            </div>
                            <div class="carot-bottom"></div>
                            <div class="carot"></div>
                        </div>
                        <div class="col-xs-12 work right">
                            <div class="card">
                                <div class="card-header" style="text-align:center;">
                                    <h3 class="robot">Macys</h3>
                                    <h6 class="card-subtitle mb-2 text-muted">Sales Associate</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Customer Service Associate on the flexible work team responsible for outstanding customer service, creating an exceptional shopping experience, completing point of sale transactions inclusive of credit and Start Rewards enrollment, and delivering a clean, neat, and easy to shop environment.</li>
                                    </ul>
                                    <ul class="container">
                                        <li >Prepared to work in any department during a shift and on call.</li>
                                        <li> Worked cashier, answered phone calls, found missing products, and organized the sales floor.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="work">
                <h1 class="robot" style="text-align:center">SELECTED WORKS</h1>
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".email">Email</li>
                            <li data-filter=".flyer">Flyers</li>
                            <li data-filter=".ig">Instagram</li>
                            <li data-filter=".logo">Logo</li>
                            <li data-filter=".tv">TV Ad</li>
                        </ul>
                    </div>
                    <div class="portfolio">
                        <div class="container-fluid">
                            <div class="row" style="margin: 15px 0px;">
                                <div class="col-md-4">
                                    <a aria-label="FlyerProjects" href="/views/flyer.php?work=flyer" target="blank">
                                        <img src="/img/cover/flyerCover.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a aria-label="SocialMediaProjects" href="/views/ig.php?work=socialMedia" target="blank">
                                        <img src="/img/cover/socialMediaCover.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a aria-label="EmailProjects" href="/views/email.php?work=email" target="blank">
                                        <img src="/img/cover/emailCover.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin: 10px 0px;">
                                <div class="col-md-4">
                                    <a aria-label="LogoProjects" href="/views/logo.php?work=logo" target="blank">
                                        <img src="/img/cover/logoCover.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a aria-label="TVProjects" href="/views/tv.php?work=tv">
                                        <img src="/img/cover/tvCover.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a aria-label="CampaignProjects" href="/views/campaign.php?work=campaign">
                                        <img src="/img/cover/socialMediaCampaign.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    <!-- Optional JavaScript -->
    <!-- JQuery firts, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Smooth Scoll Script -->
    <script>
        $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                
                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });

    </script>
  </body>
</html>
