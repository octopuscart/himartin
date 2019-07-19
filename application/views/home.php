<?php
$this->load->view('layout/header');
?>



<section class="section_offset relative wrapper slider_height section_offset_10" >
    <!--    <div class="video_wrap">
            <video autoplay="" muted=false loop="">
                <source src="<?php echo base_url(); ?>assets/theme/video/martinvideo.mp4" type="video/mp4">
    
            </video>
            <audio
                autoplay=""
                src="<?php echo base_url(); ?>assets/theme/video/martinaudio.mp3">
    
            </audio>
        </div>-->
    <div class="pull-right adbox" >
        <h3 class="color_light fw_light m_bottom_15 t_align_c appear-animation bounceInUp appear-animation-visible" data-appear-animation="bounceInUp" >Time To Suit Up!</h3>
        <p class="m_bottom_35 t_align_c color_light appear-animation bounceInUp appear-animation-visible" data-appear-animation="bounceInUp" data-appear-animation-delay="200" >
            <img src="<?php echo base_url(); ?>assets/images/zeganoffer.jpg" >
        </p>

    </div>
    <div class="r_slider">

        <ul>

            <li data-transition="fade" data-slotamount="10" class="mobilelook_slider">
                <img src="<?php echo base_url(); ?>assets/theme/slider2/b11.jpg" alt="" data-bgfit="cover" data-bgposition="center center">

            </li>
            <li data-transition="fade" data-slotamount="10" class="mobilelook_slider">
                <img src="<?php echo base_url(); ?>assets/theme/slider2/b10.jpg" alt="" data-bgfit="cover" data-bgposition="center center">

            </li>

            <li data-transition="fade" data-slotamount="10" class="mobilelook_slider">
                <img src="<?php echo base_url(); ?>assets/theme/slider2/b12.jpg" alt="" data-bgfit="cover" data-bgposition="center center">

            </li>




            <li data-transition="fade" data-slotamount="10" class="mobilelook_slider">
                <img src="<?php echo base_url(); ?>assets/theme/slider2/slider31.jpg" alt="" data-bgfit="cover" data-bgposition="center center">

            </li>


            <li data-transition="fade" data-slotamount="10" class="mobilelook_slider">
                <img src="<?php echo base_url(); ?>assets/theme/slider2/slider2.jpg" alt="" data-bgfit="cover" data-bgposition="center center">
            </li>

            <li data-transition="fade" data-slotamount="10" class="mobilelook_slider">
                <img src="<?php echo base_url(); ?>assets/theme/slider2/slider1.jpg" alt="" data-bgfit="cover" data-bgposition="center center">

            </li>
            <li data-transition="fade" data-slotamount="10" class="mobilelook_slider">
                <img src="<?php echo base_url(); ?>assets/theme/slider2/slider4.jpg" alt="" data-bgfit="cover" data-bgposition="center center">

            </li>
            <li data-transition="fade" data-slotamount="10" class="mobilelook_slider">
                <img src="<?php echo base_url(); ?>assets/theme/slider2/slider5.jpg" alt="" data-bgfit="cover" data-bgposition="center center">

            </li>
            <li data-transition="fade" data-slotamount="10" class="mobilelook_slider">
                <img src="<?php echo base_url(); ?>assets/theme/slider2/slider6.jpg" alt="" data-bgfit="cover" data-bgposition="center center">

            </li>



        </ul>


    </div>



</section>



