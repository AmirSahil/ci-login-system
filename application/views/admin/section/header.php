<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php $page_title;?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet" type="text/css">
    
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 


    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url();?>admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php 
            if ($this->uri->segment('2') == ''){
                echo '<li class="nav-item active">';
            }else{
                echo '<li class="nav-item">';
            }
            ?>
                <a class="nav-link" href="<?php echo base_url();?>admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
        
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>User Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" target="_blank" href="<?php echo base_url(); ?>login">Login</a>
                        <a class="collapse-item" target="_blank" href="<?php echo base_url(); ?>register">Register</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <?php 
            if ($this->uri->segment('2') == 'users'){
                echo '<li class="nav-item active">';
            }else{
                echo '<li class="nav-item">';
            }
            ?>
                <a class="nav-link" href="<?php echo base_url();?>admin/users">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>Users</span></a>
            </li>
            <?php 
            if ($this->uri->segment('2') == 'products'){
                echo '<li class="nav-item active">';
            }else{
                echo '<li class="nav-item">';
            }
            ?>
                <a class="nav-link" href="<?php echo base_url();?>admin/products">
                    <i class="fas fa-fw fa-circle"></i>
                    <span>Products</span></a>
            </li>
            <?php 
            if ($this->uri->segment('2') == 'usercart'){
                echo '<li class="nav-item active">';
            }else{
                echo '<li class="nav-item">';
            }
            ?>
                <a class="nav-link" href="<?php echo base_url();?>admin/usercart">
                    <i class="fas fa-fw fa-shopping-basket"></i>
                    <span>Users Cart</span></a>
            </li>
            <?php 
            if ($this->uri->segment('2') == 'orders'){
                echo '<li class="nav-item active">';
            }else{
                echo '<li class="nav-item">';
            }
            ?>
                <a class="nav-link" href="<?php echo base_url();?>admin/orders">
                    <i class="fas fa-fw fa-shopping-bag"></i>
                    <span>Orders</span></a>
            </li>
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <a class="btn border-left text-dark rounded-0 pl-4 mr-4" href="<?php echo base_url();?>admin/logout" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-dark"></i>Logout
        </a>
    </ul>

    

</nav>
<!-- End of Topbar -->