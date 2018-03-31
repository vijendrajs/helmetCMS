<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>::  Reliable ::</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>theme/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME STYLES -->
<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>theme/bootstrap-datepicker/css/datepicker.css" />-->
<!--        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>theme/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>theme/bootstrap-timepicker/compiled/timepicker.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>datepicker/jquery.ui.all.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>datepicker/demos.css">

        <link href="<?php echo base_url() ?>theme/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>theme/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>theme/assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="<?php echo base_url() ?>theme/assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>theme/assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo base_url() ?>theme/assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/></script>
    <link rel="shortcut icon" href="favicon.ico"/>
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo ">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="<?php echo site_url('admin/dashboard'); ?>">
                    <img src="<?php echo base_url() ?>web_theme/images/logo.png" alt="" style="padding: 20px;" />
                </a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
           
            <div class="page-top">
              
                <div class="top-menu"><!-- BEGIN USER LOGIN DROPDOWN -->

                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li style="list-style-type:none; padding:20px;">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" style="float:right;">
                            <span class="username username-hide-on-mobile"><i class="fa fa-user"></i><?php echo $this->admin['first_name'] . ' ' . $this->admin['last_name']; ?></span>
                            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
<!--                                    <img alt="" class="img-circle" src=""/>-->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default" style="position: relative; clear:both;" >
                            <li><a href="<?php echo site_url('admin/my_profile'); ?>"><i class="icon-user"></i>My Profile</a></li>
                            <li><a href="<?php echo site_url('admin/login/logout'); ?>"><i class="icon-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>


                <!-- END 
                TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <div class="clearfix">
    </div>
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
             
                <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">


                    <li id="start" <?php echo ((isset($active) && $active == 15) ? 'class="nav active"' : 'class="nav"') ?>>

                        <a href="<?php echo site_url('admin/dashboard') ?>">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>



                    <li id="start" <?php echo ((isset($active) && $active == 25) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="javascript:;">
                            <i class="fa fa-home"></i>
                            <span class="title">Home</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">


                            <li>
                                <a href="<?php echo site_url('admin/banner') ?>">
                                    <i class="fa fa-file-image-o"></i>
                                    Banner</a>
                            </li>


                        </ul>
                    </li>
                    <li id="start" class="nav">
                        <a href="<?php echo site_url('admin/products') ?>">
                            <i class="fa fa-bars"></i>
                            <span class="title">Products</span>
                        </a>
                    </li>
                    
<!--                    <li id="start" <?php echo ((isset($active) && $active == 20) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="<?php echo site_url('admin/our_services') ?>">
                            <i class="fa fa-bars"></i>

                            <span class="title">Our Services</span>
                        </a>
                    </li>-->

                    <li id="start" <?php echo ((isset($active) && $active == 20) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="<?php echo site_url('admin/testimonials') ?>">
                            <i class="fa fa-bars"></i>

                            <span class="title">Testimonials</span>
                        </a>
                    </li>
                    
                    <li id="start" <?php echo ((isset($active) && $active == 20) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="<?php echo site_url('admin/clients') ?>">
                            <i class="fa fa-bars"></i>

                            <span class="title">Clients</span>
                        </a>
                    </li>


                    <li id="start" <?php echo ((isset($active) && $active == 2) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="javascript:;">
                            <i class="fa fa-building"></i>
                            <span class="title">Company</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">

                            <li  id="start" >
                                <a href="<?php echo site_url('admin/our_profile/edit') ?>">
                                    <i class="fa fa-bars"></i>
                                    Our Profile</a>
                            </li>
<!--                            <li>
                                <a href="<?php echo site_url('admin/our_vision/edit') ?>">
                                    <i class="fa fa-bars"></i>
                                    Our Vision</a>
                            </li>-->
<!--                            <li>
                                <a href="<?php echo site_url('admin/promoters') ?>">
                                    <i class="fa fa-bars"></i>
                                    Promoters</a>
                            </li>-->
<!--                            <li>
                                <a href="<?php echo site_url('admin/managing_director') ?>">
                                    <i class="fa fa-bars"></i>
                                    Managing Directors’ Message</a>
                            </li>-->

<!--                            <li>
                                <a href="<?php echo site_url('admin/core_team') ?>">
                                    <i class="fa fa-bars"></i>
                                    Core Team</a>
                            </li>-->


<!--                            <li>
                                <a href="<?php echo site_url('admin/mission/edit') ?>">
                                    <i class="fa fa-bars"></i>
                                    Mission</a>
                            </li>-->

                        </ul>
                    </li>




<!--                    <li id="start" <?php echo ((isset($active) && $active == 9) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="javascript:;">
                            <i class="fa fa-file-image-o"></i>
                            <span class="title">Gallery</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">


                            <li>
                                <a href="<?php echo site_url('admin/gallery_photos') ?>">
                                    <i class="fa fa-camera"></i>
                                    Photos</a>
                            </li>

                            <li>
                                <a href="<?php echo site_url('admin/gallery_video') ?>">
                                    <i class="fa fa-video-camera"></i>
                                    Videos</a>
                            </li>


                        </ul>
                    </li>-->





<!--                    <li id="start" <?php echo ((isset($active) && $active == 3) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="javascript:;">
                            <i class="fa fa-graduation-cap"></i>
                            <span class="title">Careers</span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">

                            <li  id="start" >
                                <a href="<?php echo site_url('admin/why_us/edit') ?>">
                                    <i class="fa fa-bars"></i>
                                    Why Us?</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/current_openings') ?>">
                                    <i class="fa fa-bars"></i>
                                    Current Openings</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/interviews') ?>">
                                    <i class="fa fa-bars"></i>
                                    Interviews</a>
                            </li>

                        </ul>
                    </li>-->




                    <li id="start" <?php echo ((isset($active) && $active == 14) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="<?php echo site_url('admin/contact_us/edit') ?>">
                            <i class="fa fa-phone"></i>
                            <span class="title">Contact Us</span>
                        </a>
                    </li>


                    <li id="start" <?php echo ((isset($active) && $active == 17) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="<?php echo site_url('admin/setting/edit') ?>">
                            <i class="fa fa-wrench"></i>
                            <span class="title">Setting</span>
                        </a>
                    </li>


<!--                    <li id="start" <?php echo ((isset($active) && $active == 17) ? 'class="nav active"' : 'class="nav"') ?>>
                        <a href="<?php echo site_url('admin/disclaimer/edit') ?>">
                            <i class="fa fa-list"></i>
                            <span class="title">Disclaimer</span>
                        </a>
                    </li>-->

                </ul>

                <!-- END SIDEBAR MENU -->
            </div>

        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!--                <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Modal title</h4>
                            </div>
                            <div class="modal-body">
                                Widget settings form goes here
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn blue">Save changes</button>
                                <button type="button" class="btn default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                         /.modal-content 
                    </div>
                     /.modal-dialog 
                </div>-->
                <!-- /.modal -->
                <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
                <!-- BEGIN PAGE HEADER-->
                <!-- BEGIN PAGE HEAD -->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE -->

                    <!-- END PAGE TITLE -->
                    <!-- BEGIN PAGE TOOLBAR -->
                    <div class="page-toolbar">
                        <!-- BEGIN THEME PANEL -->
                        <div class="btn-group btn-theme-panel">
                            <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">

                            </a>
                            <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <h3>THEME</h3>
                                        <ul class="theme-colors">
                                            <li class="theme-color theme-color-default active" data-theme="default">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Dark Header</span>
                                            </li>
                                            <li class="theme-color theme-color-light" data-theme="light">
                                                <span class="theme-color-view"></span>
                                                <span class="theme-color-name">Light Header</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                        <h3>LAYOUT</h3>
                                        <ul class="theme-settings">
                                            <li>
                                                Theme Style
                                                <select class="layout-style-option form-control input-small input-sm">
                                                    <option value="square" selected="selected">Square corners</option>
                                                    <option value="rounded">Rounded corners</option>
                                                </select>
                                            </li>
                                            <li>
                                                Layout
                                                <select class="layout-option form-control input-small input-sm">
                                                    <option value="fluid" selected="selected">Fluid</option>
                                                    <option value="boxed">Boxed</option>
                                                </select>
                                            </li>
                                            <li>
                                                Header
                                                <select class="page-header-option form-control input-small input-sm">
                                                    <option value="fixed" selected="selected">Fixed</option>
                                                    <option value="default">Default</option>
                                                </select>
                                            </li>
                                            <li>
                                                Top Dropdowns
                                                <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                    <option value="light">Light</option>
                                                    <option value="dark" selected="selected">Dark</option>
                                                </select>
                                            </li>
                                            <li>
                                                Sidebar Mode
                                                <select class="sidebar-option form-control input-small input-sm">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </li>
                                            <li>
                                                Sidebar Menu
                                                <select class="sidebar-menu-option form-control input-small input-sm">
                                                    <option value="accordion" selected="selected">Accordion</option>
                                                    <option value="hover">Hover</option>
                                                </select>
                                            </li>
                                            <li>
                                                Sidebar Position
                                                <select class="sidebar-pos-option form-control input-small input-sm">
                                                    <option value="left" selected="selected">Left</option>
                                                    <option value="right">Right</option>
                                                </select>
                                            </li>
                                            <li>
                                                Footer
                                                <select class="page-footer-option form-control input-small input-sm">
                                                    <option value="fixed">Fixed</option>
                                                    <option value="default" selected="selected">Default</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END THEME PANEL -->
                    </div>
                    <!-- END PAGE TOOLBAR -->
                </div>
                <!-- END PAGE HEAD -->
                <!-- BEGIN PAGE BREADCRUMB -->

                <!-- END PAGE BREADCRUMB -->
                <!-- END PAGE HEADER-->