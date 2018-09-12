<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">

        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>
        <link rel="apple-touch-icon image_src" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->


        <!--web fonts-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
        <!--libs css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/plugins/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/plugins/jackbox/css/jackbox.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/theme/plugins/rs-plugin/css/settings.css">

        <!--theme css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/theme-animate.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/theme/css/style.css">
        <!--head libs-->
        <script src="<?php echo base_url(); ?>assets/theme/js/jquery-2.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/plugins/jquery.queryloader2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/theme/plugins/modernizr.js"></script>


        <link href="<?php echo base_url(); ?>assets/theme/css/font-awesome.css" rel="stylesheet">

        <link href="<?php echo base_url(); ?>assets/theme/css/customstyle.css" rel="stylesheet" type="text/css" media="all" />




        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/sweetalert2/sweetalert2.min.css">

        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/theme/angular/angular.min.js"></script>


        <script>
            $('html').addClass('d_none');
            $(document).ready(function () {
                $('html').show();
                $("body").queryLoader2({
                    backgroundColor: '#fff',
                    barColor: '#35eef6',
                    barHeight: 4,
                    percentage: true,
                    deepSearch: true,
                    minimumTime: 1000
                });
            });
        </script>



    </head>

    <body ng-app="App">
        <div ng-controller="ShopController">
            <script>
                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                        $httpProvider.defaults.headers.post = {};
                });
                        var baseurl = "<?php echo base_url(); ?>index.php/";
                        var imageurlg = "<?php echo imageserver; ?>";
                        var globlecurrency = "<?php echo globle_currency; ?>";
                        var avaiblecredits = 0;</script>
            <!--header-->




            <!--start headers-->
            <!--side menu-->
            <button id="open_side_menu" class="icon_wrap_size_2 circle color_black">
                <i class="icon-menu"></i>
            </button>
            <div id="side_menu">
                <header class="m_bottom_30 d_table w_full">
                    <!--logo-->
                    <div class="d_table_cell half_column v_align_m">
                        <a href="/">
                            <img src="<?php echo base_url(); ?>assets/images/logo4.png" alt="">
                        </a>
                    </div>
                    <!--close sidemenu button-->
                    <div class="d_table_cell half_column v_align_m t_align_r">
                        <button class="icon_wrap_size_2 circle color_dark _2 d_inline_m" id="close_side_menu">
                            <i class="icon-cancel"></i>
                        </button>
                    </div>
                </header>
                <hr class="divider_type_2 m_bottom_20">
                <!--searchform-->
                <form role="search" class="m_bottom_20 relative type_2">
                    <input type="text" placeholder="Search" class="r_corners fw_light bg_light w_full">
                    <button class="color_dark  color_purple_hover tr_all">
                        <i class="icon-search"></i>
                    </button>
                </form>
                <hr class="divider_type_2 m_bottom_25">
                <!--main menu-->
                <nav>
                    <ul class="side_main_menu fw_light">
                        <li class="has_sub_menu active m_bottom_10">
                            <a href="#" class="d_block relative fs_large color_light_2 color_blue_hover">Home</a>
                            <!--sub menu(second level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="#" class="d_block relative color_light_2 color_blue_hover">About Us</a></li>
                                <li class="m_bottom_10"><a href="#" class="d_block relative color_light_2 color_blue_hover">FAQ's </a></li>
                                <li class="m_bottom_10"><a href="#" class="d_block relative color_light_2 color_blue_hover">Terms of Service</a></li>
                             </ul>

                        </li>



                        <li class="has_sub_menu m_bottom_10">
                            <a href="/" class="d_block relative fs_large color_light_2 color_blue_hover">Customize Now</a>
                            <!--sub menu(second level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="#" class="d_block relative color_light_2 color_blue_hover">Shits</a></li>
                                <li class="m_bottom_10"><a href="#" class="d_block relative color_light_2 color_blue_hover">Suits</a></li>
                                <li class="m_bottom_10"><a href="#" class="d_block relative color_light_2 color_blue_hover">Jackets</a></li>
                                <li class="m_bottom_10"><a href="#" class="d_block relative color_light_2 color_blue_hover">Pants</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <!--end of header-->

            <!--layout-->
            <div class="wide_layout bg_light">


                <!--header markup-->
                <header role="banner" class="relative type_2 bg_gradiant">
                    <span class="gradient_line"></span>
                    <!--top part-->
                    <section class="header_top_part p_top_0 p_bottom_0">
                        <div class="container">
                            <div class="row">
                                <!--contact info-->
                                <div class="col-lg-5 col-md-4 col-sm-5 t_xs_align_c">
                                    <ul class="hr_list fs_small color_light  contact_info_list">
                                        <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                            <span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-phone-1"></i></span>+(852) 2730 1251
                                        </li>
                                        <li class="m_right_20 color_light f_xs_none m_xs_right_0 m_xs_bottom_5">
                                            <a href="mailto:#" class=" color_light d_inline_b color_black_hover"><span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mail-alt"></i></span>sales@shanielfashions.com</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-7 col-md-8 col-sm-7 t_align_r t_xs_align_c m_top_5">
                                    <!--mini nav-->
                                    <nav class="d_inline_m m_right_10 m_xs_right_0">
                                        <ul class="hr_list stripe_list fs_small">
                                            <li><a href="#" class="color_light ">About</a></li>
                                            <li><a href="<?php echo site_url('Pages/contactus');?>" class="color_light ">Contact</a></li>
                                            <li><a href="#" class="color_light ">FAQ</a></li>
                                            <li><a href="#" class="color_light ">My Account</a></li>
                                            <li><a href="#" class="color_light ">My Wishlist</a></li>
                                        </ul>
                                    </nav>
                                    <br class="d_none d_xs_block">
                                    <ul class="hr_list d_inline_b social_icons">
                                        <li class="m_right_8"><a href="#" class="color_light  facebook circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_light  twitter circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_light  googleplus circle icon_wrap_size_1 d_block"><i class="icon-gplus-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_light  instagram circle icon_wrap_size_1 d_block"><i class="icon-instagramm"></i></a></li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </section>
                                    <hr class="divider_type_2 bg_gradiant ">

                    <!--header bottom part-->
                    <section class="header_bottom_part type_2 bg_light  ">
                        <div class="container">
                            <div class="d_table w_full d_xs_block">
                                <!--logo-->
                                <div class="col-lg-3 col-md-3 col-sm-3 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
                                    <a href="/" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
                                        <img src="<?php echo base_url(); ?>assets/images/logo4.png" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 d_table_cell d_xs_block f_none t_xs_align_c">
                                    <!--searchform-->



                                    <div class="f_right clearfix f_xs_none d_xs_inline_b t_xs_align_l m_xs_bottom_15">
                                        <!--shopping cart-->
                                        <div class="relative f_right dropdown_2_container shoppingcart">
                                            <button class="icon_wrap_size_2 color_blue2  circle tr_all">
                                                <i class="icon-basket color_blue2 _2 tr_inherit"></i>
                                            </button>
                                            <div class="dropdown_2 bg_light shadow_1 tr_all p_top_0">
                                                <div class="sc_header bg_light_2 fs_small color_grey">
                                                    Recently added item(s)
                                                </div>
                                                <!--                                                <ul class="added_items_list">
                                                                                                    <li class="clearfix lh_large m_bottom_20 relative">
                                                                                                        <a href="#" class="d_block f_left m_right_10"><img src="images/sc_img_1.jpg" alt=""></a>
                                                                                                        <div class="f_left item_description lh_ex_small">
                                                                                                            <a href="#" class="color_dark fs_medium d_inline_b m_bottom_3">Duis ac turpis</a>
                                                                                                            <p class="color_dark  fs_small">Product Code PS34</p>
                                                                                                        </div>
                                                                                                        <div class="f_right fs_small lh_medium d_xs_none">
                                                                                                            <span class="color_grey">1 x </span><span class="color_dark">$79.00</span>
                                                                                                        </div>
                                                                                                        <i class="icon-cancel-circled-1 color_dark _2 fs_large color_dark_hover tr_all"></i>
                                                                                                    </li>
                                                                                                   
                                                                                                </ul>
                                                                                                <div class="total_price bg_light_2 t_align_r fs_medium m_bottom_15">
                                                                                                    <ul>
                                                                                                        <li class="color_dark">Tax: <span class="d_inline_b m_left_15 price t_align_l">$0.00</span></li>
                                                                                                        <li class="color_dark">Discount: <span class="d_inline_b m_left_15 price t_align_l">$37.00</span></li>
                                                                                                        <li class="color_dark"><span class="fw_ex_bold">Total:</span> <span class="fw_ex_bold d_inline_b m_left_15 price t_align_l color_pink">$999.00</span></li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div class="clearfix border_none p_top_0 sc_footer">
                                                                                                    <a href="#" class="button_type_5 d_block color_pink transparent f_right r_corners tr_all fs_medium m_left_5">Checkout</a>
                                                                                                    <a href="#" class="button_type_5 d_block color_dark f_right r_corners color_pink_hover tr_all fs_medium">View Cart</a>
                                                                                                </div>-->
                                            </div>
                                        </div>
                                        <!--login-->
                                        <div class="relative f_right m_right_10 dropdown_2_container login">
                                            <button class="icon_wrap_size_2 color_blue2  circle tr_all">
                                                <i class="icon-lock color_blue2 _2 tr_inherit"></i>
                                            </button>
                                            <div class="dropdown_2 bg_light shadow_1 tr_all">
                                                <h5 class="fw_light color_dark m_bottom_23">Login</h5>
                                                <form class="login_form m_bottom_20">
                                                    <ul>
                                                        <li class="m_bottom_10 relative">
                                                            <i class="icon-user login_icon fs_medium color_dark _2"></i>
                                                            <input type="text" placeholder="Username" class="r_corners color_grey w_full fw_light">
                                                        </li>
                                                        <li class="m_bottom_10 relative">
                                                            <i class="icon-lock login_icon fs_medium color_dark _2"></i>
                                                            <input type="password" placeholder="Password" class="r_corners color_grey w_full fw_light">
                                                        </li>

                                                        <li class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                                                <button class="button_type_5 tr_all color_blue transparent fs_medium r_corners">Login</button>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8 t_align_r lh_medium">
                                                                <a href="#" class="color_scheme color_purple_hover fs_small">Forgot your password?</a><br>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </form>
                                                <div class="bg_light_2 im_half_container sc_footer">
                                                    <h5 class="fw_light color_dark d_inline_m half_column">New Customer?</h5>
                                                    <div class="half_column t_align_r d_inline_m">
                                                        <a href="#" class="button_type_5 t_xs_align_c d_inline_b tr_all r_corners color_purple transparent fs_medium">Create an Account</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <form role="search" class="relative type_2 f_left type_3 f_xs_none t_xs_align_l m_xs_bottom_15">
                                        <input type="text" placeholder="Search" class="r_corners fw_light bg_light w_full">
                                        <button class="color_dark  color_purple_hover tr_all">
                                            <i class="icon-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                                  <hr class="divider_type_2 bg_gradiant">

                    <section class="sticky_part bg_light bg_gradiant">
                        <div class="container">

                            <!--main navigation-->
                            <nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 m_sm_right_5 t_align_l m_xs_bottom_15">
                                <ul class="hr_list main_menu type_2 fw_light">
                                    <li class=" container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_light fs_large relative r_xs_corners" href="#">Home
                                            <i class="icon-angle-down d_inline_m"></i>
                                        </a>
                                        <!--sub menu-->
                                        <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                            <li class="container3d relative ">
                                                <a href="#" class="menu-link d_block color_dark relative main-menu-link"> About Us </a>
                                            </li>
                                            <li class="container3d relative ">
                                                <a href="#" class="menu-link d_block color_dark relative main-menu-link"> FAQ's </a>
                                            </li>
                                            <li class="container3d relative ">
                                                <a href="#" class="menu-link d_block color_dark relative main-menu-link"> Terms of Service </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_light fs_large relative r_xs_corners" href="#">Customize Now
                                            <i class="icon-angle-down d_inline_m"></i>
                                        </a>
                                        <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                            <li>
                                                <a href="#" class="d_block color_dark relative">Shirts</a>
                                            </li>
                                            <li>
                                                <a href="#" class="d_block color_dark relative">Suits</a>
                                            </li>
                                            <li>
                                                <a href="#" class="d_block color_dark relative">Jackets</a>
                                            </li>
                                            <li>
                                                <a href="#" class="d_block color_dark relative">Pants</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_light fs_large relative r_xs_corners" href="#">Offers
                                        </a>

                                    </li>
                                    <li class="container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_light fs_large relative r_xs_corners" href="#">Support & Guide
                                            <i class="icon-angle-down d_inline_m"></i>
                                        </a>
                                        <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                            <li>
                                                <a href="#" class="d_block color_dark relative">How To Shop</a>
                                            </li>
                                            <li>
                                                <a href="#" class="d_block color_dark relative">How To Measure</a>
                                            </li>
                                            <li>
                                                <a href="#" class="d_block color_dark relative">How To Get Coupons</a>
                                            </li>
                                            <li>
                                                <a href="#" class="d_block color_dark relative">How To Get Discount</a>
                                            </li>

                                        </ul>

                                    </li>
                                    <li class="container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_light fs_large relative r_xs_corners" href="#">Fashion Tips
                                        </a>

                                    </li>
                                    <li class="container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_light fs_large relative r_xs_corners" href="#">Schedule
                                        </a>

                                    </li>
                                    <li class="container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_light fs_large relative r_xs_corners" href="<?php echo site_url('Pages/contactus');?>">Contact Us
                                        </a>

                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </section>
                </header>


                <!--header-->
