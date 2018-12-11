<main>      
      <div class="container" >
        <div class="row p-3">
          <h3>Tambah Data Laptop</h3>
          <div><?= validation_errors() ?></div>
        </div>
        <div class="form">
          <?= form_open('master/addData/', ['class'=>'form-horizontal']) ?>
            <div class="form-group">
              <label for="merk_laptop" class="col control-label">Merk Laptop</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Merk_Laptop" placeholder="Merk Laptop" value="<?=set_value('merk_laptop')?>">
              </div>
            </div>
            <div class="form-group">
              <label for="Tipe" class="col control-label">Tipe Laptop</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Tipe" placeholder="Tipe Laptop" value="<?=set_value('Tipe')?>">
              </div>
            </div>
            <div class="form-group">
              <label for="S_N" class="col control-label">S/N</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="S_N" placeholder="S/N" value="<?=set_value('S_N')?>">
              </div>
            </div>
            <div class="form-group">
              <label for="Office" class="col control-label">Office Laptop</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Office" placeholder="Office" value="<?=set_value('Office')?>">
              </div>
            </div>
            <div class="form-group">
              <label for="Windows" class="col control-label">Windows</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="Windows" placeholder="Windows" value="<?=set_value('Windows')?>">
              </div>
            </div>
            <div class="form-group">
              <label for="Masa_Aktif" class="col control-label">Masa Aktif</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="merk_laptop" placeholder="Masa Aktif" value="<?=set_value('Masa_Aktif')?>">
              </div>
            </div>
             <div class="form-group">
              <label for="kdlaptop" class="col control-label">Kode Laptop</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="kdlaptop" placeholder="Kode Laptop" value="<?=set_value('kdlaptop')?>">
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
