<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample Auto Kode</title>
</head>
<body>
<?php

include('../conn/config.php');

$query = mysqli_query($koneksi, "SELECT max(kode_admin) AS maxKode FROM tb_admin");
$data = mysqli_fetch_array($query);

$kode=$data['maxKode'];
    // $kode++
    $kodeauto=(int) substr($kode,2,4);
    $kodeauto++;

    $ket="AD";
    $kode=$ket .sprintf("%04s",$kodeauto);

?>

<form method="POST" action="simpan.php">
    <label> Kode Admin </label>
    <input type="text" name="kode_admin" required value="<?=$kode;?>" readonly>

    <br><br>
    <label> nama </label>
    <input type="text" name="nama" required >

    <br><br>
    <label> email </label>
    <input type="text" name="email" required >

    <br><br>
    <label> username </label>
    <input type="text" name="username" required >

    <br><br>
    <label> katasandi </label>
    <input type="text" name="katasandi" required >

    <br><br>
    <label> bagian </label>
    <input type="text" name="bagian" required >

    <br>
    <input type="submit" value="Simpan">


</form>
<br><hr><hr>
<br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>kode</th>
                <th>nama</th>
                <th>email</th>
                <th>username</th>
                <th>katasandi</th>
                <th>bagian</th>
            </tr>
        </thead>

            <tbody>
                <?php
                $query=mysqli_query($koneksi, "SELECT * from tb_admin");
                $no=1;
                while($admin=mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo$no++;?></td>
                    <td><?php echo $admin['kode_admin'];?></td>
                    <td><?php echo $admin['nama'];?></td>
                    <td><?php echo $admin['email'];?></td>
                    <td><?php echo $admin['username'];?></td>
                    <td><?php echo $admin['katasandi'];?></td>
                    <td><?php echo $admin['bagian'];?></td>
                </tr>
                <?php } ?>
                </tbody>
        </table>

                </body>
                </html>