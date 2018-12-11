<body>
    <nav class="navbar navbar-expand navbar-fixed-top" style="background-color: #F5F5F5; ">

      <a class="navbar-brand mr-1" href="<?php echo base_url(); ?>dashboard">
        <img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-responsive-logo" height="50" width="170">
      </a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars" style="color: darkred"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
             
              <li class="nav-item dropdown no-arrow" style="padding-right: 15px;">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa-stack">
                      <i class="fa fa-bell" style="color: darkred; padding-left: 20px;" ></i> 
                  </i>
                  <sup style="color: darkred;"><?php if ($this->admin_model->get_jatuh_tempo() > 0): ?>
                    <?php echo $this->admin_model->get_jatuh_tempo() ?>
                  <?php endif ?></sup>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url('serahterima')?>" data-target="#notifModal">Lihat Semua Pemberitahuan</a>
              </div>
              </li>

              <li class="nav-item dropdown no-arrow" >
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="fa-stack">
                      <i class="fa fa-user" style="color: darkred"></i>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Keluar</a>
                </div>
              </li>
            </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background-color: darkred; ">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-laptop"></i>
            <span>LAPTOP</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <?php $datamerk = $this->admin_model->get_merklaptop(); ?>
            <?php foreach ($datamerk as $merk): ?>
              <a class="dropdown-item" href="<?php echo base_url('laptop/merk/'.$merk->Merk_laptop)?>"><?php echo $merk->Merk_laptop ?></a>
            <?php endforeach ?>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-cog"></i>
            <span>MASTER DATA</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo base_url('master')?>">Data Laptop</a>
            <a class="dropdown-item" href="<?php echo base_url('serahterima')?>">Serah Terima</a>

          </div>
          </a>
        </li>
      </ul>

      
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Keluar" untuk mengakhiri sesi.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-danger" href="<?php echo base_url("Form/logout/")?>">Keluar</a>
          </div>
        </div>
      </div>
    </div>


<div id="content-wrapper">