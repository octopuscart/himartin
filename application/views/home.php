<?php
$this->load->view('layout/header');
?>

<section class="section_offset relative wrapper" style="height: 500px">
    <div class="video_wrap">
        <video autoplay="" muted="" loop="">
            <source src="<?php echo base_url(); ?>assets/theme/video/martinvideo.mp4" type="video/mp4">

        </video>
    </div>
    <div class="container">
        <div class="col-md-6"></div>
        <div class="col-md-6"  style="margin-top:50px;background: #00000096;border-radius: 12px;">
            <h3 class="color_light fw_light m_bottom_15 t_align_c appear-animation bounceInUp appear-animation-visible" data-appear-animation="bounceInUp" style="font-size: 60px;">Time To Suit Up!</h3>
            <p class="m_bottom_35 t_align_c color_light appear-animation bounceInUp appear-animation-visible" data-appear-animation="bounceInUp" data-appear-animation-delay="200" style="animation-delay: 200ms;    font-size: 26px;
               line-height: 38px;
               font-weight: 300;">
                <img src="<?php echo base_url(); ?>assets/images/zeganoffer.jpg" style="height: 300px;border-radius: 12px;">
            </p>

        </div>

    </div>
</section>




<!--benifits-->
<section class="section_offset">
    <div class="container t_align_c">
        <h3 class="color_dark fw_light m_bottom_35 heading_1" data-appear-animation="bounceInLeft">Extraordinary Advance Benefits</h3>


        <article id="tab-1" data-appear-animation="fadeInUp" data-appear-animation-delay="450">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 m_xs_bottom_20">
                    <img src="<?php echo base_url(); ?>assets/images/benifits/benifit1.jpg" class="r_corners" alt=""  style="width: 400px;">
                </div>
                <div class="col-lg-7 col-md-7 t_align_l fw_light">
                    <p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
                    <p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                    <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
                </div>
            </div>
        </article>


    </div>
</section>
<!--end of benifits-->


