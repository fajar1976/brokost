


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
                <h3 class="card-title">Data Pemesenan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
                  Launch Small Modal
                </button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Kode</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Id Pengguna</th>
                    
                  </tr>
                  </thead>

                  <tbody>
                    <?php 
                    $query = mysqli_query($koneksi, "SELECT * from tb_pemesanan");
                    while($pemesanan = mysqli_fetch_array($query)){
                    ?>

                  <tr>
                    <td><?php echo $pemesanan['kode_pemesanan'];?></td>
                    <td><?php echo $pemesanan['tgl_pemesanan'];?></td>
                    <td width='20%'><?php echo $pemesanan['id_pengguna'];?>
                    </td>
                  </tr>
                  <?php }?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Kode</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Id Pengguna</th>

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

  
