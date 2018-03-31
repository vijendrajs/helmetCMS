<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo COMPANY; ?></title>

        <link href="<?php echo base_url() ?>web_theme/css/bootstrap.min.css" rel="stylesheet" type='text/css'>
        <link href='<?php echo base_url() ?>web_theme/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
        <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url() ?>web_theme/fonts/lovelo/stylesheet.css' rel='stylesheet' type='text/css'>

        <link href='<?php echo base_url() ?>web_theme/css/owl.carousel.css' rel='stylesheet' type='text/css'>
        <link href='<?php echo base_url() ?>web_theme/css/owl.theme.css' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url() ?>web_theme/rs-plugin/css/settings.css" rel="stylesheet" type='text/css'>
        <link href="<?php echo base_url() ?>web_theme/css/custom.css" rel="stylesheet" type='text/css'>


        <script type='text/javascript' src="<?php echo base_url() ?>web_theme/js/jquery.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url() ?>web_theme/js/bootstrap.min.js"></script>


        <script type='text/javascript' src="<?php echo base_url() ?>web_theme/js/jquery.parallax-1.1.3.js"></script>
        <script type='text/javascript' src="<?php echo base_url() ?>web_theme/js/owl.carousel.js"></script>        
        <script type='text/javascript' src='<?php echo base_url() ?>web_theme/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>web_theme/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url() ?>web_theme/rs-plugin/js/custom-rs.js'></script>

        <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>web_theme/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url() ?>web_theme/js/respond.min.js"></script>
        <![endif]-->

        <script>
            $(document).ready(function () {
                // bind change event to select
                $('#category_select').on('change', function () {
                    var url = $(this).val(); // get selected value
                    if (url) { // require a URL
                        window.location = url; // redirect
                    }
                    return false;
                });
            });
        </script>
        <style>
            .img_height{
                height: 250px;
            }
        </style>

    </head>
    <body>
        <!--Start class site-->
        <div class="tz-site">

            <!--Start id tz header-->
            <header id="tz-header" class="bk-white">
                <div class="container">

                    <!--Start header content-->
                    <div class="header-content">
                        <h3 class="tz-logo pull-left"><a href="<?php echo site_url() ?>"><img src="<?php echo base_url() ?>web_theme/images/logo.png" alt="home" /></a></h3>

                        <div class="tz-search pull-right">
                            <!--Start form search-->
                            <form>
                                <label class="select-arrow">
                                    <select name="category_select" id='category_select'>
                                        <option value="">Choose Product</option>
                                        <?php
                                        if (isset($this->categories) && !empty($this->categories)) {
                                            foreach ($this->categories as $cat) {
                                                ?>
                                                <option value="<?php echo site_url('products/' . $cat['id']) . '?' . $cat['project_type'] ?>"><?php echo $cat['project_type'] ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </label>
                            </form>
                            <!--End Form search-->                         
                        </div>

                        <div class="pull-right">
                            <div class="widget">
                                <ul class="tz-social">
                                    <li><a class="fa fa-facebook" target="_blank" href="<?php echo $this->setting['facebook']; ?>"></a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                    <!--End class header content-->
                </div>

                <!--Start main menu -->
                <nav class="tz-menu-primary">
                    <div class="container">

                        <!--Main Menu-->
                        <ul class="tz-main-menu pull-left nav-collapse">
                            <li><a href="<?php echo site_url() ?>">Home</a></li>

                            <?php
                            if (isset($this->categories) && !empty($this->categories)) {
                                foreach ($this->categories as $cat) {
                                    ?>        
                                    <li><a href="<?php echo site_url('products/' . $cat['id']) . '?' . $cat['project_type'] ?>"><?php echo $cat['project_type'] ?><span class="red-light">On sale!</span></a></li>
                                    <?php
                                }
                            }
                            ?>


                            <li><a href="<?php echo site_url('about-us') ?>">About Us</a></li>
                            <li><a href="<?php echo site_url('contact-us') ?>">Contact Us</a></li>
                        </ul>
                        <!--End Main menu-->

                        <!--Shop meta-->
                        <ul class="tz-ecommerce-meta pull-right">
                            <li class="tz-menu-wishlist"><a href="javascript:;"><i class="fa fa-mobile"></i> <?php echo $this->setting['whatsapp']; ?></a></li>

                            <!--
                                                        <li class="tz-mini-cart">
                                                            <a href="shop-cart.html"><strong>2</strong>Cart : $199.00</a>
                            
                                                            Mini cart
                                                            <ul class="cart-inner">
                                                                <li class="mini-cart-content">
                                                                    <div class="mini-cart-img"><img src="<?php echo base_url() ?>web_theme/images/product/product-cart1.png" alt="product search one"></div>
                                                                    <div class="mini-cart-ds">
                                                                        <h6><a href="single-product.html">Liv Race Day Short</a></h6>
                                                                        <span class="mini-cart-meta">
                                                                            <a href="single-product.html">$2650.00</a>
                                                                            <span class="mini-meta">
                                                                                <span class="mini-color">Color: <i class="orange"></i></span>
                                                                                <span class="mini-qty">Qty: 5</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <span class="mini-cart-delete"><img src="<?php echo base_url() ?>web_theme/images/delete.png" alt="delete"></span>
                                                                </li>
                                                                <li class="mini-cart-content">
                                                                    <div class="mini-cart-img"><img src="<?php echo base_url() ?>web_theme/images/product/product-cart2.png" alt="product search one"></div>
                                                                    <div class="mini-cart-ds">
                                                                        <h6><a href="single-product.html">City Pedals Sport</a></h6>
                                                                        <span class="mini-cart-meta">
                                                                            <a href="single-product.html">$2650.00</a>
                                                                            <span class="mini-meta">
                                                                                <span class="mini-color">Color: <i class="orange"></i></span>
                                                                                <span class="mini-qty">Qty: 5</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <span class="mini-cart-delete"><img src="<?php echo base_url() ?>web_theme/images/delete.png" alt="delete"></span>
                                                                </li>
                                                                <li class="mini-cart-content">
                                                                    <div class="mini-cart-img"><img src="<?php echo base_url() ?>web_theme/images/product/product-cart3.png" alt="product search one"></div>
                                                                    <div class="mini-cart-ds">
                                                                        <h6><a href="single-product.html">Gloss</a></h6>
                                                                        <span class="mini-cart-meta">
                                                                            <a href="single-product.html">$2650.00</a>
                                                                            <span class="mini-meta">
                                                                                <span class="mini-color">Color: <i class="orange"></i></span>
                                                                                <span class="mini-qty">Qty: 5</span>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                    <span class="mini-cart-delete"><img src="<?php echo base_url() ?>web_theme/images/delete.png" alt="delete"></span>
                                                                </li>
                                                                <li class="mini-subtotal">
                                                                    <span class="subtotal-content">
                                                                        Subtotal:
                                                                        <strong class="pull-right">$1,100.00</strong>
                                                                    </span>
                                                                </li>
                                                                <li class="mini-footer">
                                                                    <a href="shop-cart.html" class="view-cart">View Cart</a>
                                                                    <a href="shop-checkout.html" class="check-out">Checkout</a>
                                                                </li>
                                                            </ul>
                                                            End mini cart
                            
                                                        </li>-->
                        </ul>
                        <!--End Shop meta-->

                        <!--navigation mobi-->
                        <button data-target=".nav-collapse" class="btn-navbar tz_icon_menu" type="button">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!--End navigation mobi-->
                    </div>
                </nav>
                <!--End stat main menu-->

            </header>
            <!--End id tz header-->