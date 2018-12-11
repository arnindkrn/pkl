<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo1.png">

    <title>Daftar Penyewa</title>

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
                    <h4 class="page-head-line">Daftar Penyewa</h4>

                </div>

            </div>
            
            
        </div>

      <div class="table-responsive">  
          <table id="dataTableSerah" class="table table-striped table-bordered" style="text-align: center">
              <thead class="thead-dark">
              <tr>
                  <th style="text-align: center;" scope="col">No</th>
                  <th scope="col">ID</th>
                  <th scope="col">User</th>
                  <th scope="col">BAST</th>
                  <th scope="col">Tanggal BAST</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Awal Tagihan</th>
                  <th scope="col">Akhir Tagihan</th>
                  <th scope="col">Harga Sewa</th>
              </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach($serah_terima as $dl) : ?>
                  <?php 
                    $date = new DateTime($dl->Akhir_Tagihan);
                      $now = new DateTime();

                      if($date < $now) {
                          $red = true;
                      } else {
                        $red = false;
                        
                      }
                     ?>
                  <?php if ($red == true ): ?>
                    <tr>
                      <td class="table-danger"><?=$i?></td>
                      <td class="table-danger"><?=$dl->id?></td>
                      <td class="table-danger"><?=$dl->User?></td>
                      <td class="table-danger"><?=$dl->BAST?></td>
                      <td class="table-danger"><?=$dl->Tgl_BAST?></td>
                      <td class="table-danger"><?=$dl->Jabatan?></td>
                      <td class="table-danger"><?=$dl->Awal_Tagihan?></td>
                      <td class="table-danger"><?=$dl->Akhir_Tagihan?></td>
                      <td class="table-danger"><?=$dl->Harga_Sewa?></td>

                    </tr>
                  <?php else: ?>
                    <tr>
                      <td class="table-success"><?=$i?></td>
                      <td class="table-success"><?=$dl->id?></td>
                      <td class="table-success"><?=$dl->User?></td>
                      <td class="table-success"><?=$dl->BAST?></td>
                      <td class="table-success"><?=$dl->Tgl_BAST?></td>
                      <td class="table-success"><?=$dl->Jabatan?></td>
                      <td class="table-success"><?=$dl->Awal_Tagihan?></td>
                      <td class="table-success"><?=$dl->Akhir_Tagihan?></td>
                      <td class="table-success"><?=$dl->Harga_Sewa?></td>

                    </tr>
                  <?php endif ?>
                  <?php $i++ ?>
              <?php endforeach; ?>
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
   var edKdLaptop;
    $(document).ready(function () {
        var dataTableAsus = $('#dataTableAsus').DataTable();

    });
</script>