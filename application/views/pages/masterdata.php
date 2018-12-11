<?php if (isset($_SESSION['success'])): ?>
  <script type="text/javascript">
    swal('Success!','<?php echo $_SESSION['success'] ?>','success');
  </script>
<?php elseif (isset($_SESSION['fail'])) :?>
    <script type="text/javascript">
    swal('Gagal!','<?php echo $_SESSION['fail'] ?>','error');
  </script>
<?php endif ?>
<?php unset($_SESSION['success']) ?>
<?php unset($_SESSION['fail']) ?>
<main>      
      <div class="container" >
        <div class="row p-3">
           <button id="tambahData" data-toggle="modal" data-target="#addtambahDataModal" type="button" class="btn m-2 btn-primary">Tambah Data</button>
            <button id="editData" data-toggle="modal" disabled data-target="#editDataModal" type="button" class="btn m-2 btn-warning">Edit Data</button>
            <button id="deleteData" data-toggle="modal" disabled data-target="#deleteDataModal" type="button" class="btn m-2 btn-danger">Hapus Data</button>
        </div>
        
        <div class="table-responsive">  
            <table id="dataTable" class="table table-striped table-bordered" style="text-align: center;">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Merek Laptop</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Office</th>
                    <th scope="col">Windows</th>
                    <th scope="col">Kode Laptop</th>
                    <th scope="col">Nilai Laptop</th>
                    <th scope="col">Jumlah</th>  
                </tr>
                </thead>
            </table>
        </div>
      </div>

      <!--  Modal Tambah Data --> 
      <div class="modal fade" id="addtambahDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header bg-primary text-white">
                      <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
          
                  <form action="<?php echo base_url('master/addData')?>" method="post">
                      <div class="modal-body">
                          <div class="form-group">
                              <label for="addKdLaptop">Merk Laptop</label>                              
                              <select name="kdlaptop" class="form-control">
                                  <option disabled selected>Pilih Laptop</option>
                                      <?php $datamerk = $this->admin_model->get_merklaptop(); ?>
                                      <?php foreach ($datamerk as $merk): ?>
                                  <option value="<?php echo $merk->kdlaptop ?>"><?php echo $merk->Merk_laptop ?></option>
                                  <?php endforeach ?>
                              </select>
                          </div>

                          <div class="form-group">
                              <label for="addTipe">Tipe Laptop</label>
                              <input type="text" class="form-control" name="addTipe" id="addTipe" placeholder="Tipe Laptop">
                          </div>
                          <div class="form-group">
                              <label for="addOffice">Office</label>
                              <input type="text" class="form-control" name="Office" id="addOffice" placeholder="Office">
                          </div>
                          <div class="form-group">
                              <label for="addWindows">Windows</label>
                              <input type="text" class="form-control" name="windows" id="addWindows" placeholder="Windows">
                          </div>
                          <div class="form-group">
                              <label for="addNilai">Nilai Laptop</label>
                              <input type="text" class="form-control" name="nilaiLaptop" id="addNilai" placeholder="Nilai Laptop">
                          </div>
                          <div class="form-group">
                              <label for="addStatus">Jumlah Stok</label>
                              <input type="number" name="jumlah" class="form-control" id="addjumlah" placeholder="Jumlah Stok">
                          </div>
                      </div>

          
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-success">Tambah Data Laptop</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <!-- Delete Data Modal --> 
      <div class="modal fade" id="deleteDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header bg-danger text-white">
                      <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form id="deleteDataForm" action="<?php echo base_url('master/deleteData')?>">
                  <div class="modal-body">
                      Apakah anda yakin?
                      <input type="hidden" id="idDataDelete" name="id">
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <button class="btn btn-danger">Hapus</button>
                  </div>
                  </form>
              </div>
          </div>
      </div>

      <!-- Edit Data Modal -->
      <div class="modal fade" id="editDataModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header bg-warning text-white">
                      <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form id="editDataForm" action="<?php echo base_url('master/updateData')?>">
                      <div class="modal-body">
                          <input type="hidden" id="editIdData" name="id">
                          <div class="form-group">
                              <label for="addKdLaptop">Merk Laptop</label>                              
                              <select name="ekdLaptop" id="edkdLaptop" class="form-control">
                                  <option disabled selected>Pilih Laptop</option>
                                      <?php $datamerk = $this->admin_model->get_merklaptop(); ?>
                                      <?php foreach ($datamerk as $merk): ?>
                                  <option value="<?php echo $merk->kdlaptop ?>"><?php echo $merk->Merk_laptop ?></option>
                                  <?php endforeach ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="addTipe">Tipe Laptop</label>
                              <input type="text" class="form-control" name="eTipe" id="edTipe">
                          </div>
                          <div class="form-group">
                              <label for="addOffice">Office Laptop</label>
                              <input type="text" class="form-control" name="eOffice" id="edOffice">
                          </div>
                          <div class="form-group">
                              <label for="addWindows">Windows</label>
                              <input type="text" class="form-control" name="eWindows" id="edWindows">
                          </div>
                           <div class="form-group">
                              <label for="editNilai">Nilai Laptop</label>
                              <input type="text" class="form-control" name="eNilai" id="edNilai">
                          </div>
                           <div class="form-group">
                              <label for="edJumlah">Jumlah Laptop</label>                              
                              <input type="number" name="eJumlah" id="edJumlah" class="form-control">
                          </div>
                          
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <button class="btn btn-warning">Update Data</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
</main>
<script>
    $(document).ready(function () {
        var dataTable = $('#dataTable').DataTable( {
            ajax: "<?php echo base_url('master/getDataLaptop')?>",
            columns: [
                { data: "no" },
                { data: "id",
                  //visible: false
                },
                { data: "Merk_Laptop"},
                { data: "Tipe" },
                { data: "Office" },
                { data: "Windows" },
                { data: "kdlaptop" },
                { data: "Nilai_Laptop" },
                { data: "jumlah" }
            ]
        });


        //submit addJadwalDokter
        $('#addtambahDataForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: $(this).attr("action"),
                dataType: $(this).find('input,select').serialize(),
                success: function(data) {
                    console.log(data);
                    if(data.status ==  'fail'){
                        swal('Fail!',data.msg,'error');
                    }else{
                        swal('Success!',data.msg,'success');
                        $('#addtambahDataForm')[0].reset();
                        $('#addtambahDataModal').modal('hide');
                        dataTable.ajax.reload( null, false );
                    }
                }
            });
        });


        //submit deleteData
        $('#deleteDataForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: $(this).attr("action"),
                data: $(this).find('input').serialize(),
                dataType: 'JSON',
                success: function(data) {
                    console.log(data);
                    if(data.status ==  'fail'){
                       swal('Fail!',data.msg,'error');
                    }else{
                        swal('Success!',data.msg,'success');
                        $('#deleteDataForm')[0].reset();
                        $('#deleteDataModal').modal('hide');
                        dataTable.ajax.reload( null, false );
                    }
                }
            });
        });


        //edit modal
         $('#editDataForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: $(this).attr("action"),
                data: $(this).find('input, textarea,select').serialize(),
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if(data.status ==  'fail'){
                      swal('Fail!',data.msg,'error');
                    }else{
                      swal('Success!',data.msg,'success');
                      $('#editDataForm')[0].reset();
                      $('#editDataModal').modal('hide');
                      dataTable.ajax.reload( null, false );
                    }
                }
            });
        });

        

        $('table#dataTable').on('click', 'tr:not(:first)' ,function() {
            var $this = $(this);
            var id = $this.find("td").eq(1).html();
            var eTipe = $this.find("td").eq(3).html();
            var eOffice = $this.find("td").eq(4).html();
            var eWindows = $this.find("td").eq(5).html();
            var ekdLaptop = $this.find("td").eq(6).html();
            var eNilai = $this.find("td").eq(7).html();
            var eJumlah = $this.find("td").eq(8).html();
                        
            $('#idDataDelete').val(id);
            $('#editIdData').val(id);
            $('#edTipe').val(eTipe);
            $('#edOffice').val(eOffice);
            $('#edWindows').val(eWindows);
            $('#edNilai').val(eNilai);
            $('#edkdLaptop').val(ekdLaptop);
            $('#edJumlah').val(eJumlah);
             
            $this.toggleClass('indigo').siblings().removeClass('indigo');
            $('#editData').removeAttr("disabled");
            $('#deleteData').removeAttr("disabled");

            if(!$this.hasClass('indigo')){
                $('#editData').attr('disabled', 'disabled');
                $('#deleteData').attr('disabled', 'disabled');
            }

        });

      });

</script>

