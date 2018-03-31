<?php include('include/header.php');?>
<!--header end--> 

<!--slider--> 
<div class="banner">
   <img src="images/career.jpg" class="img-responsive" alt=""/> </div>
<!--main head end-->
<!--Content-->
	


<div class="float main content">
	<div class="container">
     <h3 class="profile">Testimonials</h3>
      	<div class="row">
            <?php if(isset($testimonials) && !empty($testimonials)){
                
            foreach($testimonials as $key=> $val){
?>
            <div class="col-lg-6">
                <div class="team">
                	<div class="head_img">
                            <a href=""><img src="<?php echo base_url('uploads/testimonials/'.$val['images'])?>" title="" alt="" class="img-responsive" /></a>
                    </div>
                	<a href=""><h4><?php echo $val['title']?></h4></a>
                    <p><?php echo $val['description']?></p>
                </div>
            </div>
            <?php }}?>
            
            
     
        </div>
  <br>
  

  </div>
</div>






<!--Content end-->

<!--Footer-->
<?php include('include/footer.php');?>
  
<!--Footer end-->
<script type="text/javascript" src="engine1/wowslider.js"></script> 
<script type="text/javascript" src="engine1/script.js"></script>
</body>
</html>