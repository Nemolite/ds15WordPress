<?php
/**
 * Нижние баннеры 
 */
?>
<div class="dop-baners">
  <?php for ($i=1;$i<=5;$i++) { ?>
  <?php 
    $main_bottom_link = 'main_bottom_link_'.$i;
    $main_bottom_baner = 'main_bottom_baner_'.$i;
    $main_bottom_text = 'main_bottom_text_'.$i;
  ?>
 <?php if (
    (!empty(ot_get_option( $main_bottom_link )))&&
    (!empty(ot_get_option( $main_bottom_baner )))&&
    (!empty(ot_get_option( $main_bottom_text ))) 
  ) { ?>
<a href="<?php echo ot_get_option( $main_bottom_link );?>" target="_blank">
    <div class="baner-inner">
    <div class="baner-inner_img">
        <img src="<?php echo ot_get_option( $main_bottom_baner );?>" alt="">
    </div>
        <div class="baner-inner_text">
            <p><?php echo ot_get_option( $main_bottom_text );?></p>
        </div>
    </div>
</a>
<?php }?> 
<?php }?> 

<!-- второй ряд --> 
<?php for ($i=1;$i<=5;$i++) { ?>
  <?php 
    $main_bottom_link = 'main_bottom_link_2_'.$i;
    $main_bottom_baner = 'main_bottom_baner_2_'.$i;
    $main_bottom_text = 'main_bottom_text_2_'.$i;
  ?>
 <?php if (
    (!empty(ot_get_option( $main_bottom_link )))&&
    (!empty(ot_get_option( $main_bottom_baner )))&&
    (!empty(ot_get_option( $main_bottom_text ))) 
  ) { ?>
<a href="<?php echo ot_get_option( $main_bottom_link );?>" target="_blank">
    <div class="baner-inner">
    <div class="baner-inner_img">
        <img src="<?php echo ot_get_option( $main_bottom_baner );?>" alt="">
    </div>
        <div class="baner-inner_text">
            <p><?php echo ot_get_option( $main_bottom_text );?></p>
        </div>
    </div>
</a>
<?php }?> 
<?php }?> 

<!-- третий ряд -->
<?php for ($i=1;$i<=5;$i++) { ?>
  <?php 
    $main_bottom_link = 'main_bottom_link_3_'.$i;    
    $main_bottom_baner = 'main_bottom_baner_3_'.$i;
    $main_bottom_text = 'main_bottom_text_3_'.$i;
  ?>
  <?php if (
    (!empty(ot_get_option( $main_bottom_link )))&&
    (!empty(ot_get_option( $main_bottom_baner )))&&
    (!empty(ot_get_option( $main_bottom_text ))) 
  ) { ?>
<a href="<?php echo ot_get_option( $main_bottom_link );?>" target="_blank">
    <div class="baner-inner">
    <div class="baner-inner_img">
        <img src="<?php echo ot_get_option( $main_bottom_baner );?>" alt="">
    </div>
        <div class="baner-inner_text">
            <p><?php echo ot_get_option( $main_bottom_text );?></p>
        </div>
    </div>
</a>
<?php }?> 
<?php }?> 
</div><!-- class="dop-baners" -->