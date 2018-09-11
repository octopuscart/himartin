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
                        <button class="icon_wrap_size_2 circle color_grey_light_2 d_inline_m" id="close_side_menu">
                            <i class="icon-cancel"></i>
                        </button>
                    </div>
                </header>
                <hr class="divider_type_4 m_bottom_20">
                <!--searchform-->
                <form role="search" class="m_bottom_20 relative type_2">
                    <input type="text" placeholder="Search" class="r_corners fw_light bg_light w_full">
                    <button class="color_grey_light color_purple_hover tr_all">
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
                <header role="banner" class="relative">
                    <span class="gradient_line"></span>
                    <!--top part-->
                    <section class="header_top_part">
                        <div class="container">
                            <div class="row">
                                <!--contact info-->
                                <div class="col-lg-6 col-md-6 col-sm-6 t_xs_align_c">
                                    <ul class="hr_list fs_small color_grey_light">
                                        <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                            <span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mobile"></i></span>(+852) 9342 1970
                                        </li>
                                        <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                            <a href="mailto:#" class="color_grey_light d_inline_b color_black_hover"><span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mail-alt"></i></span>sales@shanielfashions.com</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <!--social icons-->
                                <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c">
                                    <ul class="hr_list d_inline_b social_icons">
                                        <li class="m_right_8"><a href="#" class="color_grey_light facebook circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_grey_light twitter circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_grey_light googleplus circle icon_wrap_size_1 d_block"><i class="icon-gplus-1"></i></a></li>
                                        <li class="m_right_8"><a href="#" class="color_grey_light instagram circle icon_wrap_size_1 d_block"><i class="icon-instagramm"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr>
                    <!--header bottom part-->
                    <section class="header_bottom_part bg_light">
                        <div class="container">
                            <div class="d_table w_full d_xs_block">
                                <!--logo-->
                                <div class="col-lg-2 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
                                    <a href="index.html" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
                                        <img src="images/logo.gif" alt="">
                                    </a>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10 t_align_r d_table_cell d_xs_block f_none">
                                    <div class="relative clearfix t_align_r">
                                        <button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
                                            <i class="icon-menu"></i>
                                        </button>
                                        <!--main navigation-->
                                        <nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 t_align_l m_xs_bottom_15">
                                            <ul class="hr_list main_menu type_2  fw_light">
                                                <li class="current container3d relative f_xs_none m_xs_bottom_5">
                                                    <a class="color_dark fs_large relative r_xs_corners" href="index.html">Home
                                                        <i class="icon-angle-down d_inline_m"></i>
                                                    </a>
                                                    <!--sub menu-->
                                                    <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                        <li class="current container3d relative">
                                                            <a href="index.html" class="d_block color_dark relative">Layouts
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li class="current"><a href="index.html" class="d_block color_dark">Business</a></li>
                                                                <li><a href="index_agency.html" class="d_block color_dark">Agency</a></li>
                                                                <li><a href="index_portfolio.html" class="d_block color_dark">Portfolio</a></li>
                                                                <li><a href="index_landing.html" class="d_block color_dark">Landing page</a></li>
                                                                <li><a href="index_magazine.html" class="d_block color_dark">Magazine</a></li>
                                                                <li><a href="shop.html" class="d_block color_dark">Shop</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="container3d relative">
                                                            <a href="index.html" class="d_block color_dark relative">Sliders
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <!--sub menu (third level)-->
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="index.html" class="d_block color_dark">Revolution</a></li>
                                                                <li><a href="index_magazine.html" class="d_block color_dark">Flex</a></li>
                                                                <li><a href="shop.html" class="d_block color_dark">iosSlider</a></li>
                                                                <li><a href="index_portfolio.html" class="d_block color_dark">Layer</a></li>
                                                                <li><a href="index_video_slider.html" class="d_block color_dark">Video Slider</a></li>
                                                                <li class="container3d relative">
                                                                    <a href="index_text_and_form.html" class="d_block color_dark relative">Static Content
                                                                        <i class="icon-angle-right"></i>
                                                                    </a>
                                                                    <!--sub menu (fourth level)-->
                                                                    <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                        <li><a href="index_text_and_form.html" class="d_block color_dark">Text &amp; Form</a></li>
                                                                        <li><a href="index_other_head_static_content.html" class="d_block color_dark">Event Countdown</a></li>
                                                                        <li><a href="index_video_background.html" class="d_block color_dark">Video Background</a></li>
                                                                        <li><a href="index_video_in_popup.html" class="d_block color_dark">Video in Popup Window</a></li>
                                                                        <li><a href="index_static_image.html" class="d_block color_dark">Static Image</a></li>
                                                                        <li><a href="index_boxed_static_video.html" class="d_block color_dark ">Static Video</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                    <a class="color_dark fs_large relative r_xs_corners" href="pages_about.html">Pages
                                                        <i class="icon-angle-down d_inline_m"></i>
                                                    </a>
                                                    <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                        <li>
                                                            <a href="pages_about.html" class="d_block color_dark relative">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_services.html" class="d_block color_dark relative">Services</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_team.html" class="d_block color_dark relative">Team</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_process.html" class="d_block color_dark relative">Process</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_careers.html" class="d_block color_dark relative">Careers</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_faq.html" class="d_block color_dark relative">FAQ</a>
                                                        </li>
                                                        <li>
                                                            <a href="index_landing.html" class="d_block color_dark relative">Landing Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_404.html" class="d_block color_dark relative">404 Page</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_coming_soon.html" class="d_block color_dark relative">Coming soon page</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_sitemap.html" class="d_block color_dark relative">Sitemap</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_full_width.html" class="d_block color_dark relative">Full width text page</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_right_sidebar.html" class="d_block color_dark relative">Text page with right sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_left_sidebar.html" class="d_block color_dark relative">Text page with left sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="pages_contact.html" class="d_block color_dark relative">Contact us</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                    <a class="color_dark fs_large relative r_xs_corners" href="portfolio_classic_1_column.html">Portfolio
                                                        <i class="icon-angle-down d_inline_m r_xs_corners"></i>
                                                    </a>
                                                    <!--sub menu-->
                                                    <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                        <li class="container3d relative">
                                                            <a href="portfolio_classic_1_column.html" class="d_block color_dark relative">Classic
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <!--sub menu (third level)-->
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="portfolio_classic_1_column.html" class="d_block color_dark">1 column</a></li>
                                                                <li><a href="portfolio_classic_2_columns.html" class="d_block color_dark">2 columns</a></li>
                                                                <li><a href="portfolio_classic_2_columns_rsidebar.html" class="d_block color_dark">2 columns with right sidebar</a></li>
                                                                <li><a href="portfolio_classic_3_columns.html" class="d_block color_dark">3 columns</a></li>
                                                                <li><a href="portfolio_classic_3_columns_lsidebar.html" class="d_block color_dark">3 columns with left sidebar</a></li>
                                                                <li><a href="portfolio_classic_4_columns.html" class="d_block color_dark">4 columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="container3d relative">
                                                            <a href="portfolio_sortable_t_2_columns.html" class="d_block color_dark relative">Sortable grid with text
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <!--sub menu (third level)-->
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="portfolio_sortable_t_2_columns.html" class="d_block color_dark">2 columns</a></li>
                                                                <li><a href="portfolio_sortable_t_2_columns_rsidebar.html" class="d_block color_dark">2 columns with right sidebar</a></li>
                                                                <li><a href="portfolio_sortable_t_3_columns.html" class="d_block color_dark">3 columns</a></li>
                                                                <li><a href="portfolio_sortable_t_3_columns_lsidebar.html" class="d_block color_dark">3 columns with left sidebar</a></li>
                                                                <li><a href="portfolio_sortable_t_4_columns.html" class="d_block color_dark">4 columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="container3d relative">
                                                            <a href="portfolio_sortable_wt_2_columns.html" class="d_block color_dark relative">Sortable grid without text
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <!--sub menu (third level)-->
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="portfolio_sortable_wt_2_columns.html" class="d_block color_dark">2 columns</a></li>
                                                                <li><a href="portfolio_sortable_wt_2_columns_rsidebar.html" class="d_block color_dark">2 columns with right sidebar</a></li>
                                                                <li><a href="portfolio_sortable_wt_3_columns.html" class="d_block color_dark">3 columns</a></li>
                                                                <li><a href="portfolio_sortable_wt_3_columns_lsidebar.html" class="d_block color_dark">3 columns with left sidebar</a></li>
                                                                <li><a href="portfolio_sortable_wt_4_columns.html" class="d_block color_dark">4 columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="container3d relative">
                                                            <a href="portfolio_masonry_2_columns.html" class="d_block color_dark relative">Sortable masonry
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <!--sub menu (third level)-->
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="portfolio_masonry_2_columns.html" class="d_block color_dark">2 columns</a></li>
                                                                <li><a href="portfolio_masonry_2_columns_rsidebar.html" class="d_block color_dark">2 columns with right sidebar</a></li>
                                                                <li><a href="portfolio_masonry_3_columns.html" class="d_block color_dark">3 columns</a></li>
                                                                <li><a href="portfolio_masonry_3_columns_lsidebar.html" class="d_block color_dark">3 columns with left sidebar</a></li>
                                                                <li><a href="portfolio_masonry_4_columns.html" class="d_block color_dark">4 columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="container3d relative">
                                                            <a href="portfolio_single_side_image_list.html" class="d_block color_dark relative">Single project pages
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <!--sub menu (third level)-->
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="portfolio_single_side_image_list.html" class="d_block color_dark">Project with side image list</a></li>
                                                                <li><a href="portfolio_single_full_width_image_list.html" class="d_block color_dark">Project with full width image list</a></li>
                                                                <li><a href="portfolio_single_side_image_slider.html" class="d_block color_dark">Project with side image slider</a></li>
                                                                <li><a href="portfolio_single_full_width_image_slider.html" class="d_block color_dark">Project with full width image slider</a></li>
                                                                <li><a href="portfolio_single_extended_image_slider.html" class="d_block color_dark">Project with extended image slider</a></li>
                                                                <li><a href="portfolio_single_side_video_list.html" class="d_block color_dark">Project with side video list</a></li>
                                                                <li><a href="portfolio_single_full_width_video.html" class="d_block color_dark">Project with full width video</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                    <a class="color_dark fs_large relative r_xs_corners" href="blog_classic_1_column.html">Blog
                                                        <i class="icon-angle-down d_inline_m"></i>
                                                    </a>
                                                    <!--sub menu-->
                                                    <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                        <li class="container3d relative">
                                                            <a href="blog_classic_1_column.html" class="d_block color_dark relative">Classic
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="blog_classic_1_column.html" class="d_block color_dark">1 column</a></li>
                                                                <li><a href="blog_classic_1_column_right_sidebar.html" class="d_block color_dark">1 column with right sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="container3d relative">
                                                            <a href="blog_grid_2_columns.html" class="d_block color_dark relative">Grid
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <!--sub menu (third level)-->
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="blog_grid_2_columns.html" class="d_block color_dark">2 columns</a></li>
                                                                <li><a href="blog_grid_2_columns_left_sidebar.html" class="d_block color_dark">2 columns with left sidebar</a></li>
                                                                <li><a href="blog_grid_3_columns.html" class="d_block color_dark">3 columns</a></li>
                                                                <li><a href="blog_grid_3_columns_right_sidebar.html" class="d_block color_dark">3 columns with right sidebar</a></li>
                                                                <li><a href="blog_grid_4_columns.html" class="d_block color_dark">4 columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="container3d relative">
                                                            <a href="blog_masonry_2_columns.html" class="d_block color_dark relative">Masonry
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <!--sub menu (third level)-->
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="blog_masonry_2_columns.html" class="d_block color_dark">2 columns</a></li>
                                                                <li><a href="blog_masonry_2_columns_right_sidebar.html" class="d_block color_dark">2 columns with right sidebar</a></li>
                                                                <li><a href="blog_masonry_3_columns.html" class="d_block color_dark">3 columns</a></li>
                                                                <li><a href="blog_masonry_3_columns_left_sidebar.html" class="d_block color_dark">3 columns with left sidebar</a></li>
                                                                <li><a href="blog_masonry_4_columns.html" class="d_block color_dark">4 columns</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="container3d relative">
                                                            <a href="blog_single_right_sidebar.html" class="d_block color_dark relative">Single blog post
                                                                <i class="icon-angle-right"></i>
                                                            </a>
                                                            <!--sub menu (third level)-->
                                                            <ul class="sub_menu bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                <li><a href="blog_single_right_sidebar.html" class="d_block color_dark">Image post</a></li>
                                                                <li><a href="blog_single_image_slideshow_post.html" class="d_block color_dark">Image slideshow post</a></li>
                                                                <li><a href="blog_single_video_post.html" class="d_block color_dark">Video post</a></li>
                                                                <li><a href="blog_single_audio_post.html" class="d_block color_dark">Audio post</a></li>
                                                                <li><a href="blog_single_blockquote_post.html" class="d_block color_dark">Blockquote post</a></li>
                                                                <li><a href="blog_single_link_post.html" class="d_block color_dark">Link post</a></li>
                                                                <li><a href="blog_single_full_width.html" class="d_block color_dark">Full Width Post</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                    <a class="color_dark fs_large relative r_xs_corners" href="#">Features
                                                        <i class="icon-angle-down d_inline_m"></i>
                                                    </a>
                                                    <!--sub mega menu-->
                                                    <div class="mega_menu_container r_xs_corners bs_xs_none bg_light shadow_1 tr_all tr_xs_none trf_xs_none d_xs_none">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3">
                                                                <p class="color_dark tt_uppercase m_bottom_10 m_xs_top_10">Layouts</p>
                                                                <!--sub menu-->
                                                                <ul class="sub_menu vr_list tr_all relative">
                                                                    <li><a href="index.html" class="d_block color_dark">Business</a></li>
                                                                    <li><a href="index_agency.html" class="d_block color_dark">Agency</a></li>
                                                                    <li><a href="index_portfolio.html" class="d_block color_dark">Portfolio</a></li>
                                                                    <li><a href="index_landing.html" class="d_block color_dark">Landing page</a></li>
                                                                    <li><a href="index_magazine.html" class="d_block color_dark">Magazine</a></li>
                                                                    <li><a href="shop.html" class="d_block color_dark">Shop</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 relative">
                                                                <p class="color_dark tt_uppercase m_bottom_10 m_xs_top_10">Sliders</p>
                                                                <!--sub menu-->
                                                                <ul class="sub_menu vr_list tr_all tr_xs_none relative">
                                                                    <li><a href="index.html" class="d_block color_dark">Revolution</a></li>
                                                                    <li><a href="index_magazine.html" class="d_block color_dark">Flex</a></li>
                                                                    <li><a href="shop.html" class="d_block color_dark">iosSlider</a></li>
                                                                    <li><a href="index_portfolio.html" class="d_block color_dark">Layer</a></li>
                                                                    <li><a href="index_video_slider.html" class="d_block color_dark">Video Slider</a></li>
                                                                    <li class="container3d relative">
                                                                        <a href="index_boxed_static_video.html" class="d_block color_dark relative">Static Content
                                                                            <i class="icon-angle-right"></i>
                                                                        </a>
                                                                        <!--sub menu(third level)-->
                                                                        <ul class="sub_menu vr_list bg_light tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                                            <li><a href="index_text_and_form.html" class="d_block color_dark">Text &amp; Form</a></li>
                                                                            <li><a href="index_other_head_static_content.html" class="d_block color_dark">Event Countdown</a></li>
                                                                            <li><a href="index_video_background.html" class="d_block color_dark">Video Background</a></li>
                                                                            <li><a href="index_video_in_popup.html" class="d_block color_dark">Video in Popup Window</a></li>
                                                                            <li><a href="index_static_image.html" class="d_block color_dark">Static Image</a></li>
                                                                            <li><a href="index_boxed_static_video.html" class="d_block color_dark ">Static Video</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3">
                                                                <p class="color_dark tt_uppercase m_bottom_10 m_xs_top_10">Headers</p>
                                                                <!--sub menu-->
                                                                <ul class="sub_menu vr_list tr_all relative">
                                                                    <li><a href="index.html" class="d_block color_dark">Header 1</a></li>
                                                                    <li><a href="index_agency.html" class="d_block color_dark">Header 2</a></li>
                                                                    <li><a href="index_portfolio.html" class="d_block color_dark">Header 3</a></li>
                                                                    <li><a href="index_landing.html" class="d_block color_dark">Header 4</a></li>
                                                                    <li><a href="index_magazine.html" class="d_block color_dark">Header 5</a></li>
                                                                    <li><a href="shop.html" class="d_block color_dark">Header 6</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3">
                                                                <p class="color_dark tt_uppercase m_bottom_10 m_xs_top_10">Footers</p>
                                                                <!--sub menu-->
                                                                <ul class="sub_menu vr_list tr_all relative">
                                                                    <li><a href="index.html#footer" class="d_block color_dark">Footer 1</a></li>
                                                                    <li><a href="index_agency.html#footer" class="d_block color_dark">Footer 2</a></li>
                                                                    <li><a href="index_portfolio.html#footer" class="d_block color_dark">Footer 3</a></li>
                                                                    <li><a href="index_landing.html#footer" class="d_block color_dark">Footer 4</a></li>
                                                                    <li><a href="index_magazine.html#footer" class="d_block color_dark">Footer 5</a></li>
                                                                    <li><a href="shop.html#footer" class="d_block color_dark">Footer 6</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 d_md_none">
                                                                <p class="color_dark tt_uppercase m_bottom_10 m_xs_top_10">More Features</p>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                                        <ul class="vr_list">
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Responsive design</li>
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Bootstrap 3</li>
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Retina ready</li>
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Valid HTML code</li>
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Boxed &amp; wide versions</li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                                        <ul class="vr_list">
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Parallax effect</li>
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Side menu</li>
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Video Background</li>
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Iconic fonts</li>
                                                                            <li class="relative"><i class="icon-check color_scheme"></i>Plenty of elements</li>
                                                                            <li class="relative">PSD files included</li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                    <a class="color_dark fs_large relative r_xs_corners" href="shortcodes_elements.html">Shortcodes
                                                        <i class="icon-angle-down d_inline_m"></i>
                                                    </a>
                                                    <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                        <li>
                                                            <a href="shortcodes_elements.html" class="d_block color_dark relative">Elements</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_columns.html" class="d_block color_dark relative">Columns</a>
                                                        </li>
                                                        <li>
                                                            <a href="shortcodes_typography.html" class="d_block color_dark relative">Typography</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                    <a class="color_dark fs_large relative r_xs_corners" href="shop.html">Shop
                                                        <i class="icon-angle-down d_inline_m"></i>
                                                    </a>
                                                    <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                        <li>
                                                            <a href="shop.html" class="d_block color_dark relative">Front page</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_category_v1.html" class="d_block color_dark relative">Category page v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_category_v2.html" class="d_block color_dark relative">Category page v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_product_page_v1.html" class="d_block color_dark relative">Product page v1</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_product_page_v2.html" class="d_block color_dark relative">Product page v2</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_cart.html" class="d_block color_dark relative">Shopping Cart &amp; Checkout</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_wishlist.html" class="d_block color_dark relative">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_compare_products.html" class="d_block color_dark relative">Compare products</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_order_list.html" class="d_block color_dark relative">Orders list</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop_order_information.html" class="d_block color_dark relative">Order information</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!--searchform button-->
                                        <div class="relative d_inline_m search_buttons d_xs_none">
                                            <button class="icon_wrap_size_2 circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-cancel"></i></button>
                                            <button class="icon_wrap_size_2 active circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-search"></i></button>
                                        </div>
                                        <!--searchform-->
                                        <form role="search" class="bg_light animate_ vc_child t_align_r fw_light tr_all trf_xs_none">
                                            <input type="text" name="search" placeholder="Search" class="r_corners d_inline_m">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </header>


                <div class="header">
                    <div class="header-top">
                        <div class="container">
                            <div class="top-left">
                                <a href="#">   <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +852 6626 4429</a>

                                <a href="#" style="margin-left: 10px;"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> john@perfectfashion.com.hk</a>
                            </div>
                            <div class="top-right">
                                <ul>
                                    <li><a href="https://www.facebook.com/Johns-Perfect-Fashion-1886520941596824/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="heder-bottom">
                        <div class="container">
                            <div class="logo-nav">
                                <div class="logo-nav-left">
                                    <h1><a href="/">
                                            <img src="<?php echo base_url(); ?>/assets/images/logo1.png" style="    height: 80px;" class="centerimage">
                                        </a></h1>
                                </div>
                                <div class="logo-nav-left1">
                                    <nav class="navbar navbar-default">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header nav_2">
                                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div> 
                                        <div class="collapse navbar-collapse mobile_menu" id="bs-megadropdown-tabs">
                                            <ul class="nav navbar-nav">
                                                <li class="active"><a href="/" class="act">Home</a></li>	
                                                <!-- Mega Menu -->
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop Now<b class="caret"></b></a>
                                                    <ul class="dropdown-menu   singlemenu">
                                                        <li><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Shirt</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/2/0') ?>">Suit</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/4/0') ?>">Jacket</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/3/0') ?>">Pant</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catalogue <b class="caret"></b></a>
                                                    <ul class="dropdown-menu   singlemenu">
                                                        <li><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Shirt</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/2/0') ?>">Suit</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/4/0') ?>">Jacket</a></li>
                                                        <li><a href="<?php echo site_url('Product/ProductList/3/0') ?>">Pant</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="<?php echo site_url('Pages/clients'); ?>">Our Clients </a></li>
                                                <li><a href="<?php echo site_url('Pages/contactus'); ?>">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>

                                <div class="header-right2">
                                    <div class="cart box_1" style="    margin-top: 10px;">
                                        <a href="<?php echo site_url("Cart/details"); ?>">
                                            <h3> <div class="total">
                                                    <span class="simpleCart_total1">{{globleCartData.total_price|currency:"<?php echo globle_currency; ?> "}}</span> (<span  class="simpleCart_quantity1">{{globleCartData.total_quantity}}</span> items)</div>
                                                <img src="<?php echo base_url(); ?>assets/theme/images/bag.png" alt="" />
                                            </h3>
                                        </a>
                                        <!--<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>-->
                                        <div class="clearfix"> </div>
                                    </div>	
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header-->
