<?php
/**
 * Верхний ряд баннеров
 */
?>
<div class="content_main-baners">

<?php for ($i=1;$i<=5;$i++) { ?>
  <?php 
    $main_top_link = 'main_top_link_'.$i;
    $main_top_baner = 'main_top_baner_'.$i;
    $main_top_text = 'main_top_text_'.$i;
  ?>
 <?php if (
    (!empty(ot_get_option( $main_top_link )))&&
    (!empty(ot_get_option( $main_top_baner )))&&
    (!empty(ot_get_option( $main_top_text ))) 
  ) { ?>
<a href="<?php echo ot_get_option( $main_top_link );?>" target="_blank">
    <div class="baner-inner">
    <div class="baner-inner_img">
        <img src="<?php echo ot_get_option( $main_top_baner );?>" alt="">
    </div>
        <div class="baner-inner_text">
            <p><?php echo ot_get_option( $main_top_text );?></p>
        </div>
    </div>
</a>
<?php }?> 
<?php }?> 

</div> <!-- class="content_main-baners" -->   