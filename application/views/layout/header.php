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
                        <a href="index.html">
                            <img src="images/logo_side.png" alt="">
                        </a>
                    </div>
                    <!--close sidemenu button-->
                    <div class="d_table_cell half_column v_align_m t_align_r">
                        <button class="icon_wrap_size_2 circle color_dark _2 d_inline_m" id="close_side_menu">
                            <i class="icon-cancel"></i>
                        </button>
                    </div>
                </header>
                <hr class="divider_type_4 m_bottom_20">
                <!--searchform-->
                <form role="search" class="m_bottom_20 relative type_2">
                    <input type="text" placeholder="Search" class="r_corners fw_light bg_light w_full">
                    <button class="color_dark  color_purple_hover tr_all">
                        <i class="icon-search"></i>
                    </button>
                </form>
                <hr class="divider_type_4 m_bottom_25">
                <!--main menu-->
                <nav>
                    <ul class="side_main_menu fw_light">
                        <li class="has_sub_menu active m_bottom_10">
                            <a href="index.html" class="d_block relative fs_large color_light_2 color_blue_hover">Home</a>
                            <!--sub menu(second level)-->
                            <ul class="m_top_10">
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Layouts</a>
                                    <!--sub menu(third level)-->
                                    <ul class="m_top_10 d_none">
                                        <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Business</a></li>
                                        <li class="m_bottom_10"><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Agency</a></li>
                                        <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Portfolio</a></li>
                                        <li class="m_bottom_10"><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Landing Page</a></li>
                                        <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Magazine</a></li>
                                        <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Shop</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu active">
                                    <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Sliders</a>
                                    <!--sub menu(third level)-->
                                    <ul class="m_top_10">
                                        <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Revolution</a></li>
                                        <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Flex</a></li>
                                        <li class="m_bottom_10"><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">iosSlider</a></li>
                                        <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Layer</a></li>
                                        <li class="m_bottom_10"><a href="index_video_slider.html" class="d_block relative color_light_2 color_blue_hover">Video Slider</a></li>
                                        <li class="has_sub_menu active">
                                            <a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Content</a>
                                            <!--sub menu(fourth level)-->
                                            <ul class="m_top_10">
                                                <li class="m_bottom_10"><a href="index_text_and_form.html" class="d_block relative color_light_2 color_blue_hover">Text &amp; Form</a></li>
                                                <li class="m_bottom_10"><a href="index_other_head_static_content.html" class="d_block relative color_light_2 color_blue_hover">Event Countdown</a></li>
                                                <li class="m_bottom_10"><a href="index_video_background.html" class="d_block relative color_light_2 color_blue_hover">Video Background</a></li>
                                                <li class="m_bottom_10"><a href="index_video_in_popup.html" class="d_block relative color_light_2 color_blue_hover">Video in Popup Window</a></li>
                                                <li class="m_bottom_10"><a href="index_static_image.html" class="d_block relative color_light_2 color_blue_hover">Static Image</a></li>
                                                <li><a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Video</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="pages_about.html" class="d_block relative fs_large color_light_2 color_blue_hover">Pages</a>
                            <!--sub menu(second level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10">
                                    <a href="pages_about.html" class="d_block relative color_light_2 color_blue_hover">About us</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_services.html" class="d_block relative color_light_2 color_blue_hover">Services</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_team.html" class="d_block relative color_light_2 color_blue_hover">Team</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_process.html" class="d_block relative color_light_2 color_blue_hover">Process</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_careers.html" class="d_block relative color_light_2 color_blue_hover">Careers</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_faq.html" class="d_block relative color_light_2 color_blue_hover">FAQ</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Landing Page</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_404.html" class="d_block relative color_light_2 color_blue_hover">404 Page</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_coming_soon.html" class="d_block relative color_light_2 color_blue_hover">Coming soon page</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_sitemap.html" class="d_block relative color_light_2 color_blue_hover">Sitemap</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_full_width.html" class="d_block relative color_light_2 color_blue_hover">Full width text page</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Text page with right sidebar</a>
                                </li>
                                <li class="m_bottom_10">
                                    <a href="pages_left_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Text page with left sidebar</a>
                                </li>
                                <li>
                                    <a href="pages_contact.html" class="d_block relative color_light_2 color_blue_hover">Contact us</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="portfolio_classic_1_column.html" class="d_block relative fs_large color_light_2 color_blue_hover">Portfolio</a>
                            <!--sub menu(second level)-->
                            <ul class="d_none m_top_10">
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="portfolio_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">Classic</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="portfolio_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">1 column</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_classic_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_classic_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_classic_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_classic_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                        <li><a href="portfolio_classic_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="portfolio_sortable_t_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Sortable grid with text</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="portfolio_sortable_t_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_sortable_t_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_sortable_t_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_sortable_t_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                        <li><a href="portfolio_sortable_t_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="portfolio_sortable_wt_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Sortable grid without text</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="portfolio_sortable_wt_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_sortable_wt_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_sortable_wt_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_sortable_wt_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                        <li><a href="portfolio_sortable_wt_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="portfolio_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Sortable masonry</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="portfolio_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_masonry_2_columns_rsidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_masonry_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_masonry_3_columns_lsidebar.html" class="d_block relative color_light_2 color_blue_hover m_bottom_10">3 columns with left sidebar</a></li>
                                        <li><a href="portfolio_masonry_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu">
                                    <a href="portfolio_single_side_image_list.html" class="d_block relative color_light_2 color_blue_hover">Single project pages</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="portfolio_single_side_image_list.html" class="d_block relative color_light_2 color_blue_hover">Project with side image list</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_single_full_width_image_list.html" class="d_block relative color_light_2 color_blue_hover">Project with full width image list</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_single_side_image_slider.html" class="d_block relative color_light_2 color_blue_hover">Project with side image slider</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_single_full_width_image_slider.html" class="d_block relative color_light_2 color_blue_hover">Project with full width image slider</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_single_extended_image_slider.html" class="d_block relative color_light_2 color_blue_hover">Project with extended image list</a></li>
                                        <li class="m_bottom_10"><a href="portfolio_single_side_video_list.html" class="d_block relative color_light_2 color_blue_hover">Project with side video list</a></li>
                                        <li><a href="portfolio_single_full_width_video.html" class="d_block relative color_light_2 color_blue_hover">Project with full width video list</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="blog_classic_1_column.html" class="d_block relative fs_large color_light_2 color_blue_hover">Blog</a>
                            <!--sub menu(second level)-->
                            <ul class="d_none m_top_10">
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="blog_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">Classic</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="blog_classic_1_column.html" class="d_block relative color_light_2 color_blue_hover">1 column</a></li>
                                        <li><a href="portfolio_classic_2_columns.html" class="d_block relative color_light_2 color_blue_hover">1 Column with right sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="blog_grid_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Grid</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="blog_grid_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                        <li class="m_bottom_10"><a href="blog_grid_2_columns_left_sidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with left sidebar</a></li>
                                        <li class="m_bottom_10"><a href="blog_grid_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                        <li class="m_bottom_10"><a href="blog_grid_3_columns_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with right sidebar</a></li>
                                        <li><a href="blog_grid_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="blog_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">Masonry</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="blog_masonry_2_columns.html" class="d_block relative color_light_2 color_blue_hover">2 columns</a></li>
                                        <li class="m_bottom_10"><a href="blog_masonry_2_columns_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">2 columns with right sidebar</a></li>
                                        <li class="m_bottom_10"><a href="blog_masonry_3_columns.html" class="d_block relative color_light_2 color_blue_hover">3 columns</a></li>
                                        <li class="m_bottom_10"><a href="blog_masonry_3_columns_left_sidebar.html" class="d_block relative color_light_2 color_blue_hover">3 columns with left sidebar</a></li>
                                        <li><a href="blog_masonry_4_columns.html" class="d_block relative color_light_2 color_blue_hover">4 columns</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu">
                                    <a href="blog_single_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Single blog post</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="blog_single_right_sidebar.html" class="d_block relative color_light_2 color_blue_hover">Image post</a></li>
                                        <li class="m_bottom_10"><a href="blog_single_image_slideshow_post.html" class="d_block relative color_light_2 color_blue_hover">Image slideshow post</a></li>
                                        <li class="m_bottom_10"><a href="blog_single_video_post.html" class="d_block relative color_light_2 color_blue_hover">Video post</a></li>
                                        <li class="m_bottom_10"><a href="blog_single_audio_post.html" class="d_block relative color_light_2 color_blue_hover">Audio post</a></li>
                                        <li class="m_bottom_10"><a href="blog_single_blockquote_post.html" class="d_block relative color_light_2 color_blue_hover">Blockquote post</a></li>
                                        <li class="m_bottom_10"><a href="blog_single_link_post.html" class="d_block relative color_light_2 color_blue_hover">Link post</a></li>
                                        <li><a href="blog_single_full_width.html" class="d_block relative color_light_2 color_blue_hover">Full Width Post</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="#" class="d_block relative fs_large color_light_2 color_blue_hover">Features</a>
                            <!--sub menu(second level)-->
                            <ul class="d_none m_top_10">
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Layouts</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Business</a></li>
                                        <li><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Agency</a></li>
                                        <li><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Portfolio</a></li>
                                        <li><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Landing Page</a></li>
                                        <li><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Magazine</a></li>
                                        <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Shop</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Sliders</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Revolution</a></li>
                                        <li><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Flex</a></li>
                                        <li><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">iosSlider</a></li>
                                        <li><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Layer</a></li>
                                        <li><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Video Slider</a></li>
                                        <li class="has_sub_menu active">
                                            <a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Content</a>
                                            <!--sub menu(fourth level)-->
                                            <ul class="m_top_10">
                                                <li class="m_bottom_10"><a href="index_text_and_form.html" class="d_block relative color_light_2 color_blue_hover">Text &amp; Form</a></li>
                                                <li class="m_bottom_10"><a href="index_other_head_static_content.html" class="d_block relative color_light_2 color_blue_hover">Event Countdown</a></li>
                                                <li class="m_bottom_10"><a href="index_video_background.html" class="d_block relative color_light_2 color_blue_hover">Video Background</a></li>
                                                <li class="m_bottom_10"><a href="index_video_in_popup.html" class="d_block relative color_light_2 color_blue_hover">Video in Popup Window</a></li>
                                                <li class="m_bottom_10"><a href="index_static_image.html" class="d_block relative color_light_2 color_blue_hover">Static Image</a></li>
                                                <li><a href="index_boxed_static_video.html" class="d_block relative color_light_2 color_blue_hover">Static Video</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Headers</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Header 1</a></li>
                                        <li class="m_bottom_10"><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Header 2</a></li>
                                        <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Header 3</a></li>
                                        <li class="m_bottom_10"><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Header 4</a></li>
                                        <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Header 5</a></li>
                                        <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Header 6</a></li>
                                    </ul>
                                </li>
                                <li class="has_sub_menu m_bottom_10">
                                    <a href="index.html" class="d_block relative color_light_2 color_blue_hover">Footers</a>
                                    <!--sub menu(third level)-->
                                    <ul class="d_none m_top_10">
                                        <li class="m_bottom_10"><a href="index.html" class="d_block relative color_light_2 color_blue_hover">Footer 1</a></li>
                                        <li class="m_bottom_10"><a href="index_agency.html" class="d_block relative color_light_2 color_blue_hover">Footer 2</a></li>
                                        <li class="m_bottom_10"><a href="index_portfolio.html" class="d_block relative color_light_2 color_blue_hover">Footer 3</a></li>
                                        <li class="m_bottom_10"><a href="index_landing.html" class="d_block relative color_light_2 color_blue_hover">Footer 4</a></li>
                                        <li class="m_bottom_10"><a href="index_magazine.html" class="d_block relative color_light_2 color_blue_hover">Footer 5</a></li>
                                        <li><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Footer 6</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="shortcodes_elements.html" class="d_block relative fs_large color_light_2 color_blue_hover">Shortcodes</a>
                            <!--sub menu(second level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="shortcodes_elements.html" class="d_block relative color_light_2 color_blue_hover">Elements</a></li>
                                <li class="m_bottom_10"><a href="shortcodes_columns.html" class="d_block relative color_light_2 color_blue_hover">Columns</a></li>
                                <li><a href="shortcodes_typography.html" class="d_block relative color_light_2 color_blue_hover">Typography</a></li>
                            </ul>
                        </li>
                        <li class="has_sub_menu m_bottom_10">
                            <a href="shop.html" class="d_block relative fs_large color_light_2 color_blue_hover">Shop</a>
                            <!--sub menu(second level)-->
                            <ul class="d_none m_top_10">
                                <li class="m_bottom_10"><a href="shop.html" class="d_block relative color_light_2 color_blue_hover">Front Page</a></li>
                                <li class="m_bottom_10"><a href="shop_category_v1.html" class="d_block relative color_light_2 color_blue_hover">Category Page v1</a></li>
                                <li class="m_bottom_10"><a href="shop_category_v2.html" class="d_block relative color_light_2 color_blue_hover">Category Page v2</a></li>
                                <li class="m_bottom_10"><a href="shop_product_page_v1.html" class="d_block relative color_light_2 color_blue_hover">Product Page v1</a></li>
                                <li class="m_bottom_10"><a href="shop_product_page_v2.html" class="d_block relative color_light_2 color_blue_hover">Product Page v2</a></li>
                                <li class="m_bottom_10"><a href="shop_cart.html" class="d_block relative color_light_2 color_blue_hover">Shoping Cart &amp; Checkout</a></li>
                                <li class="m_bottom_10"><a href="shop_wishlist.html" class="d_block relative color_light_2 color_blue_hover">Wishlist</a></li>
                                <li class="m_bottom_10"><a href="shop_compare_products.html" class="d_block relative color_light_2 color_blue_hover">Compare products</a></li>
                                <li class="m_bottom_10"><a href="shop_order_list.html" class="d_block relative color_light_2 color_blue_hover">Orders list</a></li>
                                <li><a href="shop_order_information.html" class="d_block relative color_light_2 color_blue_hover">Order information</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <!--end of header-->

            <!--layout-->
            <div class="wide_layout bg_light">


                <!--header markup-->
                <header role="banner" class="relative type_2">
                    <span class="gradient_line"></span>
                    <!--top part-->
                    <section class="header_top_part p_top_0 p_bottom_0">
                        <div class="container">
                            <div class="row">
                                <!--contact info-->
                                <div class="col-lg-5 col-md-4 col-sm-5 t_xs_align_c">
                                    <ul class="hr_list fs_small color_dark  contact_info_list">
                                        <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                            <span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mobile"></i></span>+(852) 2730 1251
                                        </li>
                                        <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                            <a href="mailto:#" class="color_dark  d_inline_b color_black_hover"><span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mail-alt"></i></span>sales@shanielfashions.com</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="col-lg-7 col-md-8 col-sm-7 t_align_r t_xs_align_c">
                                    <!--mini nav-->
                                    <nav class="d_inline_m m_right_10 m_xs_right_0">
                                        <ul class="hr_list stripe_list fs_small">
                                            <li><a href="#" class="color_dark ">About</a></li>
                                            <li><a href="#" class="color_dark ">Contact</a></li>
                                            <li><a href="#" class="color_dark ">FAQ</a></li>
                                            <li><a href="#" class="color_dark ">My Account</a></li>
                                            <li><a href="#" class="color_dark ">My Wishlist</a></li>
                                        </ul>
                                    </nav>
                                    <br class="d_none d_xs_block">
                                    <ul class="hr_list d_inline_b social_icons">
                                        <li class="m_right_8"><a href="#" class="color_dark  facebook circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_dark  twitter circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_dark  googleplus circle icon_wrap_size_1 d_block"><i class="icon-gplus-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_dark  instagram circle icon_wrap_size_1 d_block"><i class="icon-instagramm"></i></a></li>
                                    </ul>


                                </div>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <!--header bottom part-->
                    <section class="header_bottom_part type_2 bg_light">
                        <div class="container">
                            <div class="d_table w_full d_xs_block">
                                <!--logo-->
                                <div class="col-lg-3 col-md-3 col-sm-3 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
                                    <a href="index.html" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
                                        <img src="<?php echo base_url(); ?>assets/images/logo4.png" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 d_table_cell d_xs_block f_none t_xs_align_c">
                                    <!--searchform-->



                                    <div class="f_right clearfix f_xs_none d_xs_inline_b t_xs_align_l m_xs_bottom_15">
                                        <!--shopping cart-->
                                        <div class="relative f_right dropdown_2_container shoppingcart">
                                            <button class="icon_wrap_size_2 color_dark  circle tr_all">
                                                <i class="icon-basket color_dark _2 tr_inherit"></i>
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
                                            <button class="icon_wrap_size_2 color_dark  circle tr_all">
                                                <i class="icon-lock color_dark _2 tr_inherit"></i>
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
                    <hr class="d_xs_none">
                    <section class="sticky_part bg_light">
                        <div class="container">

                            <!--main navigation-->
                            <nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 m_sm_right_5 t_align_l m_xs_bottom_15">
                                <ul class="hr_list main_menu type_2 fw_light">
                                    <li class="current container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_dark fs_large relative r_xs_corners" href="#">Home
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
                                        <a class="color_dark fs_large relative r_xs_corners" href="#">Customize Now
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
                                        <a class="color_dark fs_large relative r_xs_corners" href="#">Offers
                                        </a>

                                    </li>
                                    <li class="container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_dark fs_large relative r_xs_corners" href="#">Support & Guide
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
                                        <a class="color_dark fs_large relative r_xs_corners" href="#">Fashion Tips
                                        </a>

                                    </li>
                                    <li class="container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_dark fs_large relative r_xs_corners" href="#">Schedule
                                        </a>

                                    </li>
                                    <li class="container3d relative f_xs_none m_xs_bottom_5">
                                        <a class="color_dark fs_large relative r_xs_corners" href="s#">Contact Us
                                        </a>

                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </section>
                </header>


                <!--header-->