<div class="modal fade" id="appointmentmodel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: red;border:none">
                <h3 class="fw_light booking_text" style="    padding: 10px 25px;text-align: center;color:white;width: 100%"> We are currently travelling to</h3>

            </div>
            <?php
            if ($applicable_class == 'onecountry') {
                ?>
                <div class="modal-body" style="padding: 0px;">
                    <img src="assets/images/country/<?php echo $countryimages[$appointment_current_country[0]['country']]; ?>" alt="">
                    <h2 class="fw_light color_black appointment_modal_text" >Now we are travelling to <b><?php echo $appointment_current_country[0]['country']; ?></b>.</h2>
                </div>
                <div class="modal-footer">
                    <h3 class="fw_light booking_text" style=""> Book A Fitting Now</h3>
                    <a href="<?php echo site_url("booking"); ?>" class="btn btn-danger">Book Now</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                <?php
            } else {
                ?>
                <div style="clear: both"></div>
                <div class="modal-body" style="padding: 0px;">
                    <?php
                    foreach ($appointment_current_country as $apkey => $apvalue) {

                        $fdata = date_format(date_create($apvalue['first_date']), "d F");
                        $ldata = date_format(date_create($apvalue['last_date']), "d F Y");
                        ?>
                        <div class="<?php echo $applicable_class; ?> country_block" style="background: url(assets/images/country/<?php echo $countryimages[$apvalue['country']]; ?>)">
                            <h2 class="fw_light color_black appointment_modal_texttwocontry text-center "><?php echo $apvalue['country']; ?>
                                <br/>
                                <p style="color: white;font-size: 15px;white-space: pre-line;line-height: 12px;">
                                    <?php echo date("D, d F Y"); ?><br/>
                                    (<?php
                                    echo $fdata . " - " . $ldata;
                                    ?>)
                                </p>
                            </h2>
                        </div>
                        <?php
                    }
                    ?>
                </div>


                <div class="modal-footer">
                    <div style=" clear: both;
                         padding-top: 15px;">
                        <h3 class="fw_light booking_text" style=""> Book A Fitting Now</h3>
                        <a href="<?php echo site_url("booking"); ?>" class="btn btn-danger">Book Now</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>

                <?php
            }
            ?>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<hr class="divider_type_2">


<!--benifits-->
<section class="section_offset">
    <div class="container t_align_c">
        <h3 class="color_dark fw_light m_bottom_35 heading_1" data-appear-animation="bounceInLeft">Pioneer of Bespoke Suits and Shirts Tailoring Industry in Hong Kong</h3>


        <article id="tab-1" data-appear-animation="fadeInUp" data-appear-animation-delay="450">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_20">

                    <!--carousel-->
                    <div class="owl-carousel m_bottom_15" data-plugin-options='{"loop":true, "autoPlay":true, "autoplayTimeout":1000,"transitionStyle" : "backSlide", "autoplay":true, "autoplay_timeout":1000}' data-nav="c_nav1_" >
                        <!--item-->

                        <!--item-->
                        <div>
                            <div>
                                <img src="<?php echo base_url(); ?>assets/images/benifits/bft3.jpg" alt="">

                            </div>
                        </div>
                        <!--item-->
                        <div>
                            <div>
                                <img src="<?php echo base_url(); ?>assets/images/benifits/bft4.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div>
                                <img src="<?php echo base_url(); ?>assets/images/benifits/bft5.jpg" alt="">
                            </div>
                        </div>
                        <div>

                            <div>
                                <img src="<?php echo base_url(); ?>assets/images/benifits/bft7.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div>
                                <img src="<?php echo base_url(); ?>assets/images/benifits/bft8.jpg" alt="">
                            </div>
                        </div>
                        <div>
                            <div>
                                <img src="<?php echo base_url(); ?>assets/images/benifits/bft9.jpg" alt="">
                            </div>
                        </div>



                    </div>
                    <div class="d_table w_full clients_nav">
                        <!--paginations container-->
                        <div class="d_table_cell half_column clients_pags_container v_align_m"></div>
                        <!--navigations-->
                        <div class="d_table_cell half_column t_align_r v_align_m">
                            <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover m_right_5 tr_all c_nav1_prev">
                                <i class="icon-left-open-big"></i>
                            </button>
                            <button class="circle icon_wrap_size_5 color_grey_light d_inline_m color_blue_hover tr_all c_nav1_next">
                                <i class="icon-right-open-big"></i>
                            </button>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6 col-md-6 t_align_l fw_light">

                    <p class="m_bottom_5" style="    margin-top: -10px;">
                        Welcome to Hong Kong Bespoke Tailors, “the one and only”, pioneers of custom tailoring industry with over 50 years experience. Tailoring is what we do better than anyone else in this industry. Our attention to details and workmanship separates us from our competitors. We believe in building personal relationship and stand by our product.                    </p>
                    <p class="m_bottom_5">
                        From our humble beginnings with a small store in TST, Kowloon, Hong Kong, we have now moved worldwide with overseas locations and our regular trips to major cities across the globe. Our areas of service include Australia, Belgium, Canada, New Zealand, Germany, Holland, Ireland, Japan, Switzerland, UK and USA.                    </p>
                    <p class="m_bottom_5">
                        Our clientele range from Lawyers, Doctors, Bankers, Celebrities and Politicians. We welcome you to our world of elegance where we dress you like royalty.
                    </p>

                    <p class="m_bottom_5">
                        Freshen up your wardrobe with our authentic bespoke tailored finest attire to suit your personality, profession and lifestyle.
                    </p>

                    <p class="m_bottom_5">
                        We expertise in Men and Women’s Custom Made Suits, Shirts, Pants, Sport Jackets, Blazers, Overcoats, Trench coats, and Tuxedos, in fabrics from world known mills.
                    </p>

                    <p class="m_bottom_5">
                        Don’t compromise for something that is off even by a bit, come to us, because we guarantee fit.
                    </p>
                    <p class="m_bottom_5 m_top_10">

                        <a href="<?php echo site_url("booking"); ?>" class="button_type_6 d_inline_b color_pink transparent r_corners vc_child tr_all add_to_cart_button"><span class="d_inline_m clerarfix"><i class="icon-pencil f_left m_right_10 fs_large"></i><span class="fs_medium">Book an Appointment Now!</span></span></a>

                    </p>
                </div>
        </article>


    </div>
