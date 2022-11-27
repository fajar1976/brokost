<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .container {
            max-width: 900px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- CONTAINER -->
    <div class="container">
        <!-- CARD -->
        <div class="card">
            <div class="card-header bg-secondary text-white">
                Data Kost
            </div>
            <div class="card-body">
                <!-- Pencarian -->
                <form action="" method="get">
                    <div class="input-group mb-3">

                        <input type="text" class="form-control" name="katakunci" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>

                    </div>
                </form>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Masukan Data
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Kos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>
                            <div class="modal-body">
                                <!-- Jika Eroor -->
                                <div class="alert alert-danger error" role="alert" style="display: none;">
                                </div>
                                <!-- Jika Sukses -->
                                <div class="alert alert-success sukses" role="alert" style="display: none;">
                                </div>
                                <!-- Form Masukan Data -->
                                <div class="mb-3 row">
                                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNama">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputAlamat">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputFasilitas" class="col-sm-2 col-form-label">Fasilitas</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputFasilitas">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputUkuran" class="col-sm-2 col-form-label">Ukuran</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputUkuran">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputLantai" class="col-sm-2 col-form-label">Lantai</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputLantai">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputHarga" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputHarga">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputJenis" class="col-sm-2 col-form-label">Jenis Kos</label>
                                    <div class="col-sm-10">
                                        <!-- <select id="inputJenis" class="form-select">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select> -->
                                        <input type="text" class="form-control" id="inputJenis">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPemilik" class="col-sm-2 col-form-label">Pemilik Kos</label>
                                    <div class="col-sm-10">
                                        <!-- <select id="inputMinimalBulan" class="form-select">
                                            <option value="4">4</option>
                                            <option value="3">3</option>

                                        </select> -->
                                        <input type="text" class="form-control" id="inputPemilik">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Fasilitas</th>
                            <th>Ukuran</th>
                            <th>Lantai</th>
                            <th>Harga</th>
                            <th>id Pemilik</th>
                            <th>id Jenis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dataKost as $k => $v) {
                        ?>
                            <tr>
                                <td></td>
                                <td><?php echo $v['nama_kost'] ?></td>
                                <td><?php echo $v['alamat'] ?></td>
                                <td><?php echo $v['fasilitas'] ?></td>
                                <td><?php echo $v['ukuran'] ?></td>
                                <td><?php echo $v['lantai'] ?></td>
                                <td><?php echo $v['harga'] ?></td>
                                <td><?php echo $v['id_pemilik'] ?></td>
                                <td><?php echo $v['id_jenis'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm">Hapus</button>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- SCRIPT JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>
        $('#tombolSimpan').on('click', function() {
            var $nama = $('#inputNama').val();
            var $alamat = $('#inputAlamat').val();
            var $fasilitas = $('#inputFasilitas').val();
            var $ukuran = $('#inputUkuran').val();
            var $lantai = $('#inputLantai').val();
            var $harga = $('#inputHarga').val();
            var $jenis = $('#inputJenis').val();
            var $pemilik = $('#inputPemilik').val();

            $.ajax({
                url: "<?php echo site_url("ckost/simpan") ?>",
                type: "POST",
                data: {
                    nama_kost: $nama,
                    alamat: $alamat,
                    fasilitas: $fasilitas,
                    ukuran: $ukuran,
                    lantai: $lantai,
                    harga: $harga,
                    id_jenis: $jenis,
                    id_pemilik: $pemilik

                },
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.sukses == false) {
                        $('.sukses').hide();
                        $('.error').show();
                        $('.error').html($obj.error);
                    } else {

                        $('.error').hide();
                        $('.sukses').show();
                        $('.sukses').html($obj.sukses);

                    }
                }
            });

        });
    </script>
</body>

</html>