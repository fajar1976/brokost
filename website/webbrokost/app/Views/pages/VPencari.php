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
                Data Pencari Kos
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
                                <h5 class="modal-title" id="exampleModalLabel">Data Pencari</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                            </div>
                            <div class="modal-body">
                                <!-- Jika Eroor -->
                                <div class="alert alert-success sukses" role="alert" style="display: none;">
                                </div>
                                <!-- Jika Sukses -->
                                <div class="alert alert-danger error" role="alert" style="display: none;">
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
                                    <label for="inputJenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputJenisKelamin">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputPekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPekerjaan">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputTelepon" class="col-sm-2 col-form-label">Telepon</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputTelepon">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <!-- <select id="inputUsername" class="form-select">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select> -->
                                        <input type="text" class="form-control" id="inputUsername">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputKatasandi" class="col-sm-2 col-form-label">Katasandi</label>
                                    <div class="col-sm-10">
                                        <!-- <select id="inputMinimalBulan" class="form-select">
                                            <option value="4">4</option>
                                            <option value="3">3</option>
                                        </select> -->
                                        <input type="text" class="form-control" id="inputKatasandi">
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
                            <th>Jenis Kelamin</th>
                            <th>Pekerjaan</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nama</td>
                            <td>Alamat</td>
                            <td>Fasilitas</td>
                            <td>Ukuran</td>
                            <td>Lantai</td>
                            <td>Harga</td>
                            <td>Pemilik</td>

                            <td>
                                <button type="button" class="btn btn-warning btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>

                            </td>
                        </tr>
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
            var $Nama = $('#inputNama').val();
            var $Alamat = $('#inputAlamat').val();
            var $Fasilitas = $('#inputFasilitas').val();
            var $Ukuran = $('#inputUkuran').val();
            var $Lantai = $('#inputLantai').val();
            var $Harga = $('#inputHarga').val();
            var $Jenis = $('#inputJenis').val();
            var $MinimalBulan = $('#inputMinimalBulan').val();

            $.ajax({
                url: "<?php echo site_url("ckost/simpan") ?>",
                type: "POST",
                data: {
                    Nama: $Nama,
                    Alamat: $Alamat,
                    Fasilitas: $Fasilitas,
                    Ukuran: $Ukuran,
                    Lantai: $Lantai,
                    Harga: $Harga,
                    Jenis: $Jenis,
                    MinimalBulan: $MinimalBulan

                },
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.sukses == false) {
                        $('.error').hide();
                        $('.error').show();
                        $('.error').html($obj.error);
                    } else {
                        $('.sukses').hide();
                        $('.sukses').show();
                        $('.sukses').html($obj.sukses);

                    }
                }
            });

        });
    </script>
</body>

</html>