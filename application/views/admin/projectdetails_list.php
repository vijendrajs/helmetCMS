<?php include('include/header.php'); ?>

<?php if ($this->session->flashdata('msg') != '') { ?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('msg'); ?></div>
<?php } ?>
<!--<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">Search Projects </div>

            </div>
            <div class="portlet-body form">
                <form id="basicForm" name="basicForm" action="<?php echo site_url('admin/projectdetails') ?>"  method="get"> always get method used in get 
                    <div class="form-body">
                        <div class="form-group">

                            <div class="col-sm-3 input-group">
                                                               
                                                                <input type="text"  name="search_box" class="form-control" value=""style="float:left;width:75%" >
                                <select name="id" class="form-control" style="width: 56%;">
                                    <option value="">All</option>
<?php foreach ($pn_name as $pname) {
    ?>
                                                            <option value="<?php echo $pname['id']; ?>"<?php echo ($pname['id'] == $id) ? 'selected' : ''; ?> > <?php echo $pname['project_name']; ?> </option>

<?php }
?>
                                </select>&nbsp;&nbsp;
                                <button class="btn blue submit_btn" type="submit"style="width: 30%;">Search</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div></div>
</div>-->

<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"> Projects Details</div>                
            </div>


            <div class="portlet-body">
                <!-- BEGIN SAMPLE FORM PORTLET-->
                <div class="table-scrollable">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>Project Type</th>  
                                <th>Project Details</th>
                                <th>Project Name</th>
                                <th>Title</th>
                                <th>Images</th>
                                <th>Size</th>
                                <!--<th>Description</th>-->
                                <th>Available No</th>
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

                                        <td><?php echo $val['details']; ?></td>
                                        <td><?php echo $val ['project_dtls'] ?></td><!-- database column name -->
                                        <td><?php echo $val['project_name'] ?></td>
                                        <td><?php echo $val['title_new'] ?></td>
                                        <td><img style="width: 100px;height:100px" src="<?php echo base_url('uploads/projectdetailsimg/' . $images[0]) ?>" alt="image"></td>
                                        <td><?php echo $val['size'] ?></td>
                                        <!--<td><?php echo $val['description'] ?></td>-->
                                        <td> <?php echo $val['available'] ?></td>

                                        <td class="center">
                                            <a href="<?php echo site_url('admin/projectdetails/edit') . '?id=' . $val['id']; ?>" class="label label-primary"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Are you sure?')" href="<?php echo site_url('admin/projectdetails/delete') . '?id=' . $val['id'] . '&projects_table=' . $val['projects_table']; ?>" class="label label-danger"><i class="fa fa-trash-o"></i></a>
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

<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption"> Projects Features</div>
                <a href="<?php echo site_url('admin/projectdetails/features/?projects_table=') . $_GET['id']; ?>" style="float: right;" class="btn btn-primary">Add</a>
            </div>

            <div class="portlet-body">                
                <div class="table-scrollable">
                    <table class="table" id="table2">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Images</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($features) && !empty($features)) {
                                foreach ($features as $val) {
                                    ?>
                                    <?php $images = explode(",", $val['images']) ?>
                                    <tr class="odd gradeA">

                                        <td><?php echo $val['title']; ?></td>                                        
                                        <td><img style="width: 100px;height:100px" src="<?php echo base_url('uploads/featuresimg/' . $images[0]) ?>" alt="image"></td>
                                        <td class="center">
                                            <a href="<?php echo site_url('admin/projectdetails/edit_feature') . '?id=' . $val['id']; ?>" class="label label-primary"><i class="fa fa-pencil"></i></a>
                                            <a onclick="return confirm('Are you sure?')" href="<?php echo site_url('admin/projectdetails/delete_feature') . '?id=' . $val['id'] . '&projects_table=' . $val['projects_table']; ?>" class="label label-danger"><i class="fa fa-trash-o"></i></a>
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
