<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>

<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Search form</div>
            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/products') ?>"  method="get">
                    <div class="form-body">
                        <div class="form-group">
                            <div class="col-sm-3 input-group">                                
                                <select name="id" class="form-control" style="width: 56%;">
                                    <option value="">All</option>
                                    <?php foreach ($type_array as $pro_type) {
                                        ?>
                                        <option value="<?php echo $pro_type['id']; ?>"<?php echo ($pro_type['id'] == $id) ? 'selected' : ''; ?> > <?php echo $pro_type['project_type']; ?> </option>
                                    <?php } ?>
                                </select>&nbsp;&nbsp;
                                <button class="btn blue submit_btn" type="submit"style="width: 30%;">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"> Projects</div>
                <a href="<?php echo site_url('admin/products/save') ?>" style="float: right;" class="btn btn-primary">Add</a>
            </div>

            <div class="portlet-body">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="table-scrollable">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>Title</th>  
                                <th>Images</th>
                                <th>Type</th>                                
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($list) && !empty($list)) {
                                foreach ($list as $val) {
                                    ?>
                                    <?php $images = explode(",", $val['images']) ?>
                                    <tr class="odd gradeA">

                                        <td><?php echo $val['project_name']; ?></td>
                                        <td><img style="width: 100px;height:100px" src="<?php echo base_url('uploads/projectimg/' . $images[0]) ?>" alt="image"></td>
                                        <td><?php echo $val ['project_type'] ?></td>                                        
                                        <td><?php echo $val['price'] ?></td>
                                        <td class="center">
                                            <a title="Edit" href="<?php echo site_url('admin/products/edit') . '?id=' . $val['id']; ?>" class="label label-primary"><i class="fa fa-pencil"></i></a>
                                            <a title="Delete" onclick="return confirm('Are you sure?')" href="<?php echo site_url('admin/products/delete') . '?id=' . $val['id']; ?>" class="label label-danger"><i class="fa fa-trash-o"></i></a>                                            
                                        </td>

                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div><!-- table-responsive -->
            </div>

        </div>
    </div>
</div>
<?php include('include/footer.php'); ?>
