<?php
$this->load->view('layout/header');

$clients = [
    
    array(
        "style_no" => "902",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/2.jpg",
    ),
    array(
        "style_no" => "903",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/3.jpg",
    ),
    array(
        "style_no" => "904",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/4.jpg",
    ),
    array(
        "style_no" => "905",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/5.jpg",
    ),
    array(
        "style_no" => "906",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/1.jpg",
    ),
    array(
        "style_no" => "907",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/2.jpg",
    ),
    array(
        "style_no" => "908",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/3.jpg",
    ),
    array(
        "style_no" => "909",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/4.jpg",
    ),
    array(
        "style_no" => "910",
        "title" => "Title Of Image",
        "short_description" => "Short Description Of Image",
        "image" => "$active_block/5.jpg",
    )
];
?>

<section class="page_title translucent_bg_color_dark image_fixed t_align_c relative wrapper" style="margin-top: 0px;padding: 0px;">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">Look Book</h1>
        <!--breadcrumbs-->

    </div>
</section>



<?php
$this->load->view('Pages/lookbook_header');
?>


<hr/>

<div class="section_offset">
    <div class="container">
        <div class="content">
            <!--contact-->
            <!--clients area-->
            <div class="latest-w3">
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/demo.css" />
                <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/GridGallery/css/component.css" />

                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/modernizr.custom.js"></script>

                <div id="grid-gallery" class="grid-gallery" style="    margin-top: 2em;">
                    <section class="grid-wrap">
                        <ul class="grid">
                            <li class="grid-sizer"></li><!-- for Masonry column width -->

                            <?php foreach ($style_array as $key => $value) {
                                ?>
                                <li style="    padding: 10px;">
                                    <div class="panel panel-default" style="border:none;margin: 0px;">
                                        <div class="panel-body" style="    padding: 5px;">
                                            <div class="thumbnail lookbook_thumb" >
                                                <img src="<?php echo base_url(); ?>assets/lookbook/<?php echo $value['image']; ?>" alt="img01" style=""/>
                                                <p class="lookbook_subtitle">
                                                 Style#: <?php echo $value['style_no']; ?>
                                                </p>
                                                <h3 class="lookbook_title"><?php echo $value['title']; ?></h3>
                                                <p class="lookbook_subtitle">
                                                    <?php echo $value['short_description']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>


                        </ul>
                        <div style="clear:both"></div>
                    </section><!-- // grid-wrap -->
                    <section class="slideshow" >
                        <ul>

                             <?php foreach ($style_array as $key => $value) {
                                ?>
                                <li>
                                    <div class="panel panel-default" style="background: none;border:none;">
                                        <div class="panel-body" style="background: white;">
                                            <div class="thumbnail " style="background: none;border:none">
                                                <img src="<?php echo base_url(); ?>assets/lookbook/<?php echo $value['image']; ?>" alt="img01"  style="    height:450px;
                                                     "/>
                                                <p class="lookbook_subtitle">
                                                 Style#: <?php echo $value['style_no']; ?>
                                                </p>
                                                <h3 class="lookbook_title"><?php echo $value['title']; ?></h3>
                                                <p class="lookbook_subtitle">
                                                    <?php echo $value['short_description']; ?>
                                                </p>
                                                <br/>
                                                <center>
                                                <button class="btn btn-default color_black btn-sm ">Add To Enquiry</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                            }
                            ?>

                        </ul>

                        <nav>
                            <span class="icon nav-prev"></span>
                            <span class="icon nav-next"></span>
                            <span class="icon nav-close"></span>
                        </nav>

                    </section><!-- // slideshow -->
                </div><!-- // grid-gallery -->


                <!-- // grid-gallery -->
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/imagesloaded.pkgd.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/masonry.pkgd.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/classie.js"></script>
                <script src="<?php echo base_url(); ?>assets/theme/GridGallery/js/cbpGridGallery.js"></script>
                <script>
                    new CBPGridGallery(document.getElementById('grid-gallery'));
                </script>
            </div>
            <!--end of client area-->
            <!--contact-->
        </div>
    </div>
</div>

<?php
$this->load->view('layout/footer');
?>