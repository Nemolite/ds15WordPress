<?php
/** 
 * Шаблон вывода новости, в шаблоне новостей
 */
?>

<div class="list_news">
    <div class="list_news_date_block">
        <p class="list_news_date">
            <?php
             echo get_the_date('j F Y');
            ?> 
        </p> 
    </div>
    <div class="list_news_title_block">
        <p class="list_news_title">
        <span>
            <?php
            the_title();
            ?> 
      </span>
            <?php
             the_content("<span>Читать далее</span>");
            ?>
    </div>        
  </p>
</div>