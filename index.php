﻿<!doctype html>
<html lang="en">

<head>
    <?php
        require 'pages/head.php';
        ?>


    <style>

        .content{
    background-color:white;
     border:2px solid #bdc3c7; 
     color:black;
      padding: 1px 8px; 
      border-radius:3px;
    
}
.open {
    background-color:#428378;
     border:2px; color:white;
      padding: 2px 15px; 
      border-radius:3px;
      font-size: 15px
}

.closed{
     background-color:red;
     border:2px; color:white;
      padding: 2px 15px; 
      border-radius:3px;
      font-size: 15px
}

.course-title {
    color:#3d9386; 
    margin-bottom: 10px; 
    max-width: 60%;
}

@media all and (max-width:900px) {
   .btn-xs-block { width: 100%; display:block; }
}   

</style>

</head>

<body class=" " style="font-family: 'Quicksand', sans-serif;">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=168416157100377&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <?php
        require 'pages/nav.php';
        ?>
    <div class="main-container">
        <section class="cover height-80 imagebg switchable --siwtchable-switch p-md-50" style="" data-overlay="8">
            <div class="background-image-holder">
                <img alt="background" src="https://images.unsplash.com/photo-1535551951406-a19828b0a76b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1492&q=80" />
            </div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="switchable__text">
                            <h2>
                                <span style="font-weight: 900"> Learn how to code for free</span></h2>
                            <p class="lead">
                                FavCode54 is a tech initiative that aims to <b>Teach</b>, <b>Mentor</b>, & <b>Build</b>
                                the next generation of African Software Developers


                            </p>
                            <p "style:font-size:7px"> Be Audacious ● Take the initiative ● Take Giant Strides Only </p>
                            <a class="btn btn--primary btn-xs-block type--uppercase" href="https://apply.favcode54.org/" style="">
                                <span class="btn__text">
                                    Apply Now
                                </span>
                            </a>
                            <a class="btn btn--primary btn-xs-block type--uppercase" href="https://favcode54.org/about" style="background-color: #e1b12c; border-color:#e1b12c">
                                <span class="btn__text">
                                    Learn More
                                </span>
                            </a>

                        </div>
                    </div>
                    <div class="hidden-xs col-lg-offset-0 col-md-6 col-sm-4 col-xs-12" style="margin-left: 70px">

                        <!--end video cover-->
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="text-center cta cta-4 space--xxs border--bottom imagebg" data-gradient-bg="#3d9386,#3d9386,#3d9386,#3d9386"><canvas
                id="granim-0" width="1349" height="80"></canvas>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="no-margin" style="margin:0;"><b>CURRENTLY IN:</b> USA ● Nigeria ● <u><a href="https://gh.favcode54.org/">Ghana</a></u>
                            ● Kenya - We are spreading :)</h4>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-10">
                        <p class="lead">
                            <b>


                                We have a mission to develop the African continent by making technology accessible to
                                everyone </b>


                            <br> We teach, we mentor, we develop! Tech’s taking over Africa, but there's work to do.
                        </p>

                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>

        <section>
            <div class="container">
                <h3 style="background-color:#428378; padding: 5px 15px; color:white">Available Learning
                    Tracks</h3>
                <div class="masonry__container row masonry--active">
                    <div class="col-md-6 masonry__item">
                        <div class="feature feature--featured boxed boxed--border bg--seondary">
                            <span class="label" style="background: #ff4536; font-size: small">Closed</span>
                            <h4 class="course-title">Wordpress For Developers &nbsp; </h4>
                            <p style="max-width: 80%; margin: 15px 0px;">
                                <span class="content">Installation</span>
                                <span class="content">Themes</span>
                                <span class="content">Plugins</span>
                                <span class="content"> E-commerce</span>
                                <span class="content">Hosting</span>
                            </p>
                            <p style="margin-bottom: 10px;">
                                WordPress is an Open Source software system used by millions of people around the world
                                to
                                create beautiful websites and blogs. Start creating with wordpress.
                            </p>

                            <p class="m-y-0 small" style=" margin-bottom: 0"><i class="uk-icon" uk-icon=""></i>Duration:
                                12 hours</p>
                        </div>
                    </div>
                    <div class="col-md-6 masonry__item">
                        <div class="feature feature--featured boxed boxed--border bg--seondary">
                            <span class="label" style="font-size: small">In Progress</span>
                            <h4 class="course-title" style="">Frontend Development &nbsp; </h4>
                            <p style="max-width: 100%; margin: 15px 0px">
                                <span class="content">HTML</span>
                                <span class="content">CSS</span>
                                <span class="content">Javascript</span>
                                <span class="content">Git & Github</span>
                                <span class="content"> Hosting</span>
                            </p>
                            <p style="margin-bottom: 10px">
                                The beginner's guide to becoming a web developer. At the end of this class, you should
                                be able
                                to master the basics of the web. You will also create dynamic apps with MAVO
                            </p>

                            <p class="m-y-0 small" style=" margin-bottom: 0"><i class="uk-icon" uk-icon=""></i>Starting
                                on 19th February</p>
                        </div>
                    </div>
                </div>

                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--
            <section class="text-center imagebg space--sm" data-overlay="7">
                <div class="background-image-holder" style="background-position:0px -50px !important">
                    <img alt="background-image" src="https://images.unsplash.com/photo-1508970436-b2150a27d7dd?ixlib=rb-0.3.5&s=435a7b052d065d8ddffa5ad12bed0848&auto=format&w=1500&q=80">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-lg-7">
                            <h1>Time is running out</h1>
                            <p class="lead">
                                Do not miss out on 2019's edition,  only few spots left. Hurry up!<br>
                                
                            </p>
                            <a class="btn type--uppercase" href="http://apply.codewithfavour.com" target="_blank">
                                <span class="btn__text">
                                    Apply Now
                                </span>
                            </a>
                        </div>
                    </div>
                    
                </div>
                
            </section>
                    -->
        <section class="imagebg">
            <div class="background-image-holder">
                <img alt="background" src="https://images.unsplash.com/photo-1508956225111-e10f3ac4a5a8?ixlib=rb-0.3.5&s=0447c75800f3d61fb46295d26ada0d8a&auto=format&fit=crop&w=1500&q=80" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-5 col-sm-offset-5 col-md-offset-7">
                        <div class="boxed boxed--lg border--round bg--white">
                            <div class="col-md-10 col-md-offset-1 col-sm-12">
                                <h3>Stay up to date with what’s going on at #FavCode54</h3>
                                <p class="lead">
                                    <form action="newsletters.php" method="post" class="form-email row" data-success="Thanks for your enquiry, we'll be in touch shortly."
                                        data-error="Please fill in all fields correctly." novalidate="true">
                                        <div class="col-xs-offset-1 col-md-offset-0 col-md-12 col-12">
                                            <label style="color:#808080">Your Name:</label>
                                            <input type="text" name="name" class="validate-required" required="">
                                        </div>
                                        <div class="col-xs-offset-1 col-md-offset-0 col-md-12 col-12">
                                            <label style="color:#808080">Email Address:</label>
                                            <input type="email" name="email" class="validate-required validate-email"
                                                required="">
                                        </div>
                                        <input name="submit" value="1" hidden>
                                        <div class="col-xs-offset-1 col-md-offset-0 col-md-12 col-lg-8 col-6">
                                            <button type="submit" class="btn btn--primary type--uppercase">Keep Me
                                                Posted</button>
                                        </div>
                                    </form>
                                </p>
                                <hr class="short" />
                                <p class="type--small small">
                                    We promise we won't spam you
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="text-center bg--secondary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <h2>Our Partners</h2>
                        <p class="lead">
                            Companies we've been working with
                        </p>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="  bg--secondary">
            <div class="container">
                <div class="row">
                    <div class="slider slider--inline-arrows slider--arrows-hover text-center" data-arrows="true">
                        <ul class="slides">
                            <li class="col-sm-3 col-xs-6">
                                <a href="http://startuparewa.ng"><img alt="Startup Arewa Logo" class="image--xs" src="images/StartupArewa-Logo.png"></a>
                            </li>






                            <li class="col-sm-3 col-xs-6">
                                <a href="#"><img alt="Save our women & girls" class="image--xs" src="images/sowg.png"></a>
                            </li>
                            <li class="col-sm-3 col-xs-6">
                                <a href="#"><img alt="IBM" class="image--xs" src="images/ibm.png"></a>
                            </li>

                            <li class="col-sm-3 col-xs-6">
                                <a href="#"><img alt="Teen Assembly" class="image--xs" src="images/teenassembly.png"></a>
                            </li>



                            <li class="col-sm-3 col-xs-6">
                                <img alt="Startupsw.ng Logo" class="image--xs" src="images/startup-sw-logo.png">
                            </li>


                            <li class="col-sm-3 col-xs-6">
                                <img alt="EET Information Solutions" class="image--xs" style="" src="images/eet_logo.png">
                            </li>
                            <li class="col-sm-3 col-xs-6">
                                <img alt="Startup South" class="image--xs" style="background: black;padding: 5px" src="images/startupsouth_logo.png">
                            </li>
                            <li class="col-sm-3 col-xs-6">
                                <img alt="Young Innovators Nigeria" class="image--xs" style="background: black;padding: 5px"
                                    src="images/yin_logoedited.png">
                            </li>

                        </ul>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end of container-->
        </section>







        <section class="switchable">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <p class="lead" style="margin-top: 30px">

                            <a href="#">hi@favcode54.org</a>
                            <br> +1 (918) 230 0201
                        </p>
                        <p class="lead">
                            Give us a call or drop by anytime. We’re happy to respond to your queries.
                        </p>
                        <p class="lead">
                        </p>
                    </div>
                    <div class="col-md-6 col-12">
                        <form class="form-email row" action="mailer.php" data-success="Thanks for your enquiry, we'll be in touch shortly."
                            data-error="Please fill in all fields correctly." novalidate="true">
                            <div class="col-md-6 col-12">
                                <label>Your Name:</label>
                                <input type="text" name="name" class="validate-required">
                            </div>
                            <div class="col-md-6 col-12">
                                <label>Email Address:</label>
                                <input type="email" name="email" class="validate-required validate-email">
                            </div>
                            <div class="col-md-12 col-12">
                                <label>Message:</label>
                                <textarea rows="4" name="message" class="validate-required"></textarea>
                            </div>
                            <div class="col-md-5 col-lg-4 col-6">
                                <button type="submit" class="btn btn--primary type--uppercase" onclick="">Send Enquiry</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <?php
            require 'pages/footer.php';
            ?>
    </div>
    <!-- <div class="modal-container"  data-autoshow="10000">
    <div class="modal-content" style="border-radius: 10px">
                    <div class="boxed boxed--lg">
                        <h5 class="text-center">Like our page on Facebook to get <br>exclusive updates</h5>
                        <p class="lead" style="text-align: center;">
                            <center>
                           <div class="fb-like" data-href="https://web.facebook.com/favcode54/" data-layout="box_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
                         </center>
                        </p>
                    </div>
                <div class="modal-close modal-close-cross"></div></div>
</div>-->

    <?php
        require 'pages/scripts.php';
        ?>
    <script type="text/javascript">

    </script>
</body>

</html>