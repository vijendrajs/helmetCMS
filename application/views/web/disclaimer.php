<?php include('include/header.php'); ?>
<!--header end--> 

<!--slider--> 
<div class="main_head">
    <div class="overley"></div>
    <div class="container">

        <ul>
            <li><a href="">Home<i class="fa fa-angle-right"></i></a></li>
            <li><a href="">Disclaimer</a></li>
        </ul>
    </div>
</div>
<!--main head end-->
<!--Content-->
<div class="float main content">
    
        <div class="container">
            <div class="row">
                <?php if (isset($disclaimer) && !empty($disclaimer)) { ?>
                <div class="col-lg-8">
                    <h3 class="profile">Disclaimer</h3>

                    <p class="pro_info"><?php echo $disclaimer[0]['description'] ?></p>

                </div>
                  <?php } ?>
     

            <div class="col-lg-4 comp">
                <img src="<?php echo base_url() ?>web_theme/images/disclaimer.png" class="img-responsive" alt=""/> 
            </div>


        </div>        </div> <br><br>


</div>
</div>



<!--Content end-->

<!--Footer-->
<?php include('include/footer.php'); ?>
<!--Footer end-->
</body>
</html>