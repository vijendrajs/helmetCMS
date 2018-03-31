<?php include('include/header.php'); ?>

<!--slider--> 
<div class="banner">
    <img src="<?php echo base_url() ?>web_theme/images/services.jpg" class="img-responsive" alt=""/> </div>
<!--main head end-->
<!--Content-->



<div class="float main content">
    <div class="container">
        <h3 class="profile">Our Services</h3><br>

        <div class="row">
            <?php
            if (isset($services) && !empty($services)) {

                foreach ($services as $key => $val) {
                    ?>
                    <div class="col-lg-6">
                        <div class="col-lg-6">
                            <div class="head_img">

                                <a href="<?php echo site_url('home/services') ?>"><img src="<?php echo base_url('uploads/our_services/' . $val['images']) ?>" title="" alt="" class="img-responsive" /></a>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h4 class="ser_title"><?php echo $val['title'] ?></h4>
                            <p><?php echo $val['description'] ?></p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?> 
        </div>


    </div>
</div>


<!--Content end-->

<?php include('include/footer.php'); ?>