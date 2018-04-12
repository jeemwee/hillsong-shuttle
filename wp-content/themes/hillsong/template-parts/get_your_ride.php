<?php
  $sTitle = get_post_meta($post->ID, 'get_ride_title', true);
  $sSubTitle = get_post_meta($post->ID, 'get_ride_subtitle', true);
  $aEasyStep = get_post_meta($post->ID, 'easy_steps', true);
?>
<div id="get_your_ride" class="">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <div class="row">
            <div class="col-sm-12 no-padding">
              <?php
                echo '<h2>' . $sTitle . '</h2>';
                echo '<h4>' . $sSubTitle . '</h4>';
              ?>
            </div>
          </div>
          <div class="row">

            <?php
              foreach ($aEasyStep as $key => $value) :
                $iFileId = $value['upload_files'][0];
                $sSubTitle = $value['subtitle'];
                $sContent = $value['content'];
                $sCtaLabel = $value['cta_text'];
                $sCtaUrl = $value['cta_url'];
            ?>
                  <div class="col-sm-4 no-padding">
                    <?php

                      echo wp_get_attachment_image( $iFileId, 'thumbnail', '', array( "class" => "thumbnail round" ) );
                      echo '<div class="item">';
                      echo '<span class="subtitle">' . $sSubTitle . '</span>';
                      echo wpautop($sContent);
                      if (!(empty($sCtaUrl))) {
                        echo '<a href="'.$sCtaUrl.'" class="btn">' . $sCtaLabel . '</a>';
                      }
                      echo '</div>';
                    ?>
                  </div>
            <?php
              endforeach;
            ?>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
