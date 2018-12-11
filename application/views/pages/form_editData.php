<?php 
  $id = $this->input->post('id');
  $Merk_Laptop = $this->input->post('Merk_Laptop');
  $Tipe = $this->input->post('Tipe');
  $S_N = $this->input->post('S_N');
  $Office = $this->input->post('Office');
  $Windows = $this->input->post('Windows');
  $Masa_Aktif = $this->input->post('Masa_Aktif');
  $kdlaptop = $this->input->post('kdlaptop');
?>
<main>      
      <div class="container" >
        <div class="row p-3">
          <h3>Edit Data Laptop</h3>
          <div><?= validation_errors() ?></div>
        </div>
        <div class="form">
          <?= form_open('master/edit/'.$id, ['class'=>'form-horizontal']) ?>
            <div class="form-group">
              <label for="merk_laptop" class="col control-label">Merk Laptop</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Merk_Laptop" placeholder="Merk Laptop" value="<?=$Merk_Laptop?>">
              </div>
            </div>
            <div class="form-group">
              <label for="Tipe" class="col control-label">Tipe Laptop</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Tipe" placeholder="Tipe Laptop" value="<?=$Tipe?>">
              </div>
            </div>
            <div class="form-group">
              <label for="S_N" class="col control-label">S/N</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="S_N" placeholder="S/N" value="<?=$S_N?>">
              </div>
            </div>
            <div class="form-group">
              <label for="Office" class="col control-label">Office Laptop</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Office" placeholder="Office" value="<?=$Office?>">
              </div>
            </div>
            <div class="form-group">
              <label for="Windows" class="col control-label">Windows</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Windows" placeholder="Windows" value="<?=$Windows?>">
              </div>
            </div>
            <div class="form-group">
              <label for="Masa_Aktif" class="col control-label">Masa Aktif</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="merk_laptop" placeholder="Masa Aktif" value="<?=$Masa_Aktif?>">
              </div>
            </div>
             <div class="form-group">
              <label for="kdlaptop" class="col control-label">Kode Laptop</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kdlaptop" placeholder="Kode Laptop" value="<?=$kdlaptop?>">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          <?= form_close()?>
        </div>
</main>
<script>
    $(document).ready(function () {
        var dataTable = $('#dataTable').DataTable();

    });
</script>
