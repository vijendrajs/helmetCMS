<?php include('include/header.php'); ?>

<div class="tz-shop">
    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <!--Start shop content-->
                <div class="tz-shop-content">
                    <ul class="tz-breadcrumbs">
                        <li><a href="<?php echo site_url() ?>">Home</a></li>
                        <li class="current"><?php echo $project_type_name['project_type']; ?></li>
                    </ul>                   

                    <div class="tz-product row grid-eff">


                        <?php
                        if (isset($project_array) && !empty($project_array)) {
                            foreach ($project_array as $val) {
                                $images = explode(",", $val['images']);
                                ?>

                                <!--Product item-->
                                <div class="product-item col-md-3 col-sm-6">
                                    <div class="item">
                                        <div class="product-item-inner">
                                            <div class="product-thumb">
                                                <img src="<?php echo base_url('uploads/projectimg/' . $images[0]) ?>" class="img-responsive img_height" alt="img">
                                            </div>
                                            <div class="product-info">
                                                <h4><a href="<?php echo site_url('product/' . $val['id'].'/'.  urlencode($val['project_name'])) ?>"><?php echo $val['project_name'] ?></a></h4>
                                                <span class="p-meta">
                                                    <span class="p-price">Rs. <?php echo $val['price'] ?></span>                                                    
                                                </span>                                                                                                
                                                <span class="p-mask">                                                                                                        
                                                    <span class="quick-view">
                                                        <a href="<?php echo site_url('product/' . $val['id'].'/'.  urlencode($val['project_name'])) ?>"><i class="fa fa-eye"></i>Quick view</a>
                                                    </span>
                                                </span>
                                            </div>
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
                <!--End shop content-->
            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>
