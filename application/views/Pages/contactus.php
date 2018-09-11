<?php
$this->load->view('layout/header');
?>

<!--banner-->
<div class="banner1" style='background: url("<?php echo base_url(); ?>assets/theme/images/bcontact.jpg");background-size: cover;'>
    <div class="container">
        <h3><a href="/">Home</a> / <span>Contact Us</span></h3>
    </div>
</div>
<!--banner-->
<!--content-->
<div class="content">
    <!--contact-->
    <div class="mail-w3ls">
        <div class="container">
          
            <div class="mail-grids">
                <div class="mail-top">
                    <div class="col-md-4 mail-grid">
                        <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                        <h5>Address</h5>
                        <p>Shop# 13, G/F, Wing Lee Building, 27-33 Kimberley Rd, Tsim Sha Tsui, Hong Kong</p>
                    </div>
                    <div class="col-md-4 mail-grid">
                        <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                        <h5>Phone</h5>
                        <p>Telephone:  +852 6626 4429</p>
                    </div>
                    <div class="col-md-4 mail-grid">
                        <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                        <h5>E-mail</h5>
                        <p>E-mail:<a href="mailto:john@perfectfashion.com.hk"> john@perfectfashion.com.hk</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="map-w3">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14765.600811344413!2d114.1734977883891!3d22.30069943003076!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20801908428b9252!2sJohn&#39;s+Perfect+Fashion!5e0!3m2!1sen!2sin!4v1536114908053" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>                </div>
                <div class="mail-bottom">
                    <h4>Get In Touch With Us</h4>
                    <form action="#" method="post">
                        <input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Name';
                                }" required="">
                        <input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Email';
                                }" required="">
                        <input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Telephone';
                                }" required="">
                        <textarea  onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Message...';
                                }" required="">Message...</textarea>
                        <input type="submit" value="Submit" >
                        <input type="reset" value="Clear" >

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--contact-->
</div>
<!--content-->

<?php
$this->load->view('layout/footer');
?>