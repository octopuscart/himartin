<?php
$this->load->view('layout/header');
$prefixshopappointment = array('Sun' => [9, 19], 'Other' => [9, 21]);
$cdateshort = date("D");
$timingarray = [];
if (isset($prefixshopappointment[$cdateshort])) {
    $timingarray = $prefixshopappointment[$cdateshort];
} else {
    $timingarray = $prefixshopappointment['Other'];
}
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
    #ui-datepicker-div{
        z-index: 200000!important;
    }
    .timeing_open {
        width: 70px;
        float: left;
    }
</style>
<section class="page_title_1 bg_light_2 t_align_c relative wrapper" style="margin-top: 0px;">
    <div class="container">
        <h3 class="color_dark fw_light m_bottom_5">
            Make A Booking
        </h3>

    </div>
</section>

<div ng-controller="bookingController">
    <section class="section_offset">
        <div class="container t_align_c">


            <article id="tab-1" data-appear-animation="fadeInUp" data-appear-animation-delay="450">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_20">

                        <h3 class="color_dark fw_light m_bottom_35 heading_1" data-appear-animation="bounceInLeft">
                            Informations
                        </h3>
                        <div class="t_align_l fw_light">
                            <p class="m_bottom_15">Donec porta diam eu massa. Quisque diam lorem, interdum vitae, dapibus ac, scelerisque vitae, pede. Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum. Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipis. </p>
                            <p class="m_bottom_15">Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                            <p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6 t_align_l fw_light">
                        <ul class="fw_light">
                            <li class="m_bottom_10 m_xs_bottom_15">
                                <div class="custom_select">
                                    <div class="select_title r_corners fw_light color_grey">Select Country</div>
                                    <ul class="select_list r_corners wrapper shadow_1 bg_light tr_all"></ul>
                                    <select class="d_none" form="form_1">
                                        <option value="Option 1">Option 1</option>                                        
                                    </select>
                                </div>
                            </li>
                            <li class="m_bottom_10 m_xs_bottom_15">
                                <div class="custom_select">
                                    <div class="select_title r_corners fw_light color_grey">Select City</div>
                                    <ul class="select_list r_corners wrapper shadow_1 bg_light tr_all"></ul>
                                    <select class="d_none" form="form_1">
                                        <option value="Option 1">Option 1</option>                                        
                                    </select>
                                </div>
                            </li>
                            <li class="m_bottom_10 m_xs_bottom_15">
                                <div class="custom_select">
                                    <div class="select_title r_corners fw_light color_grey">Select Hotel</div>
                                    <ul class="select_list r_corners wrapper shadow_1 bg_light tr_all"></ul>
                                    <select class="d_none" form="form_1">
                                        <option value="Option 1">Option 1</option>                                        
                                    </select>
                                </div>
                            </li>
                            <li class="m_bottom_10 m_xs_bottom_15">
                                <div class="custom_select">
                                    <div class="select_title r_corners fw_light color_grey">Pick Date</div>
                                    <ul class="select_list r_corners wrapper shadow_1 bg_light tr_all"></ul>
                                    <select class="d_none" form="form_1">
                                        <option value="Option 1">Option 1</option>                                        
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>


        </div>
    </section>


</div>

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>
<script>
    $(document).ready(function () {
        $("#appintmentDate").datepicker({
            minDate: 0,
            dateFormat: "yy-mm-dd"
        });
        $.datepicker.parseDate("yy-mm-dd", "<?php echo date('Y-m-d'); ?>");
        $('#dateselection').on('change', function (e) {
            var $optionSelected = $("option:selected", this);
            console.log(this);
            $optionSelected.tab('show')
        });
    });

</script>

<?php
$this->load->view('layout/footer');
?>