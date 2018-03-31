<!--Start Footer-->
<footer class="tz-footer">
    <div class="footer-widget">
        <div class="container">

            <!--Start footer left-->
            <div class="footer-left">
                <div class="contact-info widget">
                    <h3 class="widget-title">Contact info</h3>
                    <p><?php echo $this->contact_us['text']; ?></p>
                    <ul>
                        <li>
                            <span>Address :</span>
                            <address>
                                <?php echo $this->contact_us['address']; ?>
                            </address>
                        </li>
                        <li>
                            <span>Phone :</span>
                            <?php echo $this->contact_us['phone_no']; ?>
                        </li>
                        <li>
                            <span>Email :</span>
                            <?php echo $this->contact_us['email']; ?>
                        </li>
                    </ul>
                </div>                            
            </div>
            <!--End footer left-->

            <!--Start footer right-->
            <div class="footer-right">
                <div class="tz-widget-clients widget">
                    <h3 class="widget-title">What clients say?</h3>
                    <div class="tz-widget-say">
                        <?php if (isset($this->footer_client) && !empty($this->footer_client)) { ?>
                            <img src="<?php echo base_url('uploads/clients/' . $this->footer_client['images']) ?>" title="<?php echo $this->footer_client['title'] ?>" style="height: 60px;">
                            <div class="entry-say">
                                <p><?php echo $this->footer_client['description'] ?></p>
                                <span><?php echo $this->footer_client['title'] ?></span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title"><a href='<?php echo site_url()?>'>Home</a></h3>
                            <!--                                        <ul>
                                                                        <li>
                                                                            <a href="#">Contact Us</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Returns</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Site Map</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Brands</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Gift Vouchers</a>
                                                                        </li>
                                                                    </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title"><a href='<?php echo site_url('about-us')?>'>About Us</a></h3>
                            <!--                                        <ul>
                                                                        <li>
                                                                            <a href="#">My Account</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Order History</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Wish List</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Newsletter</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Specials</a>
                                                                        </li>
                                                                    </ul>-->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_nav_menu">
                            <h3 class="widget-title"><a href='<?php echo site_url('contact-us')?>'>Contact Us</a></h3>
                            <!--                                        <ul>
                                                                        <li><a href="#">Home</a></li>
                                                                        <li><a href="#">Contact Us</a></li>                                            
                                                                    </ul>-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End footer right-->

        </div>
    </div>
    <div class="tz-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p>Copyright &copy; 2015 <?php echo COMPANY; ?> by <a href="http://digiinterface.com/" target="_blank">Digi Interface</a>. All rights reserved.</p>
                </div>
<!--                <div class="col-md-6 col-sm-6">
                    <div class="pull-right">
                        <span class="payments-method">
                            <a href="#"><img src="<?php echo base_url() ?>web_theme/images/Visa.png" alt="visa"></a>
                            <a href="#"><img src="<?php echo base_url() ?>web_theme/images/Intersection.png" alt="Intersection"></a>
                            <a href="#"><img src="<?php echo base_url() ?>web_theme/images/ebay.png" alt="ebay"></a>
                            <a href="#"><img src="<?php echo base_url() ?>web_theme/images/Amazon.png" alt="Amazon"></a>
                            <a href="#"><img src="<?php echo base_url() ?>web_theme/images/Discover.png" alt="Discover"></a>
                        </span>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</footer>
<!--End Footer-->

</div>
<!--End class site-->


</body>
</html>