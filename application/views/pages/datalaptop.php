<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo1.png">

    <title>Data Laptop</title>

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

  </head>

        <nav class="navbar navbar-expand navbar-fixed-top" style="background-color: #F5F5F5; ">

          <a class="navbar-brand mr-1" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-responsive-logo" height="50" width="170">
          </a>

          <!-- Navbar Search -->
          <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
          </form>
      </nav>

<div class="container">
    <br>
    <style>
            .page-head-line {
                font-weight: 900;
                padding-bottom: 20px;
                border-bottom: 2px solid darkred;
                text-transform: uppercase;
                color: darkred;
                font-size: 20px;
                margin-bottom: 40px;
            }
          </style>
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Data Laptop</h4>

                </div>

            </div>
            
            
        </div>
    <br>

        <div class="table-responsive">  
            <table id="dataTable" class="table table-striped table-bordered" style="text-align: center;">
                <thead class="thead" style="background-color: darkred; color: white;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Office</th>
                    <th scope="col">Windows</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                        if($merk == false){
                            echo '<tr><td colspan="5"><center>Tidak ada data</center></td></tr>';
                        }else{
                            foreach ($merk as $row){
                                echo '<tr>
                                        <td>'.$i++.'</td>
                                        <td>'.$row->Merk_Laptop.'</td>
                                        <td>'.$row->Tipe.'</td>
                                        <td>'.$row->Office.'</td>
                                        <td>'.$row->Windows.'</td>
                                                    
                                    </tr>';
                            }
                        }

                    ?>
            </tbody>
        </table> 
        </div>
    </div>
<br>
<br>
<br>
</div>
</div>
</html>

<script>
   var KdLaptop;
    $(document).ready(function () {
        var dataTable = $('#dataTable').DataTable();

    });
</script>