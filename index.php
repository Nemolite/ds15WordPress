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
         <p>Дата публикации
            <span>
              <?php echo get_the_date('j F Y'); ?>
            </span>           
          </p>
         <p><?php the_content("<span>Читать далее</span>");?></p>
      </div>      
 </div>
 
         
<?php        }       
    }
    wp_reset_postdata();
?>
  
</div> <!-- class="owl-carousel" -->
</div> <!-- class="content_slider" -->
<a href="/news">
 <div class="btn-news">
    <p>Все новости</p>
 </div>
</a>
<div class="second_baners_row">
<?php for ($i=1;$i<=5;$i++) { ?>
<?php 
$main_middle_link = 'main_middle_link_'.$i;
$main_middle_baner = 'main_middle_baner_'.$i;
$main_middle_text = 'main_middle_text_'.$i;
?>
 <?php if (
    (!empty(ot_get_option( $main_middle_link )))&&
    (!empty(ot_get_option( $main_middle_baner )))&&
    (!empty(ot_get_option( $main_middle_text ))) 
  ) { ?>
<a href="<?php echo ot_get_option( $main_middle_link );?>" target="_blank">
    <div class="baner-inner">
    <div class="baner-inner_img">
        <img src="<?php echo ot_get_option( $main_middle_baner );?>" alt="">
    </div>
        <div class="baner-inner_text">
            <p><?php echo ot_get_option( $main_middle_text );?></p>
        </div>
    </div>
</a>
<?php }?>  
<?php }?> 
</div>
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
