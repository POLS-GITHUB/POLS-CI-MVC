<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Timer Agency Template</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <!-- link rel="stylesheet" href=""-->
        <?= link_tag('library/plugins/bootstrap/bootstrap.min.css');?>
        <!-- Ionicons Fonts Css -->
        <!-- link rel="stylesheet" href=""-->
        <?= link_tag('library/plugins/ionicons/ionicons.min.css');?>
        <!-- animate css -->
        <<!-- link rel="stylesheet" href=""-->
        <?= link_tag('library/plugins/animate-css/animate.css');?>
        <!-- Hero area slider css-->
        <!-- link rel="stylesheet" href=""-->
        <?= link_tag('library/plugins/slider/slider.css');?>          
        <!-- owl craousel css -->
        <!-- link rel="stylesheet" href=""-->
         <?= link_tag('library/plugins/owl-carousel/owl.carousel.css');?>   
        <!-- link rel="stylesheet" href=""-->
        <?= link_tag('library/plugins/owl-carousel/owl.theme.css');?>
        <!-- Fancybox -->
        <!-- link rel="stylesheet" href=""-->
        <?= link_tag('library/plugins/facncybox/jquery.fancybox.css');?>
        <!-- template main css file -->
        <!-- link rel="stylesheet" href=""-->
        <?= link_tag('library/css/style.css');?>
    </head>
    <body>


       <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.html" >
                            <img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?php echo base_url('Home');?>" >Home</a>
                            </li>
                            <li><a href="<?php echo base_url('ABOUT');?>">About</a></li>
                            <li>
                                <a href="<?php echo base_url('SERVICE');?>">Service</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">REPORT <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="<?php echo base_url('RECORD');?>">SALE ANALYSIS</a>
                                            
                                        </li>

                                        <li>
                                            <a href="#">PURCHASES BOOK</a>
                                        </li>
                                        <ul>
                                                <li>
                                                    <a href="<?php echo base_url('TABLE');?>">SALE BOOK</a>
                                                </li>
                                        </ul>
                                    </ul>
                                </div>
                            </li>









                            <li>
                                <a href="<?php echo base_url('SERVICE');?>">TRANACTIONS</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('SERVICE');?>">ACCOUNTS</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url('SERVICE');?>">Service</a>
                            </li>







                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="#"></a>SORRY</li>
                                        <li><a href="#"></a>SORRY</li>
                                        <li><a href="#"></a>SORRY</li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
<!--
        ==================================================
        Header Section End
        ================================================== 
-->
        

        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>About Company</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="index.html">
                                        <i class="ion-ios-home"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="active">About</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="images/about/about-company.jpg" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Why We are Different</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequun. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <div class="block about-feature-1 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                <h2>
                Why Choose Us
                </h2>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                </p>
            </div>
            <div class="block about-feature-2 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                <h2 class="item_title">
                What You Get
                </h2>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                </p>
            </div>
            <div class="block about-feature-3 wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                <h2 class="item_title">
                Meet The Energy
                </h2>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                </p>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center">Meet The Team</h2>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="images/team/team-1.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Jonathon Andrew</h3>
                    <p class="team_designation">CEO, Project Manager</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <div class="team-img">
                        <img src="images/team/team-2.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Jesmin Martina</h3>
                    <p class="team_designation">CEO, Project Manager</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <div class="team-img">
                        <img src="images/team/team-3.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Deu John</h3>
                    <p class="team_designation">CEO, Project Manager</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <div class="team-img">
                        <img src="images/team/team-4.jpg" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Anderson Martin</h3>
                    <p class="team_designation">CEO, Project Manager</p>
                    <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- 
        ================================================== 
            Clients Section Start
        ================================================== -->
        <section id="clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="subtitle text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".3s">Our Happy Clinets</h2>
                        <p class="subtitle-des text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, error.</p>
                        <div id="clients-logo" class="owl-carousel">
                            <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                             <div>
                                <img src="images/clients/logo-1.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-2.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-3.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-4.jpg" alt="">
                            </div>
                            <div>
                                <img src="images/clients/logo-5.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>

            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Design and Developed by <a href="http://www.Themefisher.com" target="_blank">Themefisher</a>. <br> 
                            Get More 
                            <a href="https://themefisher.com/free-bootstrap-templates/" target="_blank">
                                Free Bootstrap Templates
                            </a>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="<?= base_url('library/plugins/jQurey/jquery.min.js');?>"></script>
    <!-- Form Validation -->
    
     <script src="<?= base_url('library/plugins/form-validation/jquery.form.js');?>"></script>

    
    <script src="<?= base_url('library/plugins/form-validation/jquery.validate.min.js');?>"></script>
    <!-- owl carouserl js -->
    
    <script src="<?= base_url('library/plugins/owl-carousel/owl.carousel.min.js');?>"></script>
    <!-- bootstrap js -->
    
    <script src="<?= base_url('library/plugins/bootstrap/bootstrap.min.js');?>"></script>
    <!-- wow js -->
    
    <script src="<?= base_url('library/plugins/wow-js/wow.min.js');?>"></script>
    <!-- slider js -->
    
    <script src="<?= base_url('library/plugins/slider/slider.js');?>"></script>
    <!-- Fancybox -->
    
    <script src="<?= base_url('library/plugins/facncybox/jquery.fancybox.js');?>"></script>
    <!-- template main js -->
    
    <script src="<?= base_url('library/js/main.js');?>"></script>
 	</body>
</html>