


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                       
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data kamar Kost</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg">
                  Masukan Data
                </button>
                <br></br>

                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Fasilitas</th>
                    <th>Ukuran</th>
                    <th>Lantai</th>
                    <th>Harga</th>
                    
                  </tr>
                  </thead>

                  <tbody>
                    <?php 
                    $query = mysqli_query($koneksi, "SELECT * from tb_kost");
                    while($kost = mysqli_fetch_array($query)){

                    ?>

                  <tr>
                  <td><?php echo $kost['id_kost'];?></td>
                    <td><?php echo $kost['nama'];?></td>
                    <td><?php echo $kost['alamat'];?></td>
                    <td width='20%'><?php echo $kost['fasilitas'];?></td>
                    <td><?php echo $kost['ukuran'];?></td>
                    <td><?php echo $kost['lantai'];?></td>
                    <td><?php echo $kost['harga'];?></td>
                    
                  </tr>
                  <?php }?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Fasilitas</th>
                    <th>Ukuran</th>
                    <th>Lantai</th>
                    <th>Harga</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
    <!-- /.modal -->

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            <div class="row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name" aria-label="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
              </div>
            </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

  
