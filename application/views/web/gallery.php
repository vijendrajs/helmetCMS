<?php include('include/header.php') ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>web_theme/css/smoothgallery.css">

<!--slider--> 
<div class="banner">
    <img src="<?php echo base_url()?>web_theme/images/gallary.jpg" class="img-responsive" alt=""/> </div>
<!--main head end-->
<!--Content-->



<div class="float main content">
    <div class="container">
        <h3 class="profile">Our Photos</h3><br>
        <div class="demo-wrap">


            <div class="sg">
                <?php
                if (isset($gallery) && !empty($gallery)) {

                    foreach ($gallery as $key => $val) {
                        ?>
                        <div class="sg-item">
                            <a href="<?php echo base_url('uploads/gallery/' . $val['images']) ?>"><img src="<?php echo base_url('uploads/gallery/' . $val['images']) ?>"></a>
                            <br><?php echo $val['title']; ?>
                        </div>
                    <?php }
                }
                ?>
            </div>



            <!--<div class="sg-paginate">
                <a href="#" class="sg-up">▲</a><a href="#" class="sg-down">▼</a>
            </div>-->
            <br><br>

            <script type='text/javascript' src='<?php echo base_url() ?>web_theme/js/jquery.js'></script>
            <script type='text/javascript' src="<?php echo base_url() ?>web_theme/js/easing.js"></script>
            <script type='text/javascript' src="<?php echo base_url() ?>web_theme/js/smoothgallery.js"></script>
            <script type="text/javascript">
                $(window).load(function () {
                    // use default options
                    $(document).smoothGallery({
                        animSpeed: 300,
                        delaySpeed: 50,
                        visibleRows: 3,
                        animEasing: 'easeOutQuart'
                    });
                });
            </script>




        </div>
    </div>


<?php include('include/footer.php') ?>


    <!--Content end-->


    <script type="text/javascript" src="<?php echo base_url() ?>web_theme/engine1/wowslider.js"></script> 
    <script type="text/javascript" src="<?php echo base_url() ?>web_theme/engine1/script.js"></script>
