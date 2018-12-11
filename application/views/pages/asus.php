<main>
<div class="container">
	<h3>Data Laptop <?php echo $wow ?></h3>
    <br>

        <div class="table-responsive">  
            <table id="dataTableAsus" class="table table-striped table-bordered" style="text-align: center;">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">S/N</th>
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
                            foreach ($merk->result() as $row){
                                echo '<tr>
                                        <td>'.$i++.'</td>
                                        <td>'.$row->Tipe.'</td>
                                        <td>'.$row->S_N.'</td>
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

</main>

<script>
   var edKdLaptop;
    $(document).ready(function () {
        var dataTableAsus = $('#dataTableAsus').DataTable();

    });
</script>