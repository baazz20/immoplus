<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . 'apple-icon.png'?>">
    <link rel="icon" type="image/png" href="<?= SCRIPTS . 'asset/img' . DIRECTORY_SEPARATOR . 'favicon.png'?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= SCRIPTS . 'asset/css' . DIRECTORY_SEPARATOR . 'bootstrap.min.css'?>" rel="stylesheet" />
  <link href="<?= SCRIPTS . 'asset/css' . DIRECTORY_SEPARATOR . 'now-ui-kit.css?v=1.3.0'?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= SCRIPTS . 'asset/demo' . DIRECTORY_SEPARATOR . 'demo.css'?>" rel="stylesheet" />
    <title>Immoplus</title>
</head>
<body class="index-page sidebar-collapse">


<?= $content ?>


<!--   Core JS Files   -->
<script src="<?= SCRIPTS . 'asset/js/core' . DIRECTORY_SEPARATOR . 'jquery.min.js'?>" type="text/javascript"></script>
  <script src="<?= SCRIPTS . 'asset/js/core' . DIRECTORY_SEPARATOR . 'popper.min.js'?>" type="text/javascript"></script>
  <script src="<?= SCRIPTS . 'asset/js/core' . DIRECTORY_SEPARATOR . 'bootstrap.min.js'?>" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= SCRIPTS . 'asset/js/plugins' . DIRECTORY_SEPARATOR . 'bootstrap-switch.js'?>"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= SCRIPTS . 'asset/js/plugins' . DIRECTORY_SEPARATOR . 'nouislider.min.js'?>" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?= SCRIPTS . 'asset/js/plugins' . DIRECTORY_SEPARATOR . 'bootstrap-datepicker.js'?>" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= SCRIPTS . 'asset/js' . DIRECTORY_SEPARATOR . 'now-ui-kit.js?v=1.3.0'?>" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>