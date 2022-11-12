


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
                <h3 class="card-title">Data Pengguna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
                  Launch Small Modal
                </button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    
                  </tr>
                  </thead>

                  <tbody>
                    <?php 
                    $query = mysqli_query($koneksi, "SELECT * from tb_pengguna");
                    while($pengguna = mysqli_fetch_array($query)){

                    ?>

                  <tr>
                  <td><?php echo $pengguna['id_pengguna'];?></td>
                    <td><?php echo $pengguna['nama'];?></td>
                    <td width='20%'><?php echo $pengguna['alamat'];?></td>
                    <td><?php echo $pengguna['jenis_kelamin'];?></td>
                    <td><?php echo $pengguna['pekerjaan'];?></td>
                    <td><?php echo $pengguna['no_hp'];?></td>
                    <td><?php echo $pengguna['email'];?></td>
                  </tr>
                  <?php }?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                    <th>Telepon</th>
                    <th>Email</th>

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

  
