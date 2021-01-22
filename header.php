<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ds15
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div class="main">


<header class="main__head">
<nav class="navbar menu-color">
<div class="container-fluid">

<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed fix-btn-color" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>      
</div>   
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
<?php 
wp_nav_menu( array(
'menu' => 'top_row_menu',
'theme_location'  => 'top_row_menu', 
 'depth' =>  2,
 'container' => false,
 'strcasecmp' => 1,
 'menu_class' => 'nav navbar-nav center',
 'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
 'walker' => new wp_bootstrap_navwalker())
);

wp_nav_menu( array(
'menu' => 'top_row_menu',
'theme_location'  => 'top_row_menu', 
'depth' =>  0,
'container' => false,
'menu_class' => 'dropdown-menu center',
'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
'walker' => new wp_bootstrap_navwalker())
);
?>
<form class="navbar-form navbar-left">
<div class="form-group">
 <input type="text" class="form-control" placeholder="Что искать?" value="<?php echo get_search_query() ?>" name="s" id="s">
</div>
<button type="submit" class="btn btn-default">Найти</button>
</form>

<ul class="nav navbar-nav navbar-right">
<li>
 <a href="#" id="hover-fix-color-top" >Версия для слабовидящих</a>
</li>

</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> 
</header>

<div class="content">
<div class="content_images">
   <img src="<?php echo bloginfo('template_url'); ?>/vendor/images/header2.jpeg" alt=""> 
   <a href="<?php echo get_home_url(); ?>">
      <h1>
         <?php echo ot_get_option( 'head_main_text' );?> 
      </h1>
   </a>
</div>

<nav class="navbar middle-menu-color">
<div class="container-fluid">

<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed fix-btn-color-top" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php 
wp_nav_menu( array(
'menu' => 'middle_row_menu',
'theme_location'  => 'middle_row_menu', 
 'depth' =>  2,
 'container' => false,
 'strcasecmp' => 1,
 'menu_class' => 'nav navbar-nav center',
 'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
 'walker' => new wp_bootstrap_navwalker())
);

wp_nav_menu( array(
'menu' => 'middle_row_menu',
'theme_location'  => 'middle_row_menu', 
'depth' =>  0,
'container' => false,
'menu_class' => 'dropdown-menu center',
'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
'walker' => new wp_bootstrap_navwalker())
);
?>     
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