</section>
<!--end of benifits-->

<hr class="divider_type_2">
<!--clients testimoniel-->
<section class="section_offset image_bg_2_client">
    <div class="container">
        <div class="row">



            <!--testimonials-->
            <section class="col-lg-6 col-md-6 m_bottom_20" data-appear-animation="fadeInUp">
                <h3 class="color_dark t_align_c m_bottom_15 fw_light">Testimonials</h3>
                <p class="m_bottom_35 t_align_c color_black">Our Valuable Customer's  Testimonials</p>
                <div class="owl-carousel" data-nav="t_nav_" data-plugin-options='{"loop":true, "autoPlay":true, "autoplayTimeout":2000,"autoHeight":true,"transitionStyle": "backSlide"}'>


                    <?php
                    $testimoni = [
                        array("name" => "Brian Stephenson", "country_city" => "Auckland, New Zealand", "review" => "The first of the shirts you are making for me arrived yesterday.  In accordance with your instructions I have washed it and ironed it and tried it on.  The fit is perfect.  It's a very cool and comfortable fabric to wear, so I am well pleased with it."),
                        array("name" => "D Giezekamp", "country_city" => "Sydney, Australia", "review" => "Shirts looks Awesome and fit beautifully... They arrived yesterday thank you again!! Feel like a new man!!"),
                        array("name" => "Greg Young", "country_city" => "Melbourne, Australia", "review" => "I have had the Suit pressed as well as the shirt. Both the Jacket and the Shirt are perfect, excellent fit."),
                        array("name" => "Dr. Gottschalk", "country_city" => "Houston, USA", "review" => "Terrific - thank you so much! I look forward to the arrival of my sport coat. The suit was excellent!"),
                        array("name" => "Matthew Bates ", "country_city" => "Melbourne, Australia", "review" => "My suit and shirt arrived and </br>I am extremely happy with the fit."),
                        array("name" => "Trevor Publicover", "country_city" => "Halifax, Canada", "review" => "Thanks for the email, yes I have tried the suit and it fits great!  I’m very happy."),
                        array("name" => "Sam Hussein", "country_city" => "London, UK", "review" => "I got the shirts today and I'm very happy with them. The quality of the fabric is amazing and the fit and finish is top class.<br/> You are now my best supplier and I will buy from you guys for a long time."),
                    ];
                    foreach ($testimoni as $key => $value) {
                        ?>


                        <!--item-->
                        <div>
                            <!--quote-->
                            <blockquote class="r_corners relative type_2 fs_large color_dark m_bottom_20">
                                <p class="m_bottom_15">
                                    <i style="    word-break: break-word;"><?php echo $value['review']; ?></i>
                                </p>
                            </blockquote>
                            <div class="d_table w_full">
                                <div class="d_table_cell">
                                    <!--author photo-->
                                    <div class="d_inline_m circle wrapper m_right_10">
                                        <img src="images/testimonial_img_1.jpg" alt="">
                                    </div>
                                    <!--author name-->
                                    <div class="d_inline_m">
                                        <b class="fs_large d_block color_dark">  <?php echo $value['name']; ?></b>
                                        <p class="fs_medium color_dark">  <?php echo $value['country_city']; ?></p>
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

<?php } ?>


                </div>
            </section>

            <!--our clients-->
            <section class="col-lg-6 col-md-6 t_sm_align_c" data-appear-animation="fadeInUp" data-appear-animation-delay="150">
                <!--carousel-->
                <div class="owl-carousel m_bottom_15" data-plugin-options='{"loop":true, "autoPlay":false, "nav":false, "autoplayTimeout":2000,"transitionStyle" : "backSlide"}' data-nav="c_nav_">
                    <!--item-->
                    <div>
                        <div class="row">
                            <div class="iframe_video_wrap">
                                <iframe src="https://www.youtube.com/embed/uU6hyrFo-QQ?enablejsapi=1&amp;html5=1&amp;hd=1&amp;wmode=opaque&amp;controls=1&amp;showinfo=0;rel=0"></iframe>
                            </div>
                            <div class="d_inline_m" style="margin-left: 20px;">
                                <b class="fs_large d_block color_dark">John Smith</b>
                                <p class="fs_medium color_dark"></p>
                                <p class="fs_medium color_dark">
                                <ul class="hr_list d_inline_b social_icons">
                                    <li class="m_right_8"><a href="#" class=" facebook circle icon_wrap_size_1 d_block"><i class="icon-facebook-1"></i></a></li>
                                    <li class="m_right_8"><a href="#" class=" twitter circle icon_wrap_size_1 d_block"><i class="icon-twitter-1"></i></a></li>
                                    <li class="m_right_8"><a href="#" class=" instagram circle icon_wrap_size_1 d_block"><i class="icon-instagramm"></i></a></li>

                                </ul>
                                </p>
                            </div>


                        </div>
                        <!--clients carousel nav-->

                    </div>

                </div>

            </section>


        </div>
    </div>
