<?php include('include/header.php'); ?>

<!--Content-->
<div class="float main content" style="margin-top: 25px;">
    <div class="container">
        <?php if (isset($about_us) && !empty($about_us)) {
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="profile">About Us</h3>
                    <p class="pro_info"><?php echo $about_us['description'] ?></p>
                </div>

                <div class="col-lg-6 comp">
                    <img src="<?php echo base_url('uploads/our_profile/' . $about_us['images']); ?>" title="" alt="" class="img-responsive" />
                </div>


            </div>  
        <?php } ?>

    </div>
</div>

<?php include('include/footer.php'); ?>
<!--Footer end-->
