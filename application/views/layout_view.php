<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- JQUERY 1.9 -->
    <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
    <!--JS -->
    <script src="<?php echo base_url('assets/js/bootstrap4/bootstrap.min.js'); ?>"></script>
    <script src="https://kit.fontawesome.com/eaa2a3751f.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/datatables.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap4/bootstrap.min.css'); ?>">
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/js/Chosen/BTchosen.min.css'); ?>" rel="stylesheet">
    <!-- CSS Adicionales -->
    <?php if (isset($files_css)) {
        foreach ($files_css as $file_css) {
            # code...
            echo "<link href='" . base_url("assets/css/$file_css") . "' rel='stylesheet'>";
        }
    } ?>

    <title>Master Home</title>

</head>

<body>


    <?php $this->load->view($view); ?>



    <!-- OBTENIENDO URL DINAMICA -->
    <input type="hidden" value="<?php echo base_url(); ?>" id='url'>
    <!-- CARGANDO JS DINAMICOS SEGUN CONTROLADOR -->
    <?php if (isset($files_js)) {
        foreach ($files_js as $file_js) {
            # code...
            echo "<script src='" . site_url("assets/js/$file_js") . "'></script>";
        }
    } ?>

</body>

</html>