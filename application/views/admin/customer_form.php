
<?php include('include/header.php'); ?>
<div class="alert alert-success">
    <?php if ($this->session->flashdata('msg') != '') { ?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
    <?php } ?>
</div>
<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $email = $edit['email'];
    $password = $edit['password'];
    $first_name = $edit['first_name'];
    $last_name = $edit['last_name'];
} else {
    $id = set_value('id');
    $email = set_value('email');
    $password = set_value('password');
    $first_name = set_value('first_name');
    $last_name = set_value('last_name');
}
?>


<div class="row">
    <div class="col-md-6 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i>Customer Details</div>                        
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm"action="<?php echo site_url('admin/customer/submit') ?>" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />
                    <div class="form-body">


                        <div class="list-group">
                            <h4 class="form-section list-group-item list-group-item-warning">Login Credentials</h4>
                        </div>




                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" required="required">
                                <span class="text text-danger"><?php echo form_error('email'); ?></span>
                            </div>
                            <div id = "stage" style = "background-color:cc0;">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9 input-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>" required="required">
                                <span class="text text-danger"><?php echo form_error('password'); ?></span>
                            </div>
                        </div>






                        <div class="form-group">
                            <label class="col-sm-3 control-label">First Name</label>
                            <div class="col-sm-9 input-group">

                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" value="<?php echo $first_name; ?>"  required="required">
                                <span class="text text-danger"><?php echo form_error('first_name'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Last Name</label>
                            <div class="col-sm-9 input-group">

                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" value="<?php echo $last_name; ?>"  required="required">
                                <span class="text text-danger"><?php echo form_error('last_name'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <!--<button type="submit" name="submit" class="btn blue" onclick="validateForm()">Submit</button>-->
                        <button  name="submit" type="submit" class="btn blue btn_submit" >Submit</button>

                    </div>

                </form>
                <!-- END SAMPLE FORM PORTLET-->
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <!-- BEGIN PAGE CONTENT-->


            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>

</div> 
<!-- END PAGE CONTENT-->


<!-- END CONTENT -->

<!-- END CONTAINER -->



<?php include('include/footer.php'); ?>

<script type="text/javascript">

    $(document).ready(function () {
        $(".btn_submit").click(function () {
            var err = "";
            var a = $("#email").val();
            if (a == "" || a == null)
            {
                err = err + "please enter email \n";

            }


            var b = $("#password").val();
            if (b == "" || b == null)
            {
                err = err + "please enter password \n";
            }
            var c = $("#first_name").val();
            if (c == "" || c == null)
            {
                err = err + "please enter first_name \n";
            }
            var d = $("#last_name").val();
            if (d == "" || d == null)
            {
                err = err + "please enter last_name";
            }

            if (err !== "") {

                alert(err);
                
            }
         
                
              
        });
    });

</script>