<!--clients testimoniel-->
<section class="section_offset image_bg_2_client">
    <div class="container">
        <div class="row">



            <!--testimonials-->
            <section class="col-lg-6 col-md-6 m_bottom_20" data-appear-animation="fadeInUp">
                <h3 class="color_light t_align_c m_bottom_15 fw_light">Testimonials</h3>
                <p class="m_bottom_35 t_align_c color_grey_light_2">Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae. </p>
                <div class="owl-carousel" data-nav="t_nav_" data-plugin-options='{"autoPlay":false,"autoHeight":true,"transitionStyle": "backSlide"}'>
                    <!--item-->
                    <div>
                        <!--quote-->
                        <blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
                            <p class="m_bottom_15"><i>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
                            <p><i>Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna.</i></p>
                        </blockquote>
                        <div class="d_table w_full">
                            <div class="d_table_cell">
                                <!--author photo-->
                                <div class="d_inline_m circle wrapper m_right_10">
                                    <img src="images/testimonial_img_1.jpg" alt="">
                                </div>
                                <!--author name-->
                                <div class="d_inline_m">
                                    <b class="fs_large d_block color_light">John Doe</b>
                                    <p class="fs_medium color_grey_light_2">Co-founder, Company Name</p>
                                </div>
                            </div>
                            <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
                                    <i class="icon-left-open-big"></i>
                                </button>
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
                                    <i class="icon-right-open-big"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--item-->
                    <div>
                        <!--quote-->
                        <blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
                            <p><i>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.Consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
                        </blockquote>
                        <div class="d_table w_full">
                            <div class="d_table_cell">
                                <!--author photo-->
                                <div class="d_inline_m circle wrapper m_right_10">
                                    <img src="images/testimonial_img_2.jpg" alt="">
                                </div>
                                <!--author name-->
                                <div class="d_inline_m">
                                    <b class="fs_large d_block color_light">Marta Healy</b>
                                    <p class="fs_medium color_grey_light_2">CEO, Company Name</p>
                                </div>
                            </div>
                            <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
                                    <i class="icon-left-open-big"></i>
                                </button>
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
                                    <i class="icon-right-open-big"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--item-->
                    <div>
                        <!--quote-->
                        <blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
                            <p class="m_bottom_15"><i>Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</i></p>
                            <p><i>Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</i></p>
                        </blockquote>
                        <div class="d_table w_full">
                            <div class="d_table_cell">
                                <!--author photo-->
                                <div class="d_inline_m circle wrapper m_right_10">
                                    <img src="images/testimonial_img_3.jpg" alt="">
                                </div>
                                <!--author name-->
                                <div class="d_inline_m">
                                    <b class="fs_large d_block color_light">Alice Smith</b>
                                    <p class="fs_medium color_grey_light_2">Designer, Company Name</p>
                                </div>
                            </div>
                            <div class="d_table_cell t_align_r v_align_m d_mxs_none">
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all t_nav_prev">
                                    <i class="icon-left-open-big"></i>
                                </button>
                                <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all t_nav_next">
                                    <i class="icon-right-open-big"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--our clients-->
            <section class="col-lg-6 col-md-6 t_sm_align_c" data-appear-animation="fadeInUp" data-appear-animation-delay="150">
                <!--carousel-->
                <div class="owl-carousel m_bottom_15" data-plugin-options='{"pagination":true,"transitionStyle" : "backSlide"}' data-nav="c_nav_">
                    <!--item-->
                    <div>
                        <div class="row">
                            <div class="iframe_video_wrap">
                                <iframe src="https://www.youtube.com/embed/Du8ld5hrqN0?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0"></iframe>
                            </div>

                        </div>
                    </div>
                    <!--item-->
                    <div>
                        <div class="row">
                            <div class="iframe_video_wrap">
                                <iframe src="https://www.youtube.com/embed/Du8ld5hrqN0?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0"></iframe>
                            </div>

                        </div>
                    </div>
                    <!--item-->
                    <div>
                        <div class="row">
                            <div class="iframe_video_wrap">
                                <iframe src="https://www.youtube.com/embed/Du8ld5hrqN0?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!--clients carousel nav-->
                <div class="d_table w_full clients_nav">
                    <!--paginations container-->
                    <div class="d_table_cell half_column clients_pags_container v_align_m"></div>
                    <!--navigations-->
                    <div class="d_table_cell half_column t_align_r v_align_m">
                        <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all c_nav_prev">
                            <i class="icon-left-open-big"></i>
                        </button>
                        <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all c_nav_next">
                            <i class="icon-right-open-big"></i>
                        </button>
                    </div>
                </div>
            </section>


        </div>
    </div>
</section>
<!--end of client testimoniel-->


<!--relative class is required-->
<section class="section_offset relative wrapper">
    <div class="video_wrap">
        <video autoplay muted loop>
            <source src="video/1.mp4" type="video/mp4">
            <source src="video/1.webm" type="video/webm">
        </video>
    </div>
    <div class="container">
        <h3 class="color_light fw_light t_align_c m_bottom_12" data-appear-animation="bounceInLeft">Our Clients</h3>
        <p class="m_bottom_40 color_light t_align_c" data-appear-animation="bounceInLeft" data-appear-animation-delay="150">Donec eget tellus non erat lacinia fermentum.</p>
        <div class="relative" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
            <div class="t_xs_align_c">
                <div class="owl-carousel clients brands with_video t_align_c" data-plugin-options='{"pagination":true,"transitionStyle" : "backSlide"}' data-nav="c_nav_">
                    <!--item-->
                    <div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--item-->
                    <div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--item-->
                    <div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered  wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent tr_all wrapper r_corners">
                                        <img src="images/client_logo_6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--carousel nav-->
        <button class="icon_wrap_size_5 circle color_light tr_all color_blue_hover c_nav_prev nav_type_3 d_md_none">
            <i class="icon-left-open-big"></i>
        </button>
        <button class="icon_wrap_size_5 circle color_light tr_all color_blue_hover c_nav_next nav_type_3 d_md_none">
            <i class="icon-right-open-big"></i>
        </button>
    </div>
</section>







<?php
$this->load->view('layout/footer');
?>