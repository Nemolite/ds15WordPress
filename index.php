<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ds15
 */

get_header();
?>
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
            <h1>
			<?php echo ot_get_option( 'head_main_text' );?>
			
			</h1>
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

<div class="content_wlecome">
 <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12">
       <div class="welcome_images">
          <img src="<?php echo bloginfo('template_url'); ?>/vendor/images/topmanager.jpg" alt=""> 
       </div>
  </div>
  <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="welcome_text">
      <h1>
	   <?php echo ot_get_option( 'head_welcome_text' );?>     
    </h1>
	<?php echo ot_get_option( 'welcome_textarea' );?>

    <p class="statment">
      <?php echo ot_get_option( 'footer_welcome_text' );?>
    </p>
       </div>
  </div>
</div>
    
</div>  <!-- class="content_wlecome" -->

<!-- Верхний ряд банеров, сделаны на Option Tree (см. в thema-option.php папка template-parts)-->

<!-- Верхние баннеры-->
<?php get_template_part( 'inc/baners', 'top' );?>


<div class="content_slider">
  <h1>Новости нашего десткого сада</h1>
  <div class="owl-carousel">
  <?php  
  $args = array(
        'post_type' => 'post',                   
        'order' => 'DESC',
        'post_status' => 'publish', 
        'posts_per_page' => 8,                           
        );   
    $query = new WP_Query($args);
    if( $query->have_posts() ){
        while( $query->have_posts() ){            
            $query->the_post();
           
?>
  <div class="item-news">
      <div class="item-news_img">
      <a href="<?php echo get_permalink(); ?>">
        <?php echo get_the_post_thumbnail();?>
      </a>  
      </div>
      <div class="item-news_info">
      <a href="<?php echo get_permalink(); ?>">
         <h3><?php the_title();?></h3>
      </a>   
         <p>Дата пуликации <span>
         <?php          
         the_date('j F Y');
         ?></span></p>
         <p><?php the_content("<span>Читать далее</span>");?></p>
      </div>      
 </div>
         
<?php        }       
    }
    wp_reset_postdata();
?>
  
</div> <!-- class="owl-carousel" -->
</div> <!-- class="content_slider" -->
<a href="#">
 <div class="btn-news">
    <p>Все новости</p>
 </div>
</a>
<?php get_template_part( 'inc/content', 'photo' );?>

<!-- Средние банеры -->
<?php get_template_part( 'inc/banners', 'middle' );?>

<!-- Видеотека -->	
<?php get_template_part( 'inc/content', 'video' );?>

<!-- Нижние банеры -->	
<?php get_template_part( 'inc/baners', 'bottom' );?>


</div><!-- class="content" -->
<div class="on-the-map">
  <h1>Наш детский сад на карте</h1>
  <div class="map_inner">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A85cd938b1b904ed91e24eaba262e7e74c69e11392cb31bd5225f8e0ef5068cb2&amp;width=100%25&amp;height=350&amp;lang=ru_RU&amp;scroll=true"></script>
  </div> 
</div>	<!-- class="on-the-map" -->	
<?php
//get_sidebar();
get_footer();
