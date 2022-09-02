<?php
/*
Template Name: Страница конкурсов
*/
get_header();
?>
<div class="page_concurs">
    <h1 class="content-page-title">Конкурсы</h1>
    <p class="content-page-disc">Уважаемые педагоги!</p>
    <p class="content-page-disc disc-rest">На этой странице вы найдете список проводимых конкрусов</p>
<div class="row">
  <div class="col-md-offset-1 col-md-11">
   <?php 
   // Получение списка всех конкурсов
    do_action('display_all_concurs',10);
   ?>  
  </div>

  <!--
  <div class="col-md-3">
 <?php //get_sidebar(); ?>
  </div>
-->
</div>

</div>
<?php

get_footer();