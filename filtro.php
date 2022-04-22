
<?php
    header('Content-Type: text/css');



      if (isset($_COOKIE['regata'])){
      
        $regatas = 1;
        $bermudas = 2;
        $tenis = 2;

      }else if (isset($_COOKIE['bermuda'])) {

        $bermudas = 1;
        $regatas = 2;
        $tenis = 2;
  

      }else if (isset($_COOKIE['tenis'])) {
        $tenis = 1;
        $regatas = 2;
        $bermudas = 2;
      }
?>


.regata { order: <?php echo $regatas;?>; }
.berma { order: <?php echo $bermudas;?>; }
.tenis { order: <?php echo $tenis;?>; }

