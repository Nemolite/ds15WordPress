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
    <a href="<?php echo get_permalink(); ?>">
        <p class="list_news_title">
        <span>
            <?php
            the_title();
            ?> 
      </span>
      </p>
      </a> 
      <div class="list_news_next_content">
            <?php
             the_content("<span>Читать далее</span>");
            ?>
      </div>      
    </div> 
        
 
</div>
