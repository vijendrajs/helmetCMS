<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $address = $edit['address'];
    $phone_no = $edit['phone_no'];
    $email = $edit['email'];
    $text = $edit['text'];
} else {
    $id = set_value('id');
    $address = set_value('address');
    $phone_no = set_value('phone_no');
    $email = set_value('email');
    $text = set_value('text');
}
?>
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">

            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i>Contact_Us</div>                        
            </div>



            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/contact_us/save') ?>" enctype="multipart/form-data" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />

                    <div class="form-body">


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Text</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="text" class="form-control" placeholder="text" value="<?php echo $text; ?>">
                                <span class="text text-danger"><?php echo form_error('text'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9 input-group">
                                <textarea name="address" cols="10" rows="5" class="form-control"><?php echo $address; ?></textarea>
<!--                                <input type="text" name="address" class="form-control" placeholder="Address" value="<?php echo $address; ?>">-->
                                <span class="text text-danger"><?php echo form_error('address'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phone No</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="phone_no" class="form-control" placeholder="Phone No" value="<?php echo $phone_no; ?>">
                                <span class="text text-danger"><?php echo form_error('phone_no'); ?></span>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
                                <span class="text text-danger"><?php echo form_error('email'); ?></span>
                            </div>
                        </div>


                        <div style="text-align: center;" class="form-actions">
                            <div class="col-md-12">
                                <button class="btn blue submit_btn" type="submit" name="submit">Submit</button>
                            </div>

                        </div>

                    </div>


            </div>



            </form>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>

</div> 

<!-- END PAGE CONTENT-->


<!-- END CONTENT -->

<!-- END CONTAINER -->




<?php include('include/footer.php'); ?>

