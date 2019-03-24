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
<section class="page_title translucent_bg_color_scheme t_align_c image_bg_4" style="margin-top: 0px;    padding: 50px 0 50px;">
    <div class="container">
        <h1 class="color_light fw_light m_bottom_5">Make A Booking</h1>

    </div>
</section>

<div ng-controller="bookingController">



    <section class="section_offset">
        <div class="container t_align_c">


            <article id="tab-1" data-appear-animation="fadeInUp" data-appear-animation-delay="450">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_20">

                        <h3 class="color_dark fw_light m_bottom_35 heading_1" data-appear-animation="bounceInLeft">
                            How It Works
                        </h3>
                        <div class="t_align_l fw_light">
                            <ul class="vr_list_type_3 counter color_dark fw_light">
                                <li class="m_bottom_12 counter_inc">Dummy text for test.</li>
                                <li class="m_bottom_12 counter_inc">Dummy text for test.</li>
                                <li class="m_bottom_12 counter_inc">Dummy text for test.</li>
                            </ul> </div>
                    </div>
                    <div class="col-lg-6 col-md-6 t_align_l fw_light appointment">
                        <form method="post" action="#">
                            <ul class="fw_light">

                                <li class="m_bottom_10 m_xs_bottom_15">
                                    <div class="custom_select">
                                        <select name="country" class="r_corners d_inline_m w_sm_full"  ng-model="appointmentSelected.country"  ng-change="selectCityByCountry(appointmentSelected.country)">
                                            <option value="{{country.country}}" ng-repeat="country in appointmentData.country">{{country.country}}</option>                                        
                                        </select>
                                    </div>
                                </li>

                                <li class="m_bottom_10 m_xs_bottom_15">
                                    <div class="custom_select">
                                        <select class="r_corners d_inline_m w_sm_full" name="city_state"  ng-model="appointmentSelected.city_state" ng-change="selectDateByCity(appointmentSelected.city_state)">
                                            <option value="{{city_state.city_state}}" ng-repeat="city_state in appointmentSelected.city_state_list">{{city_state.city_days}}</option>                                        
                                        </select>
                                    </div>
                                    <input type="hidden" name="country" ng-model="appointmentSelected.country" value="{{appointmentSelected.country}}">
                                    <input type="hidden" name="city_state" ng-model="appointmentSelected.city_state" value="{{appointmentSelected.city_state}}">
                                    <input type="hidden" name="city_days" ng-model="appointmentData.city_hotel[appointmentSelected.city_state].days" value="{{appointmentData.city_hotel[appointmentSelected.city_state].days}}">
                                    <input type="hidden" name="hotel" ng-model="appointmentData.city_hotel[appointmentSelected.city_state].hotel" value="{{appointmentData.city_hotel[appointmentSelected.city_state].hotel}}">
                                    <input type="hidden" name="address" ng-model="appointmentData.city_hotel[appointmentSelected.city_state].address" value="{{appointmentData.city_hotel[appointmentSelected.city_state].address}}">
                                    <input type="hidden" name="select_date" ng-model="appointmentSelected.date" value="{{appointmentSelected.date}}">
                                    <input type="hidden" name="select_time" ng-model="appointmentSelected.date" value="{{appointmentSelected.time}}">

                                </li>




                                <div class="row" style="margin: 10px 0px;">
                                    <div class="col-md-6">
                                        <b>{{appointmentData.city_hotel[appointmentSelected.city_state].hotel}}</b>
                                        <p class="hotel_address"></p>
                                    </div>
                                    <div class="col-md-6 hotelmap">
                                    </div>
                                </div>

                                <li class="m_bottom_10 m_xs_bottom_15">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="custom_select">
                                                <select class="r_corners d_inline_m w_sm_full"  ng-model="appointmentSelected.date" ng-change="timeSlotByDate()">
                                                    <option value="{{cdate.date}}" ng-repeat="cdate in appointmentData.city_hotel[appointmentSelected.city_state].dates">{{cdate.date}}</option>                                        
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="custom_select">
                                                <select class="r_corners d_inline_m w_sm_full"  ng-model="appointmentSelected.time" >
                                                    <option value="{{time}}" ng-repeat="time in appointmentSelected.timeslot">{{time}}</option>                                        
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li class="m_bottom_10 m_xs_bottom_15">
                                    <input type="text" name="full_name" placeholder="Full Name" class="r_corners w_full"  ng-model="appointmentSelected.full_name" value="{{appointmentSelected.full_name}}" required="">
                                </li>
                                <li class="m_bottom_10 m_xs_bottom_15">
                                    <input type="text" name="email" placeholder="Email" class="r_corners w_full"   ng-model="appointmentSelected.email" value="{{appointmentSelected.email}}"  required="">
                                </li>
                                <li class="m_bottom_10 m_xs_bottom_15">
                                    <input type="text" name="contact_no" placeholder="Contact No." class="r_corners w_full"   ng-model="appointmentSelected.contact_no" value="{{appointmentSelected.contact_no}}"  required="">
                                </li>
                                <li class="m_bottom_10 m_xs_bottom_15">
                                    <textarea name="remark" placeholder="Remark" class="r_corners w_full"  style="height: 85px;"  ng-model="appointmentSelected.remark" value="{{appointmentSelected.remark}}"  required=""></textarea>
                                </li>
                            </ul>
                            <button name="submit" type="submit" class="button_type_3 color_dark r_corners tt_uppercase fs_medium tr_all f_left m_right_10 m_md_bottom_10">Submit</button>
                        </form>
                    </div>
                </div>
            </article>


        </div>
    </section>


