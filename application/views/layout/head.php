<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo1.png">

    <title><?php echo $title ?></title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin.css')?>" rel="stylesheet">

    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
    
    <!-- SweetAlert2 Added By Erik -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.12/dist/sweetalert2.all.min.js" integrity="sha256-Y+WJP3jVjJgfw+/m2N5/GGUgxqXDCz7S3zstxj8pqng=" crossorigin="anonymous"></script>

    <style>
        table tbody tr{
            cursor: pointer;
        }

        .indigo{
             background-color: darkred !important;
            color: white;
        }
    </style>
  </head>
