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
	      'depth' =>  2,
	      'container' => false,
	      'strcasecmp' => 1,
	      'menu_class' => 'nav navbar-nav center',
	      'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
	      'walker' => new wp_bootstrap_navwalker())
      );

      wp_nav_menu( array(
        'menu' => 'top_row_menu',
        'depth' =>  0,
        'container' => false,
        'menu_class' => 'dropdown-menu center',
        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
        'walker' => new wp_bootstrap_navwalker())
      );
    ?>
      <ul class="nav navbar-nav">
 
      </ul>

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
      <ul class="nav navbar-nav">
       <li class="dropdown">
          <a class="link-color" id="hover-fix-color" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Сведения об образовательной <br /> организации<span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li><a href="#">Основные сведения</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Структура и органы управления <br />образовательной организацией</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Документы</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Образование</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Образовательные стандарты</a></li>

             <li role="separator" class="divider"></li>
            <li><a href="#">Руководство. Педагогический <br /> (научно-педагогический) состав</a></li>

            <li role="separator" class="divider"></li>
            <li><a href="#">Материально-техническое <br /> обеспечение и оснащенность <br />образовательного процесса</a></li>

            <li role="separator" class="divider"></li>
            <li><a href="#">Степендии и иные виды<br /> материальной поддержки</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Платные образовательные услуги</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="#">Финансово-хозяйственная <br />деятельность</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Вакантные места для <br />приема ( перевода)</a></li>
          </ul>

        </li>

          <li class="dropdown">
          <a class="link-color" id="hover-fix-color" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ждем новичков<span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li><a href="#">Показатели познавательного<br /> развития ребёнка раннего<br /> возраста</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Рекомендации родителям</a></li>
          
          </ul>

        </li>

          <li class="dropdown">
          <a class="link-color" id="hover-fix-color" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Растим детей умными,<br /> творческими, здоровыми<span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li><a href="#">Дидактические игры<br /> по математике</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Развитие детей</a></li>
          
          </ul>

        </li>

           <li class="dropdown">
          <a class="link-color" id="hover-fix-color" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Новые формы поддержки <br /> семей с детьми<span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li><a href="#">Дидактические игры<br /> по математике</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Развитие детей</a></li>
          
          </ul>

         </li>


           <li class="dropdown">
          <a class="link-color" id="hover-fix-color" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Для пап и мам<span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li><a href="#">Детская литература</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Обязанности родителй</a></li>
             <li role="separator" class="divider"></li>
            <li><a href="#">Работа с семьей</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Советы психолога</a></li>
          
          </ul>

         </li>

           <li><a class="link-color" id="hover-fix-color" href="#">Семейный клуб <br/> "Сближение"</a></li>
         
      </ul>
     
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
<div class="content_main-baners">
  
  <a href="<?php echo ot_get_option( 'main_top_link_1' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_top_baner_1' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_top_text_1' );?></p>
     </div>
 </div>
 </a>
  </a>
  <a href="<?php echo ot_get_option( 'main_top_link_2' );?>" target="_blank" >
 <div class="baner-inner">
   <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_top_baner_2' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_top_text_2' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_top_link_3' );?>" target="_blank">
 <div class="baner-inner">
      <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_top_baner_3' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_top_text_3' );?></p>
     </div>
 </div>

  <a href="<?php echo ot_get_option( 'main_top_link_4' );?>" target="_blank">
 <div class="baner-inner">
   <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_top_baner_4' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_top_text_4' );?></p>
     </div>
 </div>
 </a>
  <a href="<?php echo ot_get_option( 'main_top_link_5' );?>" target="_blank">
 <div class="baner-inner">
   <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_top_baner_5' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_top_text_5' );?></p>
     </div>
 </div>
 </a>

