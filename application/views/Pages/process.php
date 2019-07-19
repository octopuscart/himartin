<?php
$this->load->view('layout/header');
?>

<style>
    figcaption{
        float: left;
        margin-top: 58px;
        padding-left: 30px;
    }
    .captionimage{
        float: left;
    }

    .captionimage_right{
        float: right;
    }

    figcaption.rightpost {
        float: right;
        margin-top: 58px;
        padding-right: 30px;
    }
    
    .img-circle{
        height: 200px;
    }
</style>




<section class="section_offset image_bg_1">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_15 t_align_c heading_3">THE PROCESS </h3>
        <div class="row">
            <!--accordion-->
            <div class="m_bottom_40 m_xs_bottom_30">
                <div class="relative">
                    <div class="row">
                        <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
                            <!--image-->
                            <div class="captionimage relative r_corners wrapper m_bottom_20 db_xs_centered">
                                <img src="<?php echo base_url(); ?>assets/images/process/fabrics.jpg" alt="" class="img-circle">

                            </div>
                            <!--description-->
                            <figcaption>
                                <h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">Fabric Selection</a></h6>

                                <p class="m_bottom_12">Choose a fabric and create your own personal style of suit.</p>
                              
                            </figcaption>
                        </figure>

                    



                        <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
                            <!--image-->
                            <div class="captionimage_right relative r_corners wrapper m_bottom_20 db_xs_centered">
                                <img src="<?php echo base_url(); ?>assets/images/process/fitting.jpg" alt="" class="img-circle">

                            </div>
                            <!--description-->
                            <figcaption class="rightpost">
                                <h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">The Fitting</a></h6>

                                <p class="m_bottom_12">Let us fit and measure you up.</p>
                                
                            </figcaption>
                        </figure>




                        <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
                            <!--image-->
                            <div class="captionimage relative r_corners wrapper m_bottom_20 db_xs_centered">
                                <img src="<?php echo base_url(); ?>assets/images/process/tailorprocess.jpg" alt="" class="img-circle">

                            </div>
                            <!--description-->
                            <figcaption>
                                <h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">The Tailoring Process</a></h6>

                                <p class="m_bottom_12">Our experienced craftsman will create your new masterpiece.</p>
                                
                            </figcaption>
                        </figure>




                        <figure class="col-lg-12 col-md-12 col-sm-12" data-appear-animation="fadeInUp">
                            <!--image-->
                            <div class="captionimage_right relative r_corners wrapper m_bottom_20 db_xs_centered">
                                <img src="<?php echo base_url(); ?>assets/images/process/delivery.jpg" alt="" class="img-circle">

                            </div>
                            <!--description-->
                            <figcaption class="rightpost">
                                <h6 class="lh_large m_bottom_3"><a href="#" class="color_dark tr_all">The Delivery</a></h6>

                                <p class="m_bottom_12">Worldwide delivery with fit guarantee.</p>
                                
                            </figcaption>
                        </figure>


                    </div>

                </div>
            </div>
        </div>
    </div>
</section>



<?php
$this->load->view('layout/footer');
?>