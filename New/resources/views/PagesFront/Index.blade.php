
<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html>
<head>
    <meta charset="utf-8">
    <title>AMV</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">

    <!-- Main Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>
<body>
    <!-- START preloader-wrapper -->
    <div class="preloader-wrapper">
        <div class="preloader-inner">
            <div class="spinner-border text-red"></div>
        </div>
    </div>
    <!-- END preloader-wrapper -->
    
    <!-- START main-wrapper -->
    <section class="d-flex">
  
<!-- start of sidenav -->
<aside><div class="sidenav position-sticky d-flex flex-column justify-content-between">
    <a class="navbar-brand" href="index.html" class="logo">
        <img src="images/logo2.png" alt="">
    </a>
    <!-- end of navbar-brand -->

    <div class="navbar navbar-dark my-4 p-0 font-primary">
        <ul class="navbar-nav w-100">
            <li class="nav-item active">
                <a class="nav-link text-white px-0 pt-0" href="">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white px-0" href="{{route('About')}}">About</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white px-0" href="{{route('Contact')}}">Contact</a>
            </li>
            <li class="nav-item  accordion">
                <div id="drop-menu" class="drop-menu collapse">
                    <a class="d-block " href="index-2.html">Hotel</a>
                    <a class="d-block " href="{{route('Restaurant')}}">Restaurant</a>
                    <a class="d-block " href="{{route('Privacy')}}">Privacy &amp; Policy</a>
                </div>
                <a class="nav-link text-white" href="#!" role="button" data-toggle="collapse" data-target="#drop-menu" aria-expanded="false" aria-controls="drop-menu">Pages</a>
            </li>
            <li class="nav-item mt-3">
                <select class="custom-select bg-transparent rounded-0 text-white shadow-none" id="pick-lang">
                    <option selected value="en">English</option>
                    <option value="fr">French</option>
                </select>
            </li>
        </ul>
    </div>
    <!-- end of navbar -->

    <ul class="list-inline nml-2">
        <li class="list-inline-item">
            <a href="#!" class="text-white text-red-onHover pr-2">
                <span class="fab fa-twitter"></span>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="text-white text-red-onHover p-2">
                <span class="fab fa-facebook-f"></span>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="text-white text-red-onHover p-2">
                <span class="fab fa-instagram"></span>
            </a>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="text-white text-red-onHover p-2">
                <span class="fab fa-linkedin-in"></span>
            </a>
        </li>
    </ul>
    <!-- end of social-links -->
</div></aside>
<!-- end of sidenav -->
    <div class="main-content">
        <!-- start of mobile-nav -->
<header class="mobile-nav pt-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <a href="index.html">
                    <img src="images/logo2.png" alt="">
                </a>
            </div>
            <div class="col-6 text-right">
                <button class="nav-toggle bg-transparent border text-white">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
        </div>
    </div>
