<main> 
      <div class="container" >
        <div class="row p-3">
            <button id="" data-toggle="modal" data-target="#addSerahTerimaModal" type="button" class="btn m-2 btn-primary">Tambah Data</button>
            <button id="editData" data-toggle="modal" disabled data-target="#editSerahModal" type="button" class="btn m-2 btn-warning">Edit Data</button>
            <button id="deleteData" data-toggle="modal" disabled data-target="#deleteSerahModal" type="button" class="btn m-2 btn-danger">Hapus Data</button>

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

        <!--  Modal Tambah Data --> 
      <div class="modal fade" id="addSerahTerimaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                  <div class="modal-header bg-primary text-white">
                      <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form id="addserahterimaForm" action="<?php echo base_url('serahterima/addSerahTerima')?>">
                      <div class="modal-body">
                          <div class="form-group">
                              <label for="addMerkLaptop">User</label>
                              <input type="text" class="form-control" name="user" id="addUser" placeholder="User">
                          </div>
                          <div class="form-group">
                              <label for="addBAST">BAST</label>
                              <input type="text" class="form-control" name="addBast" id="addBast" placeholder="BAST">
                          </div>
                          <div class="form-group">
                              <label for="addtglBAST">Tanggal BAST</label>
                              <input type="date" class="form-control" name="addtglBAST" id="addtglBAST" placeholder="Tanggal BAST">
                          </div>
                          <div class="form-group">
                              <label for="addJabatan">Jabatan</label>
                              <input type="text" class="form-control" name="addJabatan" id="addJabatan" placeholder="Jabatan">
                          </div>
                          <div class="form-group">
                              <label for="addWindows">Awal Tagihan</label>
                              <input type="date" class="form-control" name="addAwalTagihan" id="addAwalTagihan" placeholder="Awal Tagihan">
                          </div>
                          <div class="form-group">
                              <label for="addAkhirTagihan">Akhir Tagihan</label>
                              <input type="date" class="form-control" name="addAkhirTagihan" id="addAkhirTagihan" placeholder="Akhri Tagihan">
                          </div>

                          <div class="form-group">
                              <label for="addKdLaptop">Laptop yang dipinjam: </label>                              
                              <select name="kdlaptopDipinjam" class="form-control">
                                  <option disabled selected>Pilih Laptop</option>
                                    <?php foreach ($data_laptop as $merk): ?>
                                        <?php if($merk->jumlah > 0): ?>
                                            <option value="<?php echo $merk->id ?>"><?php echo $merk->Merk_Laptop .', ' .$merk->S_N.', ' .$merk->Tipe?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                              </select>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-success">Tambah Data</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>

      <!-- Delete Serah Modal -->
      <div class="modal fade" id="deleteSerahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header bg-danger text-white">
                      <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form id="deleteSerahForm" action="<?php echo base_url('serahterima/deleteSerah')?>">
                  <div class="modal-body">
                      Apakah anda yakin?
                      <input type="hidden" id="idSerahDelete" name="id">
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                      <button class="btn btn-danger">Hapus</button>
                  </div>
                  </form>
              </div>
          </div>
      </div>

      <!-- edit modal -->
       <div class="modal fade" id="editSerahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editDataForm" action="<?php echo base_url('serahterima/updateData')?>">
                    <div class="modal-body">
                        <input type="hidden" id="idDataEdit" name="id">

                        <div class="form-group">
                            <label for="dafUser">User</label>
                            <input type="text" class="form-control" name="user" id="EdafUser">
                        </div>               
                        <div class="form-group">
                            <label for="dafBast">BAST</label>
                            <input type="text" class="form-control" name="bast" id="EdafBast">
                        </div>
                        <div class="form-group">
                            <label for="dafTglBast">Tanggal BAST</label>
                            <input type="date" class="form-control" name="tglBast" id="EdafTglBast">
                        </div>
                        <div class="form-group">
                            <label for="dafJabatan">Jabatan</label>
                            <input type="text" class="form-control" name="jabatan" id="EdafJabatan">
                        </div>
                        <div class="form-group">
                            <label for="dafAwalTag">Awal Tagihan</label>
                            <input type="date" class="form-control" name="awalTag" id="EdafAwalTag">
                        </div>
                        <div class="form-group">
                            <label for="dafAkhirTag">Akhir Tagihan</label>
                            <input type="date" class="form-control" name="akhirTag" id="EdafAkhirTag">
                        </div>
                        <!-- <div class="form-group">
                            <label for="dafHargaSewa">Harga Sewa</label>
                            <input type="text" class="form-control" name="hargaSewa" id="EdafHargaSewa">
                        </div> -->
                        <div class="form-group">
                              <label for="addKdLaptop">Laptop yang dipinjam: </label>                              
                              <select name="kdlaptopDipinjam" class="form-control">
                                  <option disabled selected>Pilih Laptop</option>
                                      <?php foreach ($data_laptop as $merk): ?>
                                        <?php if($merk->Status == 'Tersedia'): ?>
                                  <option value="<?php echo $merk->id ?>"><?php echo $merk->Merk_Laptop .', ' .$merk->S_N.', ' .$merk->Tipe?></option>
                                    <?php endif ?>
                                  <?php endforeach ?>
                              </select>
                        </div>
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
        var dataTableSerah = $('#dataTableSerah').DataTable();

    
    //submit addJadwalDokter
    $('#addserahterimaForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: $(this).attr("action"),
            data: $(this).find('input,select').serialize(),
            dataType: 'json',
            success: function(data) {
                console.log(data);
                if(data.status ==  'fail'){
                    swal('Fail!',data.msg,'error');
                }else{
                    swal('Success!',data.msg,'success');
                    window.location = '<?php echo base_url("serahterima") ?>';
                    $('#addserahterimaForm')[0].reset();
                    $('#addSerahTerimaModal').modal('hide');
                }
            }
        });
    });


    //submit editData
        $('#editDataForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: $(this).attr("action"),
                data: $(this).find('input,select').serialize(),
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if(data.status == 'fail'){
                        swal('Fail!',data.msg,'error');
                    }else{
                        console.table(data.data);
                        swal('Success!',data.msg,'success');
                        window.location = '<?php echo base_url("serahterima") ?>';
                        $('#editSerahForm')[0].reset();
                        $('#editSerahModal').modal('hide');
                    }
                }
            });
        });

        $('table#dataTableSerah').on('click', 'tr:not(:first)' ,function() {
            var $this = $(this);
            var id = $this.find("td").eq(1).html();
            var user = $this.find("td").eq(2).html();
            var bast = $this.find("td").eq(3).html();
            var tanggalbast = $this.find("td").eq(4).html();
            var jabatan = $this.find("td").eq(5).html();
            var tglawal = $this.find("td").eq(6).html();
            var tglakhir = $this.find("td").eq(7).html();
            var harga = $this.find("td").eq(8).html();

            $('#idSerahDelete').val(id);
            $('#idDataEdit').val(id);
            $('#EdafUser').val(user);
            $('#EdafBast').val(bast);
            $('#EdafTglBast').val(tanggalbast);
            $('#EdafJabatan').val(jabatan);
            $('#EdafAwalTag').val(tglawal);
            $('#EdafAkhirTag').val(tglakhir);
            $('#EdafHargaSewa').val(harga);

            $this.toggleClass('indigo').siblings().removeClass('indigo');
            $('#editData').removeAttr("disabled");
            $('#deleteData').removeAttr("disabled");

            if(!$this.hasClass('indigo')){
                $('#editData').attr('disabled', 'disabled');
                $('#deleteData').attr('disabled', 'disabled');
            }

        });

        //submit delete
        $('#deleteSerahForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: $(this).attr("action"),
                data: $(this).find('input').serialize(),
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if(data.status ==  'fail'){
                        swal('Fail!',data.msg,'error');
                    }else{
                        swal('Success!',data.msg,'success');
                        window.location = '<?php echo base_url("serahterima") ?>';
                        $('#deleteSerahForm')[0].reset();
                        $('#deleteSerahModal').modal('hide');
                    }
                }
            });
        });




    });
</script>