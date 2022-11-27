<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemilik Kos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <style>
        .container {
            max-width: 800px;
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
                Data Pemilik Kos
            </div>
            <div class="card-body">
                <!-- LOKASI TEXT PENCARIAN -->
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="<?php echo $katakunci ?>" name="katakunci" placeholder="Masukkan Kata Kunci" aria-label="Masukkan Kata Kunci" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
                <!-- MODAL -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    + Tambah Data Pemilik
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Pemilik</h5>
                                <button type="button" class="btn-close tombol-tutup" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- KALAU ERROR -->
                                <div class="alert alert-danger error" role="alert" style="display: none;">
                                </div>
                                <!-- KALAU SUKSES -->
                                <div class="alert alert-primary sukses" role="alert" style="display: none;">
                                </div>
                                <!-- FORM INPUT DATA -->
                                <input type="hidden" id="inputId">
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
                                        <input type="text" class="form-control" id="inputUsername">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="inputKatasandi" class="col-sm-2 col-form-label">Katasandi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputKatasandi">
                                    </div>
                                </div>
                                <!-- <div class="mb-3 row">
                                    <label for="inputBidang" class="col-sm-2 col-form-label">Bidang</label>
                                    <div class="col-sm-10">
                                        <select id="inputBidang" class="form-select">
                                            <option value="finance">Finance</option>
                                            <option value="marketing">Marketing</option>
                                            <option value="hr">HR</option>
                                        </select>
                                    </div>
                                </div> -->
                                <!-- <div class="mb-3 row">
                                    <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputAlamat">
                                    </div>
                                </div> -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary tombol-tutup" data-bs-dismiss="modal">Tutup</button>
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
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dataPemilik as $k => $v) {
                            $nomor = $nomor + 1;
                        ?>
                            <tr>
                                <td><?php echo $nomor ?></td>
                                <td><?php echo $v['nama_pemilik'] ?></td>
                                <td><?php echo $v['alamat'] ?></td>
                                <td><?php echo $v['no_hp'] ?></td>
                                <td><?php echo $v['email'] ?></td>
                                <td><?php echo $v['username'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="edit(<?php echo $v['id_pemilik'] ?>)">Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="hapus(<?php echo $v['id_pemilik'] ?>)">Delete</button>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php
                $linkPagination = $pager->links();
                $linkPagination = str_replace('<li class="active">', '<li class="page-item active">', $linkPagination);
                $linkPagination = str_replace('<li>', '<li class="page-item">', $linkPagination);
                $linkPagination = str_replace("<a", "<a class='page-link'", $linkPagination);
                echo $linkPagination;
                ?>
            </div>
        </div>
    </div>
    <!-- SCRIPT JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        function hapus($id_pemilik) {
            var result = confirm('Yakin mau melakukan proses delete');
            if (result) {
                window.location = "<?php echo site_url("cpemilik/hapus") ?>/" + $id_pemilik;
            }
        }

        function edit($id_pemilik) {
            $.ajax({
                url: "<?php echo site_url("cpemilik/edit") ?>/" + $id_pemilik,
                type: "get",
                success: function(hasil) {
                    var $obj = $.parseJSON(hasil);
                    if ($obj.$id_pemilik != '') {
                        $('#inputId').val($obj.id_pemilik);
                        $('#inputNama').val($obj.nama_pemilik);
                        $('#inputAlamat').val($obj.alamat);
                        $('#inputTelepon').val($obj.no_hp);
                        $('#inputEmail').val($obj.email);
                        $('#inputuUsername').val($obj.username);
                        $('#inputuKatasandi').val($obj.katasandi);
                    }
                }

            });
        }

        function bersihkan() {
            $('#inputId').val('');
            $('#inputNama').val('');
            $('#inputAlamat').val('');
            $('#inputTelepon').val('');
            $('#inputEmail').val('');
            $('#inputUsername').val('');
            $('#inputKatasandi').val('');
        }
        $('.tombol-tutup').on('click', function() {
            if ($('.sukses').is(":visible")) {
                window.location.href = "<?php echo current_url() . "?" . $_SERVER['QUERY_STRING'] ?>";
            }
            $('.alert').hide();
            bersihkan();
        });

        $('#tombolSimpan').on('click', function() {
            var $id_pemilik = $('#inputId').val();
            var $nama_pemilik = $('#inputNama').val();
            var $alamat = $('#inputAlamat').val();
            var $no_hp = $('#inputTelepon').val();
            var $email = $('#inputEmail').val();
            var $username = $('#inputUsername').val();
            var $katasandi = $('#inputKatasandi').val();


            $.ajax({
                url: "<?php echo site_url("cpemilik/simpan") ?>",
                type: "POST",
                data: {
                    id_pemilik: $id_pemilik,
                    nama_pemilik: $nama_pemilik,
                    alamat: $alamat,
                    no_hp: $no_hp,
                    email: $email,
                    username: $username,
                    katasandi: $katasandi
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
            bersihkan();

        });
    </script>
</body>

</html>
<!-- https://github.com/fajar1976/brokost.git -->