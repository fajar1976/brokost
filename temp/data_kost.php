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
                  <th>Pemilik</th>
                  <th>jenis</th>
                  <th>Minimal</th>
                  <th>Harga</th>


                </tr>
              </thead>

              <tbody>
                <?php
                $query = mysqli_query($koneksi, "SELECT * from tb_pemilik_kost AS pemilik, 
                                                                    tb_kost AS kamar,
                                                                    tb_jenis_kost AS jenis 
                                                     WHERE pemilik.id_pemilik = kamar.id_pemilik 
                                                     AND kamar.id_jenis=jenis.id_jenis");
                while ($kost = mysqli_fetch_array($query)) {

                ?>

                  <tr>
                    <td><?php echo $kost['id_kost']; ?></td>
                    <td><?php echo $kost['nama_kost']; ?></td>
                    <td width='15%'><?php echo $kost['alamat']; ?></td>
                    <td width='15%'><?php echo $kost['fasilitas']; ?></td>
                    <td><?php echo $kost['ukuran']; ?></td>
                    <td><?php echo $kost['lantai']; ?></td>
                    <td><?php echo $kost['nama_pemilik']; ?></td>
                    <td><?php echo $kost['nama_jenis']; ?></td>
                    <td><?php echo $kost['minimal_bulan']; ?> Bulan</td>
                    <td><?php echo $kost['harga']; ?></td>


                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Fasilitas</th>
                  <th>Ukuran</th>
                  <th>Lantai</th>
                  <th>Pemilik</th>
                  <th>jenis</th>
                  <th>Minimal</th>
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
        <h4 class="modal-title">Masukan Data Kos</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form method="get" action="insert/data_kost.php">
        <div class="modal-body">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nama Kos" name="nama_kost" required>
            </div>
            <div class="form-group col-md-4">
              <!-- <label for="inputState">State</label> -->
              <select name="id_jenis" class="form-control">
                <option selected>Pilih Jenis</option>


              </select>
            </div>
            <div class="form-group col-md-4">
              <!-- <label for="inputState">State</label> -->
              <select id="inputState" class="form-control">
                <option selected>Perbulan</option>
                <option>3 Bulan</option>
                <option>6 Bulan</option>
                <option>9 Bulan</option>
                <option>12 Bulan</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="inputAddress" placeholder="Alamat" name="alamat" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="inputAddress" placeholder="Fasilitas" name="fasilitas" required>
          </div>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Ukuran" name="ukuran" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Lantai" name="lantai" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Harga" name="harga" required>
            </div>
            <div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->