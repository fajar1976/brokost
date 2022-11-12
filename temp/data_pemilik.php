


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
                <h3 class="card-title">Data Pemilik Kost</h3>
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
                    <th>Telepon</th>
                    <th>Email</th>
                    
                  </tr>
                  </thead>

                  <tbody>
                    <?php 
                    $query = mysqli_query($koneksi, "SELECT * from tb_pemilik_kost");
                    while($pemilik_kost = mysqli_fetch_array($query)){

                    ?>

                  <tr>
                  <td><?php echo $pemilik_kost['id_pemilik'];?></td>
                    <td><?php echo $pemilik_kost['nama'];?></td>
                    <td width='20%'><?php echo $pemilik_kost['alamat'];?></td>
                    <td><?php echo $pemilik_kost['no_hp'];?></td>
                    <td><?php echo $pemilik_kost['email'];?></td>
                  </tr>
                  <?php }?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
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

  
