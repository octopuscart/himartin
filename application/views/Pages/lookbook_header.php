
<!--content-->
<section class="section_offset lookbook">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="<?php echo $active_block=='mens'?'active':''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-6 m_bottom_50 m_xs_bottom_30">
                    <a href="#mens_tab" aria-controls="mens_tab" role="tab" data-toggle="tab">
                        <article>
                            <!--post content-->
                            <figure>
                                <div class="thumbnail lookheaderimage" style="    border: 0;">
                                    <img src="<?php echo base_url(); ?>assets/lookbook/mens5.jpg" alt="" >
                                </div>

                            </figure>
                        </article>
                    </a></li>
                <li role="presentation" class=" <?php echo $active_block=='womens'?'active':''; ?> col-lg-6 col-md-6 col-sm-6 col-xs-6 m_bottom_50 m_xs_bottom_30">
                    <a href="#womens_tab"  aria-controls="womens_tab" role="tab" data-toggle="tab">
                        <article>
                            <!--post content-->
                            <figure>
                                <div class="thumbnail lookheaderimage" style="    border: 0;">
                                    <img src="<?php echo base_url(); ?>assets/lookbook/womens5.jpg" alt="" >
                                </div>

                            </figure>
                        </article>
                    </a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane <?php echo $active_block=='mens'?'active':''; ?>" id="mens_tab">

                    <div class="">
                        <h3 class="color_black fw_light t_align_c m_bottom_30" data-appear-animation="bounceInLeft">Men's</h3>
                        <div class="relative" data-appear-animation="bounceInLeft" data-appear-animation-delay="800">
                            <div class="t_xs_align_c">
                                <div class="owl-carousel" data-nav="fp_nav_" data-plugin-options='{"itemsCustom" : [[992,5],[768,3],[100,3]], "singleItem" : false}'>                                        <!--item-->

                                    <?php
                                    for ($i = 0; $i < 10; $i++) {
                                        ?>
                                        <div class="col-xs-12 m_bottom_20">
                                            <div class="clients_item db_xs_centered wrapper relative border_grey r_corners d_xs_block">
                                                <a href="<?php echo site_url("lookbook/mens/customSuits")?>" class="d_block translucent1 tr_all wrapper r_corners">
                                                    <img src="<?php echo base_url(); ?>assets/lookbook/mens2.png" alt="">
                                                    <p style="color:black;text-align: center">Suits</p>
                                                </a>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    ?>


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
                </div>
                <div role="tabpanel" class="tab-pane <?php echo $active_block=='womens'?'active':''; ?>" id="womens_tab">

                    <div class="">
                        <h3 class="color_black fw_light t_align_c m_bottom_30" data-appear-animation="bounceInLeft">Women's</h3>
                        <div class="relative" data-appear-animation="bounceInLeft" data-appear-animation-delay="800">
                            <div class="t_xs_align_c">
                                <div class="owl-carousel" data-nav="fp_nav_" data-plugin-options='{"itemsCustom" : [[992,5],[768,3],[100,3]], "singleItem" : false}'>                                        <!--item-->

                                    <?php
                                    for ($i = 0; $i < 10; $i++) {
                                        ?>
                                        <div class="col-xs-12 m_bottom_20">
                                            <div class="clients_item db_xs_centered wrapper relative border_grey r_corners d_xs_block">
                                                <a href="<?php echo site_url("lookbook/womens/customSuits")?>" class="d_block translucent1 tr_all wrapper r_corners">
                                                    <img src="<?php echo base_url(); ?>assets/lookbook/womens2.png" alt="">
                                                    <p style="color:black;text-align: center">Suits</p>
                                                </a>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                    ?>


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
                </div>
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>



</section>