</header>
<div class="nav-toggle-overlay"></div>
<!-- end of mobile-nav -->

        <div class="container pt-4 mt-5">
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="card post-item bg-transparent border-0 mb-5">
                        <a href="post-details.html">
                            <img class="card-img-top rounded-0" src="images/logo4.JFIF" alt="">
                        </a>
                        <div class="card-body px-0">
                            <h2 class="card-title">
                                <a class="text-white opacity-75-onHover" href="post-details.html">Novotel Hotel est un hotel situé à Cotonou et fait parti depuis quelques années de la liste des meilleurs hotels de Cotonou</a>
                            </h2>
                            <ul class="post-meta mt-3">
                                <li class="d-inline-block mr-3">
                                    <span class="fas fa-clock text-primary"></span>
                                    <a class="ml-1" href="#">24 April, 2016</a>
                                </li>
                                <li class="d-inline-block">
                                    <span class="fas fa-list-alt text-primary"></span>
                                    <a class="ml-1" href="#">Photography</a>
                                </li>
                            </ul>
                            <p class="card-text my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt leo mi, viverra urna. Arcu velit risus, condimentum ut vulputate cursus porttitor turpis in. Diam egestas nec massa, habitasse. Tincidt dui.</p>
                            <a href="post-details.html" class="btn btn-primary">Read More <img src="images/logo3.JFIF" alt=""></a>
                        </div>
                    </div>
                    <!-- end of post-item -->
                    
                    <div class="card post-item bg-transparent border-0 mb-5">
                        <a href="post-details.html">
                            <img class="card-img-top rounded-0" src="images/.logo4.JFIF" alt="">
                        </a>
                        <div class="card-body px-0">
                            <h2 class="card-title">
                                <a class="text-white opacity-75-onHover" href="post-details.html">Excepteur ado Do minim duis laborum Fugiat ea labore qui veniam labore</a>
                            </h2>
                            <ul class="post-meta mt-3">
                                <li class="d-inline-block mr-3">
                                    <span class="fas fa-clock text-primary"></span>
                                    <a class="ml-1" href="#">24 Avril, 2022</a>
                                </li>
                                <li class="d-inline-block">
                                    <span class="fas fa-list-alt text-primary"></span>
                                    <a class="ml-1" href="#">Photo</a>
                                </li>
                            </ul>
                            <p class="card-text my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt leo mi, viverra urna. Arcu velit risus, condimentum ut vulputate cursus porttitor turpis in. Diam egestas nec massa, habitasse. Tincidt dui.</p>
                            <a href="post-details.html" class="btn btn-primary">Read More <img src="images/logo3.JFIF" alt=""></a>
                        </div>
                    </div>
                    <!-- end of post-item -->
                    
                    <div class="card post-item bg-transparent border-0 mb-5">
                        <a href="post-details.html">
                            <img class="card-img-top rounded-0" src="images/logo3.JFIF" alt="">
                        </a>
                        <div class="card-body px-0">
                            <h2 class="card-title">
                                <a class="text-white opacity-75-onHover" href="post-details.html">Mimi's est un restaurant situé à Cotonou et fait parti depuis quelques années de la liste des meilleurs hotels de Cotonou</a>
                            </h2></a>
                            </h2>
                            <ul class="post-meta mt-3">
                                <li class="d-inline-block mr-3">
                                    <span class="fas fa-clock text-primary"></span>
                                    <a class="ml-1" href="#">24 April, 2016</a>
                                </li>
                                <li class="d-inline-block">
                                    <span class="fas fa-list-alt text-primary"></span>
                                    <a class="ml-1" href="#">Photography</a>
                                </li>
                            </ul>
                            <p class="card-text my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tincidunt leo mi, viverra urna. Arcu velit risus, condimentum ut vulputate cursus porttitor turpis in. Diam egestas nec massa, habitasse. Tincidt dui.</p>
                            <a href="post-details.html" class="btn btn-primary">Read More <img src="images/logo3.JFIF" alt=""></a>
                        </div>
                    </div>
                    <!-- end of post-item -->
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="widget text-center">
                        <img class="author-thumb-sm rounded-circle d-block mx-auto" src="images/author-sm.png" alt="">
                        <h2 class="widget-title text-white d-inline-block mt-4">About Me</h2>
                        <p class="mt-4">Lorem ipsum dolor sit coectetur adiing elit. Tincidunfywjt leo mi, viearra urna. Arcu ve isus, condimentum ut vulpate cursus por turpis.</p>
                        <ul class="list-inline mt-3">
                            <li class="list-inline-item">
                                <a href="#!" class="text-white text-primary-onHover p-2">
                                    <span class="fab fa-twitter"></span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!" class="text-white text-primary-onHover p-2">
                                    <span class="fab fa-facebook-f"></span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!" class="text-white text-primary-onHover p-2">
                                    <span class="fab fa-instagram"></span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!" class="text-white text-primary-onHover p-2">
                                    <span class="fab fa-linkedin-in"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end of author-widget -->

                    <div class="widget bg-dark p-4 text-center">
                        <h2 class="widget-title text-white d-inline-block mt-4">Subscribe Blog</h2>
                        <p class="mt-4">Lorem ipsum dolor sit coectetur elit. Tincidu nfywjt leo mi, urna. Arcu ve isus, condimentum ut vulpate cursus por.</p>
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control bg-transparent rounded-0 my-4" placeholder="Your Email Address">
                                <button class="btn btn-primary">Subscribe Now <img src="images/logo3.JFIF" alt=""></button>
                            </div>
                        </form>
                    </div>
                    <!-- end of subscription-widget -->

                    <div class="widget">
                        <div class="mb-5 text-center">
                            <h2 class="widget-title text-white d-inline-block">Featured Posts</h2>
                        </div>
                        <div class="card post-item bg-transparent border-0 mb-5">
                            <a href="post-details.html">
                                <img class="card-img-top rounded-0" src="images/logo4.JFIF" alt="">
                            </a>
                            <div class="card-body px-0">
                                <h2 class="card-title">
                                    <a class="text-white opacity-75-onHover" href="post-details.html">Novotel Hotel est un hotel situé à Cotonou et fait parti depuis quelques années de la liste des meilleurs hotels de Cotonou</a>
                            </h2></a>
                                </h2>
                                <ul class="post-meta mt-3 mb-4">
                                    <li class="d-inline-block mr-3">
                                        <span class="fas fa-clock text-primary"></span>
                                        <a class="ml-1" href="#">24 Avril, 2022</a>
                                    </li>
                                    <li class="d-inline-block">
                                        <span class="fas fa-list-alt text-primary"></span>
                                        <a class="ml-1" href="#">Photography</a>
                                    </li>
                                </ul>
                                <a href="post-details.html" class="btn btn-primary">Read More <img src="images/arrow-right.png" alt=""></a>
                            </div>
                        </div>
                        <!-- end of widget-post-item -->
                        <div class="card post-item bg-transparent border-0 mb-5">
                            <a href="post-details.html">
                                <img class="card-img-top rounded-0" src="images/logo5.JFIF" alt="">
                            </a>
                            <div class="card-body px-0">
                                <h2 class="card-title">
                                    <a class="text-white opacity-75-onHover" href="post-details.html">Golden Tulip est l'un des plus grand hotel de la place</a>
                                </h2>
                                <ul class="post-meta mt-3 mb-4">
                                    <li class="d-inline-block mr-3">
                                        <span class="fas fa-clock text-primary"></span>
                                        <a class="ml-1" href="#">24 Avril, 2022</a>
                                    </li>
                                    <li class="d-inline-block">
                                        <span class="fas fa-list-alt text-primary"></span>
                                        <a class="ml-1" href="#">Photo</a>
                                    </li>
                                </ul>
                                <a href="post-details.html" class="btn btn-primary">Read More <img src="images/logo3.JFIF" alt=""></a>
                            </div>
                        </div>
                        <!-- end of widget-post-item -->
                    </div>
                    <!-- end of post-items widget -->
                </div>
            </div>
        </div>

        <!-- start of footer -->
