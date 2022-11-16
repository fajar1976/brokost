<?php
include('../conn/config.php');


$kode_POST['kode_admin'];
$nama_POST['nama'];
$email_POST['email'];
$username_POST['username'];
$katasandi_POST['katasandi'];
$bagian_POST['bagian'];

mysqli_query($koneksi, "INSERT INTO(kode_admin,nama,email,username,katasandi,bagian) 
            value('$kode',$nama','$email','$username','$katasandi','$bagian')");
 header('location:auto_increment.php');
?>