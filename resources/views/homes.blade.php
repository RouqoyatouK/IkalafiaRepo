
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="{{url('boot/assets/css/slick/slick.css')}}">
        <link rel="stylesheet" href="{{url('boot/assets/css/slick/slick-theme.css')}}">
        <link rel="stylesheet" href="{{url('boot/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{url('boot/assets/css/iconfont.css')}}">
        <link rel="stylesheet" href="{{url('boot/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('boot/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('boot/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{url('boot/assets/css/bootsnav.css')}}">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="{{url('boot/assets/css/style.css')}}">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="{{url('boot/assets/css/responsive.css')}}" />

        <script src="{{url('boot/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">

                </div>

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container">
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="{{url('boot/assets/images/Sans-titre-1.png')}}" class="logo" width="10px" height="20px">
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>
                            <li><a href="{{route('demande.create')}}">Demande</a></li>
                            <li><a href="{{route('renouvellement.create')}}">Renouvellement</a></li>
                            <li><a href="{{route('declaration.create')}}">Declaration</a></li>
                            <li><a href="{{route('logout')}}">Deconnexion</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </nav>
            @if(session('message'))
                                       <div class="alert alert-success">{{session('message')}}</div>
                                       @endif
            <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Bienvenue à <strong>Ikalafia</strong></h2>
                                            <h1 class="text-white">Faite votre demande de carte d'identite</h1>
                                            <h3 class="text-white">- En cliquant sur le <strong>Bouton</strong> demande -</h3>
                                        </div>
                                       @if(session('message'))
                                       <div class="alert alert-success">{{session('message')}}</div>
                                       @endif
                                        <div class="home_btns m-top-40">
                                            <a href="{{route('demande.create')}}" class="btn btn-primary m-top-20">Demande</a>
                                            <a href="{{route('demande.create')}}" class="btn btn-default m-top-20">Demande</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Bienvenue à <strong>Ikalafia</strong></h2>
                                            <h1 class="text-white">Faite votre renouvellement de carte </h1>
                                            <h3 class="text-white">- En cliquant sur le <strong>Bouton</strong> renouvellement -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                        <a href="{{route('renouvellement.create')}}" class="btn btn-primary m-top-20">renouvellement</a>
                                            <a href="{{route('renouvellement.create')}}" class="btn btn-default m-top-20">renouvellement</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Bienvenue à <strong>Ikalafia</strong></h2>
                                            <h1 class="text-white">Faite votre declaration de perte </h1>
                                            <h3 class="text-white">- En cliquant sur le <strong>Bouton</strong> declaration -</h3>
                                        </div>

                                        <div class="home_btns m-top-40">
                                        <a href="{{route('declaration.create')}}" class="btn btn-primary m-top-20">declaration</a>
                                            <a href="{{route('declaration.create')}}" class="btn btn-default m-top-20">declaration</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                </div>
                            </div>

                        </div>


                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->



            <!--Featured Section-->
            <section id="features" class="features">
                <div class="container">
                    <div class="row">
                        <div class="main_features fix roomy-70">
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-tablet"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>                        <a href="{{ route('demande.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Faire une demande</a>
</h3>
                                        <p>Cliquer sur le bouton pour faire  une demande de carte d'identite nationale.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-tablet"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>                        <a href="{{ route('renouvellement.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Faire un renouvellement</a>
</h3>
                                        <p>Cliquer sur le bouton pour faire un renouvellement de carte d'identite nationale.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="features_item sm-m-top-30">
                                    <div class="f_item_icon">
                                        <i class="fa fa-tablet"></i>
                                    </div>
                                    <div class="f_item_text">
                                        <h3>                        <a href="{{ route('declaration.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Faire une declaration</a>
</h3>
                                        <p>Clicquer sur le bouton pour faire une declaration de perte de carte d'identite nationale.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Featured Section-->


            <!--Business Section-->
            <section id="business" class="business bg-grey roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_business">
                            <div class="col-md-6">
                                <div class="business_slid">
                                    <div class="slid_shap bg-grey"></div>
                                    <div class="business_items text-center">
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{url('boot/assets/images/carte-didentite-nationale.jpg')}}" alt="" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{url('boot/assets/images/carte-didentite-nationale.jpg')}}" alt="" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="{{url('boot/assets/images/downloadfile-4.jpg')}}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="business_item sm-m-top-50">
                                    <h2 class="text-uppercase"><strong>Ikalafia</strong> est une plateforme de carte d'identite</h2>
                                    <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> Demandes</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Renouvellements</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Declarations</li>
                                    </ul>
                                    <p class="m-top-20">Bienvenue sur Ikalafia passer vos demandes ,declarations et renouvellements de carte d'identite nationale.
                                    Bienvenue sur Ikalafia passer vos demandes ,declarations et renouvellements de carte d'identite nationale.
                                    Bienvenue sur Ikalafia passer vos demandes ,declarations et renouvellements de carte d'identite nationale.
                                    </p>

                                    <div class="business_btn">
                                        <a href="https://bootstrapthemes.co" class="btn btn-default m-top-20">IKALAFIA</a>
                                        <a href="" class="btn btn-primary m-top-20">IKALAFIA</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->


            <!--product section-->
            <section id="product" class="product">
                <div class="container">
                    <div class="main_product roomy-80">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Images</h2>
                            <h5>Voir quelques images de carte d'identite'</h5>
                        </div>

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/carte-didentite-nationale.jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/carte-didentite-nationale.jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/carte-didentite-nationale.jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/carte-didentite-nationale.jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/carte-didentite-nationale.jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/carte-didentite-nationale.jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/carte-didentite-nationale.jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/downloadfile-4.jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/downloadfile-4.jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/downloadfile-4.jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/downloadfile-4.jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/downloadfile-4.jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/downloadfile-4.jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/downloadfile-4.jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/downloadfile-4.jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/Sans-titre-1.png')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/mali-flag-silk-copyspace-your-260nw-342545912 (1).jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/360_F_92301242_XtvvdhEnPlyAUFBG6PE9JK19HsvX7y7U.jpg' )}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/mali-flag-silk-copyspace-your-260nw-342545912 (1).jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/mali-flag-silk-copyspace-your-260nw-342545912 (1).jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/mali-flag-silk-copyspace-your-260nw-342545912 (1).jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/mali-flag-silk-copyspace-your-260nw-342545912 (1).jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="{{url('boot/assets/images/mali-flag-silk-copyspace-your-260nw-342545912 (1).jpg')}}" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="{{url('boot/assets/images/mali-flag-silk-copyspace-your-260nw-342545912 (1).jpg')}}" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                    <h5>Ikalafia</h5>
                                                        <h6>- Carte d'identité</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Product section -->



            <!--Test section-->
            

        <script src="{{url('boot/assets/js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script src="{{url('boot/assets/js/vendor/bootstrap.min.js')}}"></script>

        <script src="{{url('boot/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{url('boot/assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{url('boot/assets/js/jquery.easing.1.3.js')}}"></script>
        <script src="{{url('boot/assets/css/slick/slick.js')}}"></script>
        <script src="{{url('boot/assets/css/slick/slick.min.js')}}"></script>
        <script src="{{url('boot/assets/js/jquery.collapse.js')}}"></script>
        <script src="{{url('boot/assets/js/bootsnav.js')}}"></script>



        <script src="{{url('boot/assets/js/plugins.js')}}"></script>
        <script src="{{url('boot/assets/js/main.js')}}"></script>

    </body>
</html>



