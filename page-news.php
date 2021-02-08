<?php
/*
Template Name: Страница новостей
*/
get_header();
?>
<div class="page_news">
    <h1 class="content-page-title">Новости</h1>
<div class="row">
  <div class="col-md-8">
   <?php 
   // Получение списка всех новостей   
    do_action('display_all_news',10);
   ?>  
  </div>
  <div class="col-md-4">
 <?php get_sidebar(); ?>
  </div>
</div>

</div>
<?php

get_footer();