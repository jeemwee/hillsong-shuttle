<?php
  $sFeaturedImg = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
<div class="hero" style="background-image: url('<?php echo $sFeaturedImg; ?>')">
  <div class="container">
    <div class="row">
      <div class="content">
              <?php
                if (is_front_page()) {
                  echo '<h1>' . __('Hillsong Shuttle', 'Hillsong') . '</h1>';
                  echo '<h3>' . __('Central station <i class="fas fa-arrows-alt-h"></i> Theater Amsterdam', 'Hillsong') . '</h3>';
                }
                else {
                  echo the_title();
                }

              ?>
      </div>
      <?php
        date_default_timezone_set("Europe/Amsterdam");
        $sCurrentDay = date("l");
        $sShuttleDay = 'Thursday';

        $sCurrentTime = date("H:i");

        if ($sCurrentDay == $sShuttleDay) {

          $aStartingTimes = array('09:00', '11:00', '13:30', '15:00', '17:30');
          $aEndingTimes = array('11:05', '12:30', '14:30', '16:05', '18:30');

          foreach($aStartingTimes as $aKey=>$sItem) {
            if (($sCurrentTime > $sItem) && ($sCurrentTime < $aEndingTimes[$aKey]) ) {
              echo '<div class="shuttle-status driving">';
              echo '<span>The shuttle is still driving | Relax, Enjoy and Connect</span>';
              echo '</div>';
            }
            else {
              echo '<div class="shuttle-status red">';
              echo '<span>Sorry, the shuttle doesn’t drive at the moment  |  <a href="https://www.google.com/maps/dir/Theater+Amsterdam,+Danzigerkade,+Amsterdam/Centraal+Station,+Amsterdam/@52.3878394,4.8695695,14z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x47c608288dc127bf:0xdb0d328fc38eae6!2m2!1d4.8772312!2d52.3970285!1m5!1m1!1s0x47c609b7648f168f:0x28c2494c1bc8baa1!2m2!1d4.900779!2d52.377492!3e3" target="_blank">Find directions</a></span>';
              echo '</div>';
            }

          }
        }
        else {
          echo '<div class="shuttle-status red">';
          echo '<span>Sorry, the shuttle doesn’t drive at the moment  |  <a href="https://www.google.com/maps/dir/Theater+Amsterdam,+Danzigerkade,+Amsterdam/Centraal+Station,+Amsterdam/@52.3878394,4.8695695,14z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x47c608288dc127bf:0xdb0d328fc38eae6!2m2!1d4.8772312!2d52.3970285!1m5!1m1!1s0x47c609b7648f168f:0x28c2494c1bc8baa1!2m2!1d4.900779!2d52.377492!3e3" target="_blank">Find directions</a></span>';
          echo '</div>';
        }
      ?>
    </div>
  </div>
</div>
