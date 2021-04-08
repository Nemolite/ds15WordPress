<?php
/**
 * Средние банеры
 */
?>
<!-- первый ряд перемещен выше фото слайдера-->
<div class="baners-net">
 <!-- второй ряд --> 
<?php for ($i=1;$i<=5;$i++) { ?>
<?php 
$main_middle_link = 'main_middle_link_2_'.$i;
$main_middle_baner = 'main_middle_baner_2_'.$i;
$main_middle_text = 'main_middle_text_2_'.$i;
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

 <!-- третий ряд -->
<?php for ($i=1;$i<=5;$i++) { ?>
<?php 
$main_middle_link = 'main_middle_link_3_'.$i;
$main_middle_baner = 'main_middle_baner_3_'.$i;
$main_middle_text = 'main_middle_text_3_'.$i;
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

 <!-- четвертый ряд -->
 <?php for ($i=1;$i<=5;$i++) { ?>
<?php 
$main_middle_link = 'main_middle_link_4_'.$i;
$main_middle_baner = 'main_middle_baner_4_'.$i;
$main_middle_text = 'main_middle_text_4_'.$i;
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
 
</div>	<!-- class="baners-net" -->