</section>
<!--end of client testimoniel-->


<!--relative class is required-->
<section class="section_offset relative wrapper">

    <div class="container">
        <h3 class="color_black fw_light t_align_c m_bottom_30" data-appear-animation="bounceInLeft">Our Luxurious Fabric Brands</h3>
        <div class="relative" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
            <div class="t_xs_align_c">
                <div class="owl-carousel clients brands with_video t_align_c" data-plugin-options='{"transitionStyle" : "backSlide"}' data-nav="c_nav_2">
                    <!--item-->
                    <div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered wrapper relative border_grey r_corners d_xs_block">
                                    <a href="#" class="d_block translucent1 tr_all wrapper r_corners">
                                        <img src="<?php echo base_url(); ?>assets/brand/vbc.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered  border_grey wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent1 tr_all wrapper r_corners">
                                        <img src="<?php echo base_url(); ?>assets/brand/hollandsherry.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 m_bottom_20">
                                <div class="clients_item db_xs_centered border_grey wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent1 tr_all wrapper r_corners">
                                        <img src="<?php echo base_url(); ?>assets/brand/loropiana.jpg" alt="">

                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered border_grey wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent1 tr_all wrapper r_corners">
                                        <img src="<?php echo base_url(); ?>assets/brand/reda.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered border_grey wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent1 tr_all wrapper r_corners">
                                        <img src="<?php echo base_url(); ?>assets/brand/thomasmason.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                <div class="clients_item db_xs_centered border_grey wrapper relative r_corners d_xs_block">
                                    <a href="#" class="d_block translucent1 tr_all wrapper r_corners">
                                        <img src="<?php echo base_url(); ?>assets/brand/zegna.jpg" alt="">
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


