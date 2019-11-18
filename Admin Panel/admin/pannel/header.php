<?php
ob_start();
session_start();
include 'dbConnect.php';
if (!isset($_SESSION['usr_name'])) {
header("Location: login.php");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Admin Panel</title>
        <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
        <link href="../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
        <link href="../../assets/libs/morris.js/morris.css" rel="stylesheet">
        <link href="../../dist/css/style.min.css" rel="stylesheet">
        <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    </head>
    <body>
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div id="main-wrapper">
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header">
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                            <i class="ti-menu ti-close"></i>
                        </a>
                        <a class="navbar-brand" href="index.php">
                            
                            <b class="logo-icon">
                            </b>
                            <span class="logo-text">
                            </span>
                        </a>
                        <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block">
                                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                    <i class="sl-icon-menu font-20"></i>
                                </a>
                            </li>
                            
                        </ul>
                        
                        <ul class="navbar-nav float-right">
                            <li class="nav-item search-box">
                                <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                    <i class="ti-search font-16"></i>
                                </a>
                                <form class="app-search position-absolute">
                                    <input type="text" class="form-control" placeholder="Search &amp; enter">
                                    <a class="srh-btn">
                                        <i class="ti-close"></i>
                                    </a>
                                </form>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-user" alt="user" class="rounded-circle" width="40"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                    <span class="with-arrow">
                                        <span class="bg-primary"></span>
                                    </span>
                                    <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                        <div class="">
                                            
                                            <i class="fa fa-user fa-circle" alt="user"></i>
                                        </div>
                                        <div class="m-l-10">
                                            <h4 class="m-b-0"><?php echo $_SESSION['usr_name']; ?></h4>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </header>
            
            <aside class="left-sidebar">
                
                <div class="scroll-sidebar">
                    
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <br/><br/><br/>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark active" href="index.php">
                                    <i class="icon-Car-Wheel"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Users</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="allusers.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> View Users </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="addUser.php" class="sidebar-link">
                                            <i class="mdi mdi-account-network"></i>
                                            <span class="hide-menu">Add User</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Product</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="allproduct.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> View Products </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="addproduct.php" class="sidebar-link">
                                            <i class="mdi mdi-account-network"></i>
                                            <span class="hide-menu">Add Product</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Categories</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="allcategory.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> View Categories </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="addcategory.php" class="sidebar-link">
                                            <i class="mdi mdi-account-network"></i>
                                            <span class="hide-menu">Add Category</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Origin</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="allbrand.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> View Origins </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="addbrand.php" class="sidebar-link">
                                            <i class="mdi mdi-account-network"></i>
                                            <span class="hide-menu">Add Origin</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">About</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="about.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> About US </span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Inbox</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="allinbox.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> View Inbox </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="addinbox.php" class="sidebar-link">
                                            <i class="mdi mdi-account-network"></i>
                                            <span class="hide-menu">Add Inbox</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Testimonials</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="alltestimonials.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> View Testimonials </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="addtestimonials.php" class="sidebar-link">
                                            <i class="mdi mdi-account-network"></i>
                                            <span class="hide-menu">Add Testimonials</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Slides</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="allslides.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> View Slides </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="addslides.php" class="sidebar-link">
                                            <i class="mdi mdi-account-network"></i>
                                            <span class="hide-menu">Add Slides</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Banners</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="allbanners.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> View Banners </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="addbanners.php" class="sidebar-link">
                                            <i class="mdi mdi-account-network"></i>
                                            <span class="hide-menu">Add Banners</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Comapny</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="company.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> Website Details </span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                    <i class="icon-Add-User"></i>
                                    <span class="hide-menu">Admins</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="alladmin.php" class="sidebar-link">
                                            <i class="mdi mdi-account-box"></i>
                                            <span class="hide-menu"> View Admins </span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="addadmin.php" class="sidebar-link">
                                            <i class="mdi mdi-account-network"></i>
                                            <span class="hide-menu">Add Admin</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php" aria-expanded="false">
                                    <i class="mdi mdi-directions"></i>
                                    <span class="hide-menu">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    
                </div>
                
            </aside>