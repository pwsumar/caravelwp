<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en-US" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Caravel</title>

    <!-- Bootstrap -->
    <link href="styles/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-home <?php echo ($page == "index") ? "" :  "navbar-subpage" ;  ?>">
    <div class="container container-custom">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="images/logo.png" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-menu-collapse" id="bs-example-navbar-collapse-1">
            <!-- <ul class="nav navbar-nav navbar-nav-menu navbar-right">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="page-aboutus.php">About Us</a></li>
                <li><a href="page-services.php">Services</a></li>
                <li><a href="page-crewapplicants.php">Crew Applicants</a></li>
                <li><a href="page-contactus.php">Contact Us</a></li>
            </ul> -->
             <?php
                $defaults = array(
                  'theme_location'  => 'primary-menu',
                  'menu'            => 'main-menu',
                  'container'       => 'ul',
                  'container_class' => 'header-menu',
                  'menu_class'      => 'nav navbar-nav',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker()
                );
                wp_nav_menu( $defaults );
              ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