<!--<section class="section_offset image_bg_1">
    <div class="container">
        <h3 class="color_black fw_light m_bottom_15 t_align_c heading_3 appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft">What We Do</h3>
        <p class="m_bottom_40 t_align_c heading_4 appear-animation bounceInLeft appear-animation-visible color_black" data-appear-animation="bounceInLeft" data-appear-animation-delay="150" style="animation-delay: 150ms;">
            Four Simple Steps To Creating Your Personal Bespoke Suit
        </p>
        <div data-appear-animation="fadeInUp" data-appear-animation-delay="800" class="appear-animation color_black fadeInUp appear-animation-visible" style="animation-delay: 800ms;">
            first four services
            <div class="row m_bottom_30">
                service
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_black d_block n_sc_hover">Create your own style of suit</a>
                            <span class="d_block icon_wrap_size_3 circle color_black wrapper animation_fill">
                                <i class="icon-tools tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Choose a fabric and create your own personal style of suit.</p>

                    </figure>
                </div>
                service
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_black d_block n_sc_hover">Get Sized Up</a>
                            <span class="d_block icon_wrap_size_3 circle color_black wrapper animation_fill">
                                <i class="icon-tape tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Let us fit and measure you up.</p>

                    </figure>
                </div>
                service
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_black d_block n_sc_hover">Cut to Create</a>
                            <span class="d_block icon_wrap_size_3 circle color_black wrapper animation_fill">
                                <i class="icon-crop tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Our experienced craftsman will create your new masterpiece.</p>

                    </figure>
                </div>
                service
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_black d_block n_sc_hover">Delivery </a>
                            <span class="d_block icon_wrap_size_3 circle color_black wrapper animation_fill">
                                <i class="icon-truck tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Worldwide delivery with fit guarantee.</p>

                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>-->




<section class="section_offset image_bg_1">
    <div class="container">
        <h3 class="color_black fw_light m_bottom_15 t_align_c heading_3 appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft">The Process</h3>
        <p class="m_bottom_40 t_align_c heading_4 appear-animation bounceInLeft appear-animation-visible color_black" data-appear-animation="bounceInLeft" data-appear-animation-delay="150" style="animation-delay: 150ms;">
            Four Simple Steps To Creating Your Personal Bespoke Suit
        </p>
        <div class="relative">
            <div class="row">
                <div class="owl-carousel" data-plugin-options='{"singleItem":false,"itemsCustom":[[992,4],[768,3],[450,2],[10,1]]}' data-nav="ln_nav_">
                    <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
                        <!--image-->
                        <div class=" relative r_corners wrapper m_bottom_20 db_xs_centered">
                            <img src="<?php echo base_url(); ?>assets/images/process/fabrics.jpg" alt="" class="img-circle">
                            
                        </div>
                        <!--description-->
                        <figcaption>
                            <h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Fabric Selection</a></h6>
                      
                            <p class="m_bottom_12">Choose a fabric and create your own personal style of suit.</p>
                            <div class="clearfix">
                                <a href="<?php echo site_url("the-process");?>" class="color_purple color_pink_hover f_left d_block m_right_20 fw_light">
                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                        <i class="icon-angle-right"></i>
                                    </span>
                                    Read More
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                    
                    
                    
                    
                    <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
                        <!--image-->
                        <div class=" relative r_corners wrapper m_bottom_20 db_xs_centered">
                            <img src="<?php echo base_url(); ?>assets/images/process/fitting.jpg" alt="" class="img-circle">
                            
                        </div>
                        <!--description-->
                        <figcaption>
                            <h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">The Fitting</a></h6>
                      
                            <p class="m_bottom_12">Let us fit and measure you up.</p>
                            <div class="clearfix">
                                <a href="<?php echo site_url("the-process");?>" class="color_purple color_pink_hover f_left d_block m_right_20 fw_light">
                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                        <i class="icon-angle-right"></i>
                                    </span>
                                    Read More
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                    
                    
                    
                    
                    <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
                        <!--image-->
                        <div class=" relative r_corners wrapper m_bottom_20 db_xs_centered">
                            <img src="<?php echo base_url(); ?>assets/images/process/tailorprocess.jpg" alt="" class="img-circle">
                            
                        </div>
                        <!--description-->
                        <figcaption>
                            <h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">The Tailoring Process</a></h6>
                      
                            <p class="m_bottom_12">Our experienced craftsman will create your new masterpiece.</p>
                            <div class="clearfix">
                                <a href="<?php echo site_url("the-process");?>" class="color_purple color_pink_hover f_left d_block m_right_20 fw_light">
                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                        <i class="icon-angle-right"></i>
                                    </span>
                                    Read More
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                    
                    
                    
                    
                    <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
                        <!--image-->
                        <div class=" relative r_corners wrapper m_bottom_20 db_xs_centered">
                            <img src="<?php echo base_url(); ?>assets/images/process/delivery.jpg" alt="" class="img-circle">
                            
                        </div>
                        <!--description-->
                        <figcaption>
                            <h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">The Delivery</a></h6>
                      
                            <p class="m_bottom_12">Worldwide delivery with fit guarantee.</p>
                            <div class="clearfix">
                                <a href="<?php echo site_url("the-process");?>" class="color_purple color_pink_hover f_left d_block m_right_20 fw_light">
                                    <span class="d_inline_m m_right_5 icon_wrap_size_0 circle color_grey_light tr_all">
                                        <i class="icon-angle-right"></i>
                                    </span>
                                    Read More
                                </a>
                            </div>
                        </figcaption>
                    </figure>
                    
                  
                </div>
            </div>
            <!--carousel nav-->
