<?php
  $sFeaturedImg = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
<div class="hero" style="background-image: url('<?php echo $sFeaturedImg; ?>')">
  <div class="content">
          <?php
            echo '<h1>' . __('Hillsong Shuttle', 'Hillsong') . '</h1>';
            echo '<h2>' . __('Central station <i class="fas fa-arrows-alt-h"></i> Theater Amsterdam', 'Hillsong') . '</h2>';
          ?>
  </div>
  <?php
  date_default_timezone_set("Europe/Amsterdam");
  $sCurrentDay = date("l");
  $sShuttleDay = 'Sunday';

  $sCurrentTime = date("H:i");

  $sStartShuttleTeam1 = '09:00';
  $sEndShuttleTeam1 = '10:05';

  $sStartShuttleTeam2 = '11:00';
  $sEndShuttleTeam2 = '12:30';

  $sStartShuttleTeam3 = '13:30';
  $sEndShuttleTeam3 = '14:30';

  $sStartShuttleTeam4 = '15:00';
  $sEndShuttleTeam4 = '16:05';

  $sStartShuttleTeam5 = '17:30';
  $sEndShuttleTeam5 = '18:30';

  if ($sCurrentDay == $sShuttleDay) {
    if (($sCurrentTime > $sStartShuttleS1 && $sCurrentTime < $sEndShuttleS1) || ($sCurrentTime > $sStartShuttleS2 && $sCurrentTime < $sEndShuttleS2) || ($sCurrentTime > $sStartShuttleS3 && $sCurrentTime < $sEndShuttleS3) || ($sCurrentTime > $sStartShuttleS4 && $sCurrentTime < $sEndShuttleS4) || ($sCurrentTime > $sStartShuttleS5 && $sCurrentTime < $sEndShuttleS5)) {
      echo '<div class="shuttle-status">';
      echo '<pre>The shuttle is still driving</pre>';
      echo '</div>';
    }
  }
  else {
    echo '<div class="shuttle-status red">';
    echo 'Sorry, the shuttle doesn’t drive at the moment  |  <a href="https://www.google.com/maps/dir/Theater+Amsterdam,+Danzigerkade,+Amsterdam/Centraal+Station,+Amsterdam/@52.3878394,4.8695695,14z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x47c608288dc127bf:0xdb0d328fc38eae6!2m2!1d4.8772312!2d52.3970285!1m5!1m1!1s0x47c609b7648f168f:0x28c2494c1bc8baa1!2m2!1d4.900779!2d52.377492!3e3" target="_blank">Find directions</a>';
    echo '</div>';
  }

  ?>
</div>
