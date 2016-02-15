<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta http-equiv="X-UA-Compatible" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <meta name="description" content=""<?php echo esc_attr(get_bloginfo('description')); ?>"">
    <meta name="author" content="">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo get_template_directory_uri() ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri() ?>/style.css" rel="stylesheet">

    <script src="<?php echo get_template_directory_uri() ?>/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
