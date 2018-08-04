<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin - <?=SiteName()?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        
		<link rel="stylesheet" href="<?=asset_url();?>css/jquery-ui.min.css">
		<!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?=asset_url();?>css/bootstrap.min.css">
		
		
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?=asset_url();?>css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?=asset_url()?>bootstrap-datetimepicker.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?=asset_url()?>css/AdminLTE.min.css">
		
		<link rel="stylesheet" href="<?=asset_url()?>css/chosen.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?=asset_url()?>css/_all-skins.min.css">
		<link rel="stylesheet" href="<?=asset_url()?>css/custom.css">
		
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header hidden-print">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><?=SiteName()?></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><?=SiteName()?></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?=asset_url()?>img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?=get_username()?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?=asset_url()?>img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        <?=get_username()?>                                        
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">                                        
                                        <div class="pull-right">
                                            <a href="<?=site_url("admin/account/logout")?>" class="btn btn-danger btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar hidden-print">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?=asset_url()?>img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?=get_username()?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo site_url();?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>

						<li>
                            <a href="<?php echo site_url("admin/contactus");?>">
                                <i class="fa fa-desktop"></i> <span>Contact us</span>
                            </a>
                        </li>						
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Order</span>
                            </a>
                            <ul class="treeview-menu">
								<!--<li class="active">
                                    <a href="<?php echo site_url('admin/order/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								-->
								<li>
                                    <a href="<?php echo site_url('admin/order/index?orderstatusid='.get_processing_order_id().'"');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Product</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('admin/product/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('admin/product/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Productcat</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('admin/productcat/add');?>"><i class="fa fa-plus"></i> Add</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('admin/productcat/index');?>"><i class="fa fa-list-ul"></i> Listing</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-list"></i> <span>Reports</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('admin/report/gettcsexcel');?>"><i class="fa fa-plus"></i>TCS Excel</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('admin/report/orderstatuslist');?>"><i class="fa fa-plus"></i>Order Status List</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('admin/report/SavedOrderSummaries');?>"><i class="fa fa-plus"></i>Saved Order Summaries</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('admin/report/orderdetail');?>"><i class="fa fa-plus"></i>Order Details</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('admin/report/ProductPurchaseReport');?>"><i class="fa fa-plus"></i>Product Purchase Report</a>
                                </li>
								<li>
								<a href="#">
									<i class="fa fa-plus"></i> <span>Tcs Payment Details</span>
								</a>
									<ul class="treeview-menu">
										<li>
											<a href="<?=site_url("admin/report/uploadtcspayment")?>"> Upload Payment Details</a>
										</li>
										<li>
											<a href="<?=site_url("admin/report/tcspaymentdetail")?>"> Payment Details Report</a>
										</li>
									</ul>
								</li>
							</ul>							
                        </li>						
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer hidden-print">
                <strong>Copyright</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?=asset_url()?>js/jquery-2.2.3.min.js"></script>
		
		<script src="<?=asset_url()?>js/jquery-ui.min.js"></script>
		
        <!-- Bootstrap 3.3.6 -->
        <script src="<?=asset_url()?>js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?=asset_url()?>js/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?=asset_url()?>js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?=asset_url()?>js/demo.js"></script>
        <!-- DatePicker -->
        <script src="<?=asset_url()?>js/moment.js"></script>
        <script src="<?=asset_url()?>js/bootstrap-datetimepicker.min.js"></script>
        <script src="<?=asset_url()?>js/global.js"></script>
		<script src="<?=asset_url()?>js/jquery.MultiFile.min.js"></script>
		<script src="<?=asset_url()?>js/jquery.validate.min.js"></script>
		<script src="<?=asset_url()?>js/additional-methods.min.js"></script>
		<script src="<?=asset_url()?>js/chosen.jquery.min.js"></script>
		<script src="<?=asset_url()?>js/admin.custom.js"></script>
		
    </body>
</html>
