<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri()?>/style-landing.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <style>
</style>
  </head>

  <body>
    <div class="navbar navbar-inverse " role="navigation">
      <div class="navbar-inner">
        <div class="container" style="background-image:url('http://giraffebranding.co/globotech/wp-content/themes/globotheme/img/landing/bg-header.jpg'); background-repeat:no-repeat; background-position:top center;height: 93px;">
          <?php //include 'includes/nav-responsive.php'; ?>
          <?php //include 'includes/nav-desktop.php'; ?>
          
        </div>
      </div>
    </div>
    
    <div id="contenedor">    
    			        
        <div class="container">