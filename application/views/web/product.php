<?php include('include/header.php'); ?>

<section class="tz-shop-single">
    <div class="container">

        <!--Start Breadcrumbs-->
        <ul class="tz-breadcrumbs">
            <li><a href="index.html">Home</a></li>
            <li class="current"><?php echo $project_type_name['project_type']; ?></li>
        </ul>
        <!--End Breadcrumbs-->

        <div class="row">
            <div class="col-md-6 col-sm-6">

                <!--Shop images-->
                <div class="shop-images">
                    <ul class="single-gallery">
                        <?php
                        $images = explode(',', $product['images']);
                        foreach ($images as $img) {
                            ?>
                            <li style="height: 360px;text-align: center;">
                                <img src="<?php echo base_url('uploads/projectimg/' . $img) ?>" style="height: 350px;" alt="Product">
                            </li>
                        <?php }
                        ?>                                               
                    </ul>

                </div>
                <!--End shop image-->
            </div>
            <div class="col-md-6 col-sm-6">
                <!--Shop content-->
                <div class="entry-summary">
                    <h1><?php echo $product['project_name']; ?></h1>                    
                    <p class="product-price">
                        <span class="price">Rs. <?php echo $product['price']; ?></span>
                        <span class="stock">Availability:  <span>In stock</span></span>
                    </p>
                    <div class="description" style="min-height: 142px;">
                        <?php echo $product['description']; ?>
                    </div>
                    <form class="tz_variations_form ">
                        <p>
                            <a class="single_add_to_cart_button" href='#enquiry_div'>Enquiry</a>
                            <!--                            <button type="submit" class="single_add_to_wishlist">Refer a Friend</button>-->
                        </p>
                    </form>
                </div>
                <!--End shop content-->
            </div>

        </div>
    </div>

    <div class="bk-gray" id='enquiry_div' style="display: none;">
        <div class="container">
            <!--Product event-->
            <div class="product-event">
                <div class="row">
                    <div class="col-md-6">
                        <!--Thumnbail-->
                        <div class="event-thumbail">
                            <img src="<?php echo base_url('uploads/projectimg/' . $images[0]) ?>" style="height: 400px;">
                        </div>
                    </div>
                    <div class="col-md-6 blog-container">

                        <!--Product content-->
                        <div id="contact-form" class="contact-respond">
                            <h3 class="tz-title">Submit Enquiry</h3>
                            <form id="commentform" class="contact-form-7">
                                                               
                                <p class="comment-for-url">
                                    <input type="hidden" id='product' name='product' value="<?php echo $product['project_name']; ?>" class="author">
                                    <input type="hidden" id='url' name='url' value="<?php echo $_SERVER['PHP_SELF'];?>" class="author">
                                    <input type="text" id='name' name='name' class="author" placeholder="Name">
                                    <i class="fa fa-user"></i>
                                </p>
                                <p class="comment-for-url">
                                    <input type="email" id='email' name='email' class="email" placeholder="Email">
                                    <i class="fa fa-envelope"></i>
                                </p>
                                <p class="comment-for-url">
                                    <input type="text" class="url" name='mobile' id='mobile' placeholder="Mobile" onkeypress="return isNumberKey(event)" maxlength="10">
                                    <i class="fa fa-link"></i>
                                </p>
                                <p class="comment-for-content">
                                    <textarea class="comment" name="message" id='message' placeholder="Message"></textarea>
                                    <i class="fa fa-comment"></i>
                                </p>
                                <p class="comment-for-submit">
                                    <input name="submit" type="submit" id="submit" class="submit sub" value="Submit Enquiry">
                                <div id="status1" style="color: red;"></div>
                                </p>
                            </form>
                        </div>
                        <!--End Product content-->

                    </div>
                </div>
            </div>
            <!--End product event-->

        </div>
    </div>


    <!--Tabs product-->
    <div class="container" style="margin-top: 25px;">
        <div class="box-shadow">

            <!--Tabs header-->
            <div class="tz-tabs-header">
                <h2 class="tz-tabs-title pull-left">Related Products</h2>                
            </div>
            <!--End tab header-->

            <!--Tab content-->
            <div class="tab-content">

                <!--Tab item-->
                <div class="tab-pane active" id="one_read">
                    <div class="row row-item">
                        <?php
                        if (isset($related_product) && !empty($related_product)) {
                            foreach ($related_product as $pro) {
                                $images = explode(",", $pro['images']);
                                ?>
                                <!--Start product item-->
                                <div class="col-md-3 col-sm-6">
                                    <div class="product-item">
                                        <div class="product-thubnail">
                                            <img src="<?php echo base_url('uploads/projectimg/' . $images[0]) ?>" class="img-responsive img_height" />
                                            <div class="product-meta">
                                                <span class="quick-view">                                                    
                                                    <a href="<?php echo site_url('product/' . $pro['id'] . '/' . urlencode($pro['project_name'])) ?>">Quick view</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="product-infomation">
                                            <h4><a href="<?php echo site_url('product/' . $pro['id'] . '/' . urlencode($pro['project_name'])) ?>"><?php echo $pro['project_name'] ?></a></h4>
                                            <span class="product-price">Rs. <?php echo $pro['price'] ?></span>                                                        
                                        </div>
                                    </div>
                                </div>
                                <!--End product item-->
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <!--End tab item-->

            </div>
            <!--End tab content-->

        </div>
    </div>
    <!--End tabs-->

</section>
<script type="text/javascript">

    $(document).ready(function () {
        $('.sub').click(function () {
            var err = '';
            $('#name').css('border', '1px solid #CCCCCC');
            $('#email').css('border', '1px solid #CCCCCC');
            $('#mobile').css('border', '1px solid #CCCCCC');
            $('#message').css('border', '1px solid #CCCCCC');


            var reg = /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i;

            var temp = $('#name').val();
            if (temp == '') {
                err += 'Please Enter  Name \n';
                $('#name').css('border', '1px solid red');
            }
            var temp = $('#email').val();
            if (temp == '') {
                err += 'Please Enter Your Email \n';
                $('#email').css('border', '1px solid red');
            }


            var temp = $('#mobile').val();
            if (temp == '') {
                err += 'Please Enter Mobile Number \n';
                $('#mobile').css('border', '1px solid red');
            }

            var temp = $('#message').val();
            if (temp == '') {
                err += 'Please Enter Message \n';
                $('#message').css('border', '1px solid red');
            }

            if (err != '') {
                alert(err);
                return false;
            } else {
                $('#status1').html('Please wait ......');
                $.ajax({
                    type: "POST",
                    url: '<?php echo site_url('home/enquiry_info'); ?>',
                    data: $('#commentform').serialize(),
                    success: function (data) {
                        $('#status1').html(data);
                        alert(data);

                        if (data == 'Error !!') {
                            return false;
                        }
                        else {
                            $("#commentform")[0].reset();
                            //  $("#contact_form").reset();
                            // alert("sent successfully");
                            //document.location.href = "thank.html";
                        }
                    }
                });
                return false;
            }

        });
    });

    function isNumberKey(e) {
        var unicode = e.charCode ? e.charCode : e.keyCode
        if (unicode != 8)
        {
            if ((unicode < 48 || unicode > 57) && unicode != 9 && unicode != 13 && unicode != 15 && unicode != 14 && unicode != 127 && (unicode < 35 || unicode > 40) && unicode != 46)
                return false
        }
    }
</script>

<script>
    $(document).ready(function () {

        $('.single_add_to_cart_button').click(function () {
            $('#enquiry_div').show();
            $('#name').focus();

        });

        if ($('.single-gallery').length > 0) {
            $(".single-gallery").owlCarousel({
                items: 1,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                itemsTablet: [768, 1],
                itemsMobile: [479, 1],
                slideSpeed: 500,
                paginationSpeed: 800,
                rewindSpeed: 1000,
                autoPlay: false,
                stopOnHover: false,
                singleItem: false,
                rewindNav: false,
                pagination: true,
                paginationNumbers: false,
                itemsScaleUp: false
            });
        }
    });
</script>

<?php include('include/footer.php'); ?>