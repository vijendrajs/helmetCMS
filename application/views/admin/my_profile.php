<?php include('include/header.php'); ?>

    <?php if ($this->session->flashdata('msg') != '') { ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
    <?php } ?>




        <div class="row">
            <div class="col-md-12 ">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="portlet box blue">
                    <div class="portlet-title">
                        <div class="caption"><i class="fa fa-gift"></i>Profile</div>                        
                    </div>
                    <div class="portlet-body form">
                        <form method="post" action="<?php echo site_url('admin/my_profile/update'); ?>" class="validate_form">
                           
                            <div class="form-body">

                                <div class="form-group">
                                    <label>Email</label>                                    
                                    <input type="email" class="form-control" placeholder="Email Address" value="<?php echo $edit['email']; ?>" disabled="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $edit['password']; ?>" required="required" minlength="6" maxlength="15">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name" value="<?php echo $edit['first_name']; ?>" required="required">
                                </div>

                             
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="<?php echo $edit['last_name']; ?>" required="required">
                                </div>

                                <div class="form-actions">
                                <center><button type="submit" class="btn blue submit_btn">Submit</button></center>
                            </div>

                               
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- END QUICK SIDEBAR -->

<!-- END CONTENT -->

<!-- END CONTAINER -->
<?php include('include/footer.php'); ?>
<script type="text/javascript" src="<?php echo base_url() ?>admin_theme/custom/js/form_validation.js"></script>