</div>

<!--angular controllers-->
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

<script>

    App.controller('bookingController', function ($scope, $http, $timeout, $interval) {

        $scope.timeSlotByDate = function () {
            var from_time = $scope.appointmentData.city_hotel[$scope.appointmentSelected.city_state].dates[0].from_time;
            var to_time = $scope.appointmentData.city_hotel[$scope.appointmentSelected.city_state].dates[0].to_time;

            var dates = $scope.appointmentData.city_hotel[$scope.appointmentSelected.city_state].dates;
            console.log(dates);
            $scope.datedict = {};
            for (key in dates) {
                var td = dates[key];
                $scope.datedict[td.date] = td;
            }
            var datetimeslot = $scope.datedict[$scope.appointmentSelected.date]

            var from_time = datetimeslot.from_time;
            var to_time = datetimeslot.to_time;
            console.log(from_time, to_time);
            $scope.appointmentSelected.from_time = from_time;
            $scope.appointmentSelected.to_time = to_time;
            var findex = $scope.appointmentData.timeslot.indexOf(from_time);
            var tindex = $scope.appointmentData.timeslot.indexOf(to_time);
            var timeslotdata = $scope.appointmentData.timeslot;
            var timeslotselect = timeslotdata.slice(findex, tindex + 1);

            $scope.appointmentSelected.timeslot = timeslotselect;

            $timeout(function () {
                $scope.appointmentSelected.time = timeslotselect[0];
            }, 200)

        }

        $scope.selectDateByCity = function (city_state) {
            $timeout(function () {
                $scope.appointmentSelected.date = $scope.appointmentData.city_hotel[$scope.appointmentSelected.city_state].dates[0].date;
                $(".hotel_address").html($scope.appointmentData.city_hotel[$scope.appointmentSelected.city_state].address);
                var hotel_address = ($scope.appointmentData.city_hotel[$scope.appointmentSelected.city_state].hotel) + "+" + $scope.appointmentSelected.city_state
                var iframdata = "<iframe  frameborder='0' scrolling='no'  marginheight='0' marginwidth='0'  height='100px' width='100%'  src='https://maps.google.com/?q=" + hotel_address + "&output=embed'></iframe>";
                $(".hotelmap").html(iframdata);
                $scope.timeSlotByDate();
            }, 100)
        }

        $scope.selectCityByCountry = function (country) {
            $scope.appointmentSelected.city_state_list = $scope.appointmentData.city_state[country];
            $(".hotel_address").html("");
            $timeout(function () {
                $scope.appointmentSelected.city_state = $scope.appointmentData.city_state[country][0].city_state;
                $scope.appointmentSelected.city_days = $scope.appointmentData.city_state[country][0].city_days;
                $scope.selectDateByCity($scope.appointmentSelected.city_state);

            }, 100)
        }

        var url = baseurl + "Api/getAppointment";
        $scope.appointmentData = {
            'country': 'Australia',
            'city_state_list': [],
            'city_state': [],
            'city_hotel': [],
            'hotel': '',
            'addresss': '',
            'timeslot': [
                "08:00 AM", "08:30 AM",
                "09:00 AM", "09:30 AM",
                "10:00 AM", "10:30 AM",
                "11:00 AM", "11:30 AM",
                "12:00 PM", "12:30 PM",
                "01:00 PM", "01:30 PM",
                "02:00 PM", "02:30 PM",
                "03:00 PM", "03:30 PM",
                "04:00 PM", "04:30 PM",
                "05:00 PM", "05:30 PM",
                "06:00 PM", "06:30 PM",
                "07:00 PM", "07:30 PM",
                "08:00 PM", "08:30 PM",
            ]
        };
        $scope.appointmentSelected = {
            'country': '',
            'city_state_list': [],
            'city_state': '',
            'city_days': '',
            'hotel': '',
            'date': '',
            'time': '',
            'timeslot': [],
            'addresss': '',
            'full_name': '',
            'email': '',
            'contact_no': '',
            'remark': '',
        };
        $http.get(url).then(function (rdata) {
            var appointmentdata = rdata.data;
            $scope.appointmentData.country = appointmentdata.country_data;
            $scope.appointmentData.city_state = appointmentdata.country_city;
            $scope.appointmentData.city_hotel = appointmentdata.city_hotel_data;

            console.log($scope.appointmentData.city_hotel);
            $timeout(function () {
                $scope.appointmentSelected.country = appointmentdata.country_data[0].country;
                $scope.selectCityByCountry($scope.appointmentSelected.country);
            }, 500)



        }, function (error) {

        })


    })

<?php
if ($sentemail == "1") {
    ?>
        swal({
            title: 'Appointment Booked',
            type: 'success',
            html: "<?php echo $message; ?>",
            timer: 5000,
        }).then(
                function () {
                    window.location = "<?php echo site_url("booking"); ?>";
                },
                function (dismiss) {
                    window.location = "<?php echo site_url("booking"); ?>";
                }
        )
    <?php
}
?>


</script>



<?php
$this->load->view('layout/footer');
?>