<footer class="bg-dark">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="font-primary text-white mb-4">Inspirations</h5>
                <ul class="list-unstyled">
                    <li><a href="#!">Privacy State</a></li>
                    <li><a href="#!">Privacy</a></li>
                    <li><a href="#!">State</a></li>
                    <li><a href="#!">Privacy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="font-primary text-white mb-4">Templates</h5>
                <ul class="list-unstyled">
                    <li><a href="#!">Privacy State</a></li>
                    <li><a href="#!">Privacy</a></li>
                    <li><a href="#!">State</a></li>
                    <li><a href="#!">Privacy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="font-primary text-white mb-4">Resource</h5>
                <ul class="list-unstyled">
                    <li><a href="#!">Privacy State</a></li>
                    <li><a href="#!">Privacy</a></li>
                    <li><a href="#!">State</a></li>
                    <li><a href="#!">Privacy</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5">
                <h5 class="font-primary text-white mb-4">Company</h5>
                <ul class="list-unstyled">
                    <li><a href="#!">Privacy State</a></li>
                    <li><a href="#!">Privacy</a></li>
                    <li><a href="#!">State</a></li>
                    <li><a href="#!">Privacy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- end of footer -->
    </div>

    </section>
    <!-- END main-wrapper -->

    <!-- All JS Files -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <script src="plugins/bootstrap/bootstrap.min.js"></script>

    <!-- Main Script -->
    <script src="js/script.js"></script>
</body>
</html>