</div> <!-- class="content_main-baners" -->   
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
<div class="content_photo">
  <h1>Наша фотогалерея</h1>

  <div class="photo-galery">
    <div class="photo-single">

        <div class="fix-size">
          <img src="<?php echo ot_get_option( 'main_slider_upload_1' );?>" alt="">
        </div>
        <div class="fix-size">
          <img src="<?php echo ot_get_option( 'main_slider_upload_2' );?>" alt="">
        </div>
        <div class="fix-size">
           <img src="<?php echo ot_get_option( 'main_slider_upload_3' );?>" alt="">
        </div>
        <div class="fix-size">
           <img src="<?php echo ot_get_option( 'main_slider_upload_4' );?>" alt="">
        </div>
        <div class="fix-size">
           <img src="<?php echo ot_get_option( 'main_slider_upload_5' );?>" alt="">
        </div>
        <div class="fix-size">
           <img src="<?php echo ot_get_option( 'main_slider_upload_6' );?>" alt="">
        </div>
		<div class="fix-size">
           <img src="<?php echo ot_get_option( 'main_slider_upload_7' );?>" alt="">
        </div>
		<div class="fix-size">
           <img src="<?php echo ot_get_option( 'main_slider_upload_8' );?>" alt="">
        </div>
    
    </div><!-- class="photo-single" -->  

 <div class="photo-array">
        <div class="array-item">
          <img src="<?php echo ot_get_option( 'main_slider_upload_1' );?>" alt="">
        </div>
         <div class="array-item">
          <img src="<?php echo ot_get_option( 'main_slider_upload_2' );?>" alt="">
        </div>
        <div class="array-item">
          <img src="<?php echo ot_get_option( 'main_slider_upload_3' );?>" alt="">
        </div>
         <div class="array-item">
          <img src="<?php echo ot_get_option( 'main_slider_upload_4' );?>" alt="">
        </div>
   
        <div class="array-item">
          <img src="<?php echo ot_get_option( 'main_slider_upload_5' );?>" alt="">
        </div>
         <div class="array-item">
          <img src="<?php echo ot_get_option( 'main_slider_upload_6' );?>" alt="">
        </div>
        <div class="array-item">
          <img src="<?php echo ot_get_option( 'main_slider_upload_7' );?>" alt="">
        </div>
         <div class="array-item">
          <img src="<?php echo ot_get_option( 'main_slider_upload_8' );?>" alt="">
        </div>
  </div> <!-- class="photo-array" -->
  </div><!-- class="photo-galery"-->
</div><!-- class="content_photo"" -->

<!-- Средние банеры -->
<!-- первый ряд -->
<div class="baners-net">
 <a href="<?php echo ot_get_option( 'main_middle_link_1' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_1' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_1' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_2' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_2' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_2' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_3' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_3' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_3' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_4' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_4' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_4' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_5' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_5' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_5' );?></p>
     </div>
 </div>
 </a>
 <!-- второй ряд --> 
 <a href="<?php echo ot_get_option( 'main_middle_link_2_1' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_2_1' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_2_1' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_2_2' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_2_2' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_2_2' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_2_3' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_2_3' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_2_3' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_2_4' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_2_4' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_2_4' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_2_5' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_2_5' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_2_5' );?></p>
     </div>
 </div>
 </a>

 <!-- третий ряд -->
 <a href="<?php echo ot_get_option( 'main_middle_link_3_1' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_3_1' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_3_1' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_3_2' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_3_2' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_3_2' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_3_3' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_3_3' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_3_3' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_3_4' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_3_4' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_3_4' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_middle_link_3_5' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_middle_baner_3_5' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_middle_text_3_5' );?></p>
     </div>
 </div>
 </a> 
</div>	<!-- class="baners-net" -->

<!-- Видеотека -->	
<div class="content_video">
  <h1>Наша видеотека</h1>
  <div class="content_video-youtube">
    <div class="row">
    <div class="col-md-3 col-xs-12 col-sm-3">
        <div class="youtube-mini">
        <div class="youtube-mini-top">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4zvkNFH_fdk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="youtube-mini-bottom">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/WQtpBaK5jxc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        </div>          
        </div>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-6">
        <div class="youtube-main" >
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/eiXeTdYuZ04" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 col-sm-3">
        <div class="youtube-mini">
        <div class="youtube-mini-top">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/NRKYK7k8b_Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="youtube-mini-bottom">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/35KvOF25Vr0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> 
          
        </div>
      </div>
    </div>
  </div><!-- class="content_video-youtube"-->
</div><!-- class="content_video"-->
<!-- Видеотека end-->
<div class="dop-baners">
<a href="<?php echo ot_get_option( 'main_bottom_link_1' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_1' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_1' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_2' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_2' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_2' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_3' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_3' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_3' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_4' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_4' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_4' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_5' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_5' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_5' );?></p>
     </div>
 </div>
 </a>
 <!-- второй ряд --> 
 <a href="<?php echo ot_get_option( 'main_bottom_link_2_1' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_2_1' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_2_1' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_2_2' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_2_2' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_2_2' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_2_3' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_2_3' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_2_3' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_2_4' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_2_4' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_2_4' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_2_5' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_2_5' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_2_5' );?></p>
     </div>
 </div>
 </a>

 <!-- третий ряд -->
 <a href="<?php echo ot_get_option( 'main_bottom_link_3_1' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_3_1' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_3_1' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_3_2' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_3_2' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_3_2' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_3_3' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_3_3' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_3_3' );?></p>
     </div>
 </div>
 </a>
 <!--
 <a href="<?php echo ot_get_option( 'main_bottom_link_3_4' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_3_4' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_3_4' );?></p>
     </div>
 </div>
 </a>
 <a href="<?php echo ot_get_option( 'main_bottom_link_3_5' );?>" target="_blank">
 <div class="baner-inner">
     <div class="baner-inner_img">
       <img src="<?php echo ot_get_option( 'main_bottom_baner_3_5' );?>" alt="">
     </div>
      <div class="baner-inner_text">
       <p><?php echo ot_get_option( 'main_bottom_text_3_5' );?></p>
     </div>
 </div>
 </a> 
-->
</div><!-- class="dop-baners" -->
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
