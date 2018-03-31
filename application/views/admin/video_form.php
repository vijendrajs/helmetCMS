<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $title = $edit['title'];
    $status = $edit['status'];
    $url = $edit['url'];
} else {
    $id = set_value('id');
    $title = set_value('title');
    $status = set_value('status');
    $url = set_value('url');
}
?>
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i>Gallery-Videos</div>                        
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/gallery_video/save') ?>" enctype="multipart/form-data" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />
                    <div class="form-body">




                        <div class="form-group">
                            <label class="col-sm-3 control-label"> Title</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $title; ?>">
                                <span class="text text-danger"><?php echo form_error('title'); ?></span>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9 input-group">

                                <?php
                                $options = array(
                                    '' => 'select',
                                    '1' => 'active',
                                    '2' => 'In-active'
                                );

                                echo form_dropdown('status', $options, $status, 'class="form-control"');
                                ?>

                                <span class="text text-danger"><?php echo form_error('status'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">URL</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="url" class="form-control" placeholder="url" value="<?php echo $url; ?>">
                                <span class="text text-danger"><?php echo form_error('url'); ?></span>
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
</div>
<!-- END PAGE CONTENT-->


<!-- END CONTENT -->

<!-- END CONTAINER -->




<?php include('include/footer.php'); ?>
