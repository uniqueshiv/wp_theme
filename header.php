<?php
$theme_opts= get_option('spnin_opts');
//print_r($theme_opts);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title();?></title>
    <?php wp_head();?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">


    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand -->
            <?php
            if($theme_opts['logo_type']==1){
              ?>
                    <a href="<?php echo home_url();?>" class="navbar-brand"><?php echo bloginfo('name');?></a>
              <?php
            }else{
              ?>
                <a href="<?php echo home_url();?>" class="navbar-brand"><img src="<?php echo $theme_opts['logo_img']; ?>" class="img img-responsive" width="50" height=""></a>
              <?php
            }
             ?>

            <!-- <a href="<?php echo home_url();?>" class="navbar-brand">Testing Blog</a> -->
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <!-- <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="index.html" class="nav-link active ">Home</a>
              </li>
              <li class="nav-item"><a href="blog.html" class="nav-link ">Blog</a>
              </li>
              <li class="nav-item"><a href="post.html" class="nav-link ">Post</a>
              </li>
              <li class="nav-item"><a href="#" class="nav-link ">Contact</a>
              </li>
            </ul> -->
            <?php wp_nav_menu(array(
              'theme_location'                           => 'primary',
              'container'                                => "ul",
              'menu_class'                               =>"navbar-nav ml-auto"

            )); ?>
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
            <ul class="langs navbar-text">
              <?php if(!empty($theme_opts['twitter'])){?>
                <a href="https://twitter.com/<?php echo $theme_opts['twitter'];?>"><i class="fa fa-twitter"></i></a>
             <?php  } ?>  <span></span>
             <?php if(!empty($theme_opts['facebook'])){?>
               <a href="https://facebook.com/<?php echo $theme_opts['facebook'];?>"><i class="fa fa-facebook"></i></a>
            <?php  } ?>  <span></span>
            <?php if(!empty($theme_opts['youtube'])){?>
              <a href="https://youtube.com/<?php echo $theme_opts['youtube'];?>"><i class="fa fa-youtube"></i></a>
           <?php  } ?>
              <!-- <a href="#" class="active">EN</a>
              <span></span>
              <a href="#">ES</a> -->


            </ul>
          </div>
        </div>
      </nav>
    </header>
