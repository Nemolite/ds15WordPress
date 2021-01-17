<?php
/**
 * Слайдер, фотогалерея
 */
?>
<div class="content_photo">
  <h1>Наша фотогалерея</h1>
    <div class="photo-galery">
        <div class="photo-single">
            <?php for ($i=1;$i<=8;$i++) {
                $main_slider_upload = 'main_slider_upload_'.$i;
            ?>
            <div class="fix-size">
                <img src="<?php echo ot_get_option( $main_slider_upload );?>" alt="">
            </div>
            <?php }?>        
        </div><!-- class="photo-single" -->  
        <div class="photo-array">
            <?php for ($j=1;$j<=8;$j++) {
                $main_slider_upload_item = 'main_slider_upload_'.$j;
            ?>
            <div class="array-item">
                <img src="<?php echo ot_get_option( $main_slider_upload_item );?>" alt="">
            </div>
            <?php }?>  
        </div> <!-- class="photo-array" -->
    </div><!-- class="photo-galery"-->
</div><!-- class="content_photo"" -->