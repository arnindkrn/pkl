<main>
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
                <h4 class="page-head-line">Selamat Datang, <?php echo $this->session->userdata("username"); ?></h4>

            </div>

        </div>
		
		
	</div>

	<div class="container" >

		
		  <div class="box-header with-border">
		    <h4 class="box-title">Terakhir Ditambahkan</h4>
		  </div>
		  <!-- /.box-header -->
		  <div class="box-body">
		    <div class="table-responsive">
			      <table class="table no-margin" style="text-align: center;">
			        <thead style="background-color: #F5F5F5;; color: darkred;">
				        <tr>
				          <th>No.</th>
				          <th>Merk Laptop</th>
				          <th>Type</th>
				        </tr>
			        </thead>
			        <tbody>
			        	<?php $i = 1 ?>
			        	<?php foreach ($laptop as $lap): ?>
				        	<tr>
				        	  <td><?php echo $i ?></td>
					          <td><?php echo $lap->Merk_Laptop ?></td>
					          <td><?php echo $lap->Tipe ?></td>
					        </tr>
					        <?php $i++ ?>
			        	<?php endforeach ?>
				        
			        </tbody>
			      </table>
		    </div>
		    <!-- /.table-responsive -->
		  </div>
		  <!-- /.box-body -->
		  
		    <!-- /.info-box-content -->
		  
		  <!-- /.box-footer -->
		
	</div>
</main>
