<?php include('include/header.php'); ?>

<!--SATRT REVOLUTION SLIDER-->
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner">
        <ul>
            <?php
            if (isset($banner) && !empty($banner)) {
                foreach ($banner as $key => $val) {
                    ?>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="700"  data-saveperformance="off">
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo base_url('uploads/banner/' . $val['images']) ?>"  alt="slider"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->                
                    </li>         
                    <?php
                }
            }
            ?>


        </ul>
    </div>
</div><!--END REVOLUTION SLIDER-->



<!--Start section large top for tabs content-->
<div class="section-large-top">
    <div class="container">

        <!--Start class Shortcode tabs-->
        <div class="tz-shortcode-tabs">

            <!--Tabs Header-->
            <div class="tz-tabs-header">
                <h2 class="tz-tabs-title pull-left">Our Products</h2>
                <ul class="nav nav-tabs pull-right tz-nav-tabs">

                    <?php
                    if (isset($this->categories) && !empty($this->categories)) {
                        $i = 1;
                        foreach ($this->categories as $cat) {
                            ?>                            
                            <li role="presentation" class="<?php echo ($i == 1) ? 'active' : ''; ?>"><a href="#<?php echo str_replace(' ', '_', $cat['project_type']) ?>" data-toggle="tab"><?php echo $cat['project_type'] ?><i class="fa fa-circle"></i></a></li>
                            <?php
                            $i++;
                        }
                    }
                    ?>

                </ul>
            </div>
            <!--End Tabs header-->

            <!--Start Tabs content-->
            <div class="tab-content">
                <?php
                if (isset($this->categories) && !empty($this->categories)) {
                    $i = 1;
                    foreach ($this->categories as $cat) {
                        ?>
                        <!--Tab item-->
                        <div class="tab-pane <?php echo ($i == 1) ? 'active' : ''; ?>" id="<?php echo str_replace(' ', '_', $cat['project_type']) ?>">
                            <!--Start product-->
                            <div class="row row-item">
                                <?php
                                if (isset($products) && !empty($products)) {
                                    $p = 1;
                                    foreach ($products as $pro) {
                                        if ($pro['type'] == $cat['id'] && $p <= 6) {
                                            $images = explode(",", $pro['images']);
                                            ?>
                                            <!--Start product item-->
                                            <div class="col-md-3 col-sm-6">
                                                <div class="product-item">
                                                    <div class="product-thubnail">
                                                        <img src="<?php echo base_url('uploads/projectimg/' . $images[0]) ?>" class="img-responsive img_height" />
                                                        <div class="product-meta">
                                                            <span class="quick-view">
                                                                <?php echo $p; ?>
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
                                            $p++;
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <!--End product-->
                        </div>
                        <!--End tab item-->


                        <?php
                        $i++;
                    }
                }
                ?>
            </div>
            <!--End tabs content-->

        </div>
        <!--End class Shortcode tabs-->

    </div>
</div>
<!--End section large top for tabs content-->


<!--Start partners-->
<div class="container" style="margin-top: 50px;">
    <h2 class="tz-tabs-title pull-left">Clients</h2>
    <ul class="tz-partners">

        <?php
        if (isset($clients) && !empty($clients)) {
            foreach ($clients as $clt) {
                ?>
                <li><a href="jsvascript:;"><img src="<?php echo base_url('uploads/clients/' . $clt['images']) ?>" title="<?php echo $clt['title'] ?>" style="height: 60px;"></a></li>
                <?php
            }
        }
        ?>        
    </ul>
</div>
<!--End partners-->
<?php include('include/footer.php'); ?>