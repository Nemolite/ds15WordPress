<?php 
/**
 * Видеотека
 */
?>
<div class="content_video">
  <h1>Наша видеотека</h1>
  <div class="content_video-youtube">
    <div class="row">
    <div class="col-md-3 col-xs-12 col-sm-3">
        <div class="youtube-mini">
        <div class="youtube-mini-top">
        <iframe width="100%" height="100%" src="<?php echo ot_get_option( 'youtube_1' );?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="youtube-mini-bottom">
        <iframe width="100%" height="100%" src="<?php echo ot_get_option( 'youtube_2' );?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
        </div>          
        </div>
      </div>
      <div class="col-md-6 col-xs-12 col-sm-6">
        <div class="youtube-main" >
        <iframe width="100%" height="100%" src="<?php echo ot_get_option( 'youtube_3' );?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 col-sm-3">
        <div class="youtube-mini">
        <div class="youtube-mini-top">
        <iframe width="100%" height="100%" src="<?php echo ot_get_option( 'youtube_4' );?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="youtube-mini-bottom">
        <iframe width="100%" height="100%" src="<?php echo ot_get_option( 'youtube_5' );?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> 
          
        </div>
      </div>
    </div>
  </div><!-- class="content_video-youtube"-->
</div><!-- class="content_video"-->
