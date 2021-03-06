<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<?php
if (isset($edit) && !empty($edit)) {
    $id = $edit['id'];
    $title = $edit['title'];
    $status = $edit['status'];
    $description = $edit['description'];
    $profile = $edit['profile'];
    $salary = $edit['salary'];
    $date = $edit['date'];
    $time = $edit['time'];
} else {
    $id = set_value('id');
    $title = set_value('title');
    $status = set_value('status');
    $description = set_value('description');
    $profile = set_value('profile');
    $salary = set_value('salary');
    $date = set_value('date');
    $time = set_value('time');
}
?>
<div class="row">
    <div class="col-md-12 ">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"><i class="fa fa-gift"></i>Interviews</div>                        
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/interviews/save') ?>" enctype="multipart/form-data" class="validate_form" method="post">
                    <input type="hidden" name="id" class="form-control" value="<?php echo $id; ?>" />
                    <div class="form-body">




                        <div class="form-group">
                            <label class="col-sm-3 control-label">Title</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $title; ?>">
                                <span class="text text-danger"><?php echo form_error('title'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Required Qualification</label>
                            <div class="col-sm-9 input-group">
                                <textarea name="description" class="ckeditor form-control" id="ckeditor" ><?php echo $description; ?></textarea>
                                <span class="text text-danger"><?php echo form_error('description'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Profile</label>
                            <div class="col-sm-9 input-group">
                                <textarea name="profile" class="ckeditor form-control" id="ckeditor" ><?php echo $profile; ?></textarea>
                                <span class="text text-danger"><?php echo form_error('profile'); ?></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Salary</label>
                            <div class="col-sm-9 input-group">
                                <input type="text" name="salary" class="form-control" placeholder="Salary" value="<?php echo $salary; ?>">
                                <span class="text text-danger"><?php echo form_error('salary'); ?></span>
                            </div>
                        </div>
                        
                        
                           <div class="form-group">
                                    <label class="col-sm-3 control-label">Date</label>
                                    <div class="col-sm-9 input-group">
                                        <input type="text" name="date" class="form-control datepicker" placeholder="Date" value="<?php echo $date; ?>">
                                        <span class="text text-danger"><?php echo form_error('date'); ?></span>
                                    </div>
                                </div>



<!--                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-9 input-group">
                                <input class="form-control  date-picker" placeholder=" Date" name="date" id="date" size="16" type="text" value="<?php echo $date; ?>" />
                                <span class="text text-danger" ><?php echo form_error('date'); ?></span>
                            </div>
                        </div>-->

                        <!--                        <div class="form-group">
                                                    <label class="col-sm-3 control-label">Date</label>
                                                    <div class="col-sm-9 input-group">
                                                        <input type="text" name="date" class="form-control datepicker" placeholder="Date" value="<?php echo $date; ?>">
                                                        <span class="text text-danger"><?php echo form_error('date'); ?></span>
                                                    </div>
                                                </div>-->


                        <div class="form-group">
                            <label class="col-sm-3 control-label">Time </label>
                            <div class="col-sm-9 input-group">
                                <div class="input-append bootstrap-timepicker-component">

                                    <input class="form-control m-ctrl-small timepicker"  name="time" id="time" placeholder="Time" type="text"  value="<?php echo $time ?>"/>


                                    <span class="add-on" id="add-on" value="<?php echo $time; ?>">
                                        <i class="fa fa-clock-o"></i></span>
                                </div>
                                <span class="text text-danger" style="color:red"><?php echo form_error('time'); ?></span>
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

<script>
    $('.timepicker').timepicker({
        defaultTime: false
    });
    
    $('.datepicker').datepicker({
        defalutDate:false
    });
</script>
