    <!-- header -->

    <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link href="<?= base_url().$System['system_logo'] ?>" rel="icon">
  <title><?= $System['system_name'] ?> - <?= $Page_name ?></title>
  <link href="<?= base_url() ?>vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url() ?>css/main.css" rel="stylesheet">
  <link href="<?= base_url() ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="<?= base_url() ?>vendor/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->  
  <link href="<?= base_url() ?>vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" >
  <!-- Bootstrap Touchspin -->
  <link href="<?= base_url() ?>vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet" >
  <!-- ClockPicker -->
  <link href="<?= base_url() ?>vendor/clock-picker/clockpicker.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
  

  <!-- diri -->
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.dataTables.min.css">
  <!-- diri -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="<?= base_url() ?>vendor/jquery/jquery.js"></script>
  <script src="<?= base_url() ?>vendor/chart.js/Chart.js"></script>

 

</head>
<style>
        html {
  scroll-behavior: smooth;
}
.display-none{
    display: none;
}
.overlay {
    cursor:none;
    position: fixed;
    overflow: hidden;
    width: 100%;
    height: 100%;
    background: #fff;
    z-index: 10;
    opacity: 1;
}
.loader {
    overflow: hidden;
    width: 300px;
    height: 300px;
    position: relative;
    margin: 0 auto;
    top: 28%;
    background-image: url("<?= base_url(); ?>img/preloading.gif");
    background-repeat: no-repeat;
    background-size: 280px 280px;
    background-attachment: fixed;
    background-position: center; 
}
</style>
<body id="page-top">
<div class="wait overlay display-none">
	<div class="loader"></div>
</div>
  <div id="wrapper" class = "d-none">
        <!-- header end-->
