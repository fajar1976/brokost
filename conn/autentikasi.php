<?php
session_start();
include ('config.php');
$username = $_POST['username'];
$password = $_POST['katasandi'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$username' AND katasandi='$password'");

    if(mysqli_num_rows($query)==1){
        header('Location:../temp');
        $user = mysqli_fetch_array($query);
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['level'] = $user['bagian'];

    }else if($username == '' || $password == ''){
        header('Location:../index.php?error=2');
    }
    else{
        header('Location:../index.php?error=1');
    }


?>