<!--            <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover ln_nav_prev d_md_none" data-appear-animation="fadeIn">
                <i class="icon-left-open-big"></i>
            </button>
            <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover ln_nav_next d_md_none" data-appear-animation="fadeIn">
                <i class="icon-right-open-big"></i>
            </button>-->
        </div>
    </div>
</section>




<!--<section class="section_offset image_bg_1">
    <div class="container">
        <h3 class="color_black fw_light m_bottom_15 t_align_c heading_3 appear-animation bounceInLeft appear-animation-visible" data-appear-animation="bounceInLeft">The Process</h3>
        <p class="m_bottom_40 t_align_c heading_4 appear-animation bounceInLeft appear-animation-visible color_black" data-appear-animation="bounceInLeft" data-appear-animation-delay="150" style="animation-delay: 150ms;">
            Four Simple Steps To Creating Your Personal Bespoke Suit
        </p>
        <div data-appear-animation="fadeInUp" data-appear-animation-delay="800" class="appear-animation color_black fadeInUp appear-animation-visible" style="animation-delay: 800ms;">
            first four services
            <div class="row m_bottom_30">
                service
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_black d_block n_sc_hover">Create your own style of suit</a>
                            <span class="d_block icon_wrap_size_3 circle color_black wrapper animation_fill">
                                <i class="icon-tools tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Choose a fabric and create your own personal style of suit.</p>

                    </figure>
                </div>
                service
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_black d_block n_sc_hover">Get Sized Up</a>
                            <span class="d_block icon_wrap_size_3 circle color_black wrapper animation_fill">
                                <i class="icon-tape tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Let us fit and measure you up.</p>

                    </figure>
                </div>
                service
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_black d_block n_sc_hover">Cut to Create</a>
                            <span class="d_block icon_wrap_size_3 circle color_black wrapper animation_fill">
                                <i class="icon-crop tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Our experienced craftsman will create your new masterpiece.</p>

                    </figure>
                </div>
                service
                <div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
                    <figure class="item_services">
                        <h6 class="m_bottom_5 relative">
                            <a href="#" class="color_black d_block n_sc_hover">Delivery </a>
                            <span class="d_block icon_wrap_size_3 circle color_black wrapper animation_fill">
                                <i class="icon-truck tr_all"></i>
                            </span>
                        </h6>
                        <p class="fs_medium m_bottom_10">Worldwide delivery with fit guarantee.</p>

                    </figure>
                </div>
            </div>

        </div>
    </div>
</section>-->



