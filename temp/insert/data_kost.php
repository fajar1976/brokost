<?php
include('../../conn.config.php')
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $fasilitas = $_GET['fasilitas'];
    $ukuran = $_GET['ukuran'];
    $lantai = $_GET['lantai'];
    $harga = $_GET['harga'];
    $alamat = $_GET['alamat'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_kost(id_kost, 
                                                        kode_kost, 
                                                        nama, alamat, 
                                                        fasilitas, 
                                                        ukuran, 
                                                        lantai, 
                                                        lantai, 
                                                        harga, 
                                                        id_pemilik, 
                                                        id_jenis) 
                                                VALUES('',
                                                      '$nama',
                                                      '$alamat',
                                                      '$fasilitas',
                                                      '$ukuran',
                                                      '$lantai',
                                                      '$harga',
                                                      '$alamat',
                                                      '',
                                                      '')");

header('Location: ../index.php?page=kost');
?>