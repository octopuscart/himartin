<!---footer--->
<div class="footer-w3l">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid">
                <h4>About </h4>
                <p>
                    Hong Kong has a worldwide reputation as being a centre of world-class tailoring. Perfect Fashion is one of the leading tailoring companies in Hong Kong, and our fashion consultants will assist you in choosing your style.
                </p>
                <div class="social-icon">
                    <a href="https://www.facebook.com/Johns-Perfect-Fashion-1886520941596824/"><i class="icon"></i></a>
                    <a href="#"><i class="icon1"></i></a>
                    <a href="#"><i class="icon2"></i></a>
                    <!--<a href="#"><i class="icon3"></i></a>-->
                </div>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Shop Now</h4>
                <ul>
                    <li><a href="#">Suit</a></li>
                    <li><a href="#">Shirt</a></li>
                    <li><a href="#"> Jacket </a></li>
                    <li><a href="#"> Pant </a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid">
                <h4>Information</h4>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Catalogue</a></li>
                    <li><a href="#">Our Clients</a></li>
                    <li><a href="#">Contact Us</a></li>

                </ul>
            </div>
            <div class="col-md-3 footer-grid foot">
                <h4>Contacts</h4>
                <ul>
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href="https://goo.gl/maps/cPnGNhfK69m">Shop# 13, G/F, Wing Lee Building, 27-33 Kimberley Rd, Tsim Sha Tsui, Hong Kong</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="#">+852 6626 4429</a></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com"> john@perfectfashion.com.hk</a></li>

                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!---footer--->
<!--copy-->
<div class="copy-section">
    <div class="container">
        <div class="copy-left">
            <p>&copy; <?php echo date('Y') ?> <a href="http://www.johnsperfectfashion.com/">John's Perfect Fashion</a>. All rights reserved </p>
        </div>
        <div class="copy-right">
            <img src="images/card.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--copy-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="images/p5.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                        if (newVal >= 1)
                                            divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="images/p7.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Women's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                        if (newVal >= 1)
                                            divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="images/p10.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                        if (newVal >= 1)
                                            divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
            </div>
            <div class="modal-body">
                <div class="news-gr">
                    <div class="col-md-5 new-grid1">
                        <img src="images/p12.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-7 new-grid">
                        <h5>Ten Men's Cotton Viscose fabric Grey Shrug</h5>
                        <h6>Quick Overview</h6>
                        <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                        <div class="color-quality">
                            <div class="color-quality-left">
                                <h6>Color : </h6>
                                <ul>
                                    <li><a href="#"><span></span>Red</a></li>
                                    <li><a href="#" class="brown"><span></span>Yellow</a></li>
                                    <li><a href="#" class="purple"><span></span>Purple</a></li>
                                    <li><a href="#" class="gray"><span></span>Violet</a></li>
                                </ul>
                            </div>
                            <div class="color-quality-right">
                                <h6>Quality :</h6>
                                <div class="quantity"> 
                                    <div class="quantity-select">                           
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) + 1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function () {
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10) - 1;
                                        if (newVal >= 1)
                                            divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="women">
                            <span class="size">XL / XXL / S </span>
                            <p ><del>$100.00</del><em class="item_price"> $70.00 </em></p>
                            <div class="add">
                                <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/search/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/search/typeahead.bundle.js" type="text/javascript"></script>
<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/shopController.js"></script>

</html>