<!--benifits-->
<section class="section_offset" style='background: #e8f0f6;'>
    <div class="container t_align_c">


        <article >
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_20">

                    <img src="<?php echo base_url(); ?>assets/images/referal.png" alt="">



                </div>
                <div class="col-lg-6 col-md-6 t_align_l fw_light">
                    <h3 class="color_dark fw_light heading_1" data-appear-animation="bounceInLeft">Referral Program </h3>
                    <p class='m_bottom_20 '>Earn Rewards By Recommending Us To Your Friends</p>
                    <form method="post" action="#">
                        <ul class="fw_light">
                            <li class="m_bottom_10 m_xs_bottom_15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom_select">
                                            <input type="text" name="friend_name" placeholder="Friend’s Name" class="r_corners bg_light w_full"   value="" required="">

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="custom_select">
                                            <input type="email" name="friend_email" placeholder="Friend’s Email " class="r_corners bg_light w_full"   value="" required="">

                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="m_bottom_10 m_xs_bottom_15">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="custom_select"> 
                                            <input type="text" name="name" placeholder="Your Name" class="r_corners bg_light w_full"  value="" required="">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="custom_select">
                                            <input type="email" name="email" placeholder="Your Email" class="r_corners bg_light w_full"   value="" required="">

                                        </div>

                                    </div>

                                </div>

                            </li>

                        </ul>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="row" style="width: 200px;font-size: 17px;line-height: 37px;margin-top: 10px;">
                                    <div class="col-md-2">
<?php echo $rand_1 = rand(0, 10); ?>
                                        <input type="hidden" class="form-control" name="rand_1" value="<?php echo $rand_1; ?>" />
                                    </div>
                                    <div class="col-md-2">+</div>
                                    <div class="col-md-2">
<?php echo $rand_2 = rand(0, 10); ?>
                                        <input type="hidden" class="form-control" name="rand_2"  value="<?php echo $rand_2; ?>"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" class="form-control" name="total"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8" style="    margin-top: 7px;
                                 padding-left: 20px;">
                                <button name="submit" type="submit" class="button_type_3 color_dark r_corners tt_uppercase fs_medium tr_all f_left m_right_10 m_md_bottom_10">Submit</button>

                            </div>
                        </div>

                    </form>

                </div>
        </article>


    </div>
</section>
<!--end of benifits-->


<section class="section_offset relative bg_light_2">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_15 t_align_c" data-appear-animation="bounceInLeft">Our Ongoing Trunk Shows</h3>
        <!--projects carousel-->
        <div class="row">
            <div class="owl-carousel" data-plugin-options='{"loop":true, "autoPlay":true, "autoplayTimeout":1000, "singleItem":false,"itemsCustom" : [[992,3],[768,2],[100,1]]}' data-nav="fp_nav_">
                <!--project-->
<?php
$countrydata = $countrylist;
foreach ($countrydata as $key => $value) {
    ?>
                    <figure class="t_xs_align_c col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp" data-appear-animation-delay="800">
                        <!--image container-->
                        <a href="<?php echo site_url("booking"); ?>">
                            <div class="relative r_corners wrapper m_bottom_20 m_xs_bottom_0 d_xs_inline_b d_mxs_block" style="    background: #000;">
                                <img src="<?php echo base_url(); ?>assets/images/country/<?php echo $value; ?>" alt="">
                                <!--                            <div class="popup_buttons tr_all_long">
                                                                <a href="<?php echo base_url(); ?>assets/images/country/<?php echo $value; ?>.jpg" data-group="featured_projects" data-title="Nam elit agna, endrerit sit" class="jackbox icon_wrap_size_3 color_light n_sc_hover d_block circle f_left">
                                                                    <i class="icon-plus"></i>
                                                                </a>
                                                            </div>-->
                                <h3 style="font-size:18px;text-align: center;padding: 10px;color:white;"><?php echo $key; ?></h3>
                            </div>
                        </a>
                    </figure>
    <?php
}
?>
            </div>
        </div>
    </div>
    <!--carousel nav-->
    <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_prev nav_type_2 d_md_none" data-appear-animation="fadeIn">
        <i class="icon-left-open-big"></i>
    </button>
    <button class="icon_wrap_size_4 circle color_grey_light tr_all color_blue_hover fp_nav_next nav_type_2 d_md_none" data-appear-animation="fadeIn">
        <i class="icon-right-open-big"></i>
    </button>
</section>


<script>
    $(function () {
        console.log("sdfdsf")
        $.ajax({
            url: 'https://api.ipify.org?format=jsonp&callback=DisplayIP',

            success: function (r) {
                console.log(r)
            }
        });


        setTimeout(function () {
            $.get('https://api.ipify.org?format=jsonp&callback=DisplayIP', function (data) {
                alert(data)

            });
        }, 1000)

    })
</script>


<?php
$this->load->view('layout/footer');
?>