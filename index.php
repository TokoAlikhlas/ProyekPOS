<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Material Design - Sidebar (Profile menu)</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<!-- Overlay for fixed sidebar -->
<div class="sidebar-overlay"></div>

<!-- Material sidebar -->
<aside id="sidebar" class="sidebar sidebar-default open" role="navigation">
    <!-- Sidebar header -->
    <div class="sidebar-header header-cover" style="background-image: url(https://2.bp.blogspot.com/-2RewSLZUzRg/U-9o6SD4M6I/AAAAAAAADIE/voax99AbRx0/s1600/14%2B-%2B1%2B%281%29.jpg);">
        <!-- Top bar -->
        <div class="top-bar"></div>
        <!-- Sidebar toggle button -->
        <button type="button" class="sidebar-toggle">
            <i class="icon-material-sidebar-arrow"></i>
        </button>
        <!-- Sidebar brand image -->
        <div class="sidebar-image">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/53474/atom_profile_01.jpg">
        </div>
        <!-- Sidebar brand name -->
        <a data-toggle="dropdown" class="sidebar-brand" href="#settings-dropdown">
            <?php echo $username;?>
            <b class="caret"></b>
        </a>
    </div>

    <!-- Sidebar navigation -->
    <ul class="nav sidebar-nav">
        <li class="dropdown">
            <ul id="settings-dropdown" class="dropdown-menu">
                <li>
                    <a href="#" tabindex="-1">
                        Profile
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Settings
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Help
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Exit
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="index.php">
                <i class="sidebar-icon md-inbox"></i>
                Home
            </a>
        </li>
        <li>
            <a href="menu.php">
                <i class="sidebar-icon md-star"></i>
                Menu
            </a>
        </li>
        <li>
            <a href="transaksi.php">
                <i class="sidebar-icon md-send"></i>
                Transaksi
            </a>
        </li>
        <li class="dropdown">
            <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="sidebar-icon md-drafts"></i>
                Laporan
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" tabindex="-1">
                        Mingguan
                        <span class="sidebar-badge">12</span>
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Bulanan
                        <span class="sidebar-badge">0</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="divider"></li>
        <li class="dropdown">
            <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                All Mail
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" tabindex="-1">
                        Social
                        <span class="sidebar-badge">12</span>
                    </a>
                </li>
                <li>
                    <a href="#" tabindex="-1">
                        Promo
                        <span class="sidebar-badge">0</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                Trash
                <span class="sidebar-badge">3</span>
            </a>
        </li>
        <li>
            <a href="#">
                Spam
                <span class="sidebar-badge">456</span>
            </a>
        </li>
        <li>
            <a href="logout.php">
                Logout
                <span class="sidebar-badge badge-circle">i</span>
            </a>
        </li>
    </ul>
    <!-- Sidebar divider -->
    <!-- <div class="sidebar-divider"></div> -->
    
    <!-- Sidebar text -->
    <!--  <div class="sidebar-text">Text</div> -->
</aside>

<div class="wrapper">
    <!-- Sidebar Constructor -->
    <div class="constructor">
        <h2 class="headline">Home</h2>
        <hr />
    </div>
</div>
<!-- partial -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script  src="./script.js"></script>

</body>
</html>