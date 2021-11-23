<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require "koneksi.php";
$db_latihanlsp = read("SELECT * FROM user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <button><a href="tambah.php">tambah user</a></button>

    <title>Tampilan Data</title>
</head>
<body>
    <h1>Data User</h1>
    <table border="1" cellpadding = "10" cellspacing = "0">
       <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>hapus/ubah</th>
       </tr>

       <?php $nomor = 1; ?>
       <?php foreach ($db_latihanlsp as $row): ?>
       <tr>
           <td><?= $row['id'] ?></td>
           <td><?= $row['nama'] ?></td>
           <td><?= $row['email'] ?></td>
           <td><?= $row['username'] ?></td>
           <td><?= $row['password'] ?></td>
           <td>
                <a href="hapus.php?id=<?= $row["id"]; ?>" style="text-decoration:none" onclick="return confirm 
                ('yakin?');">hapus</a>
                <a href="ubah.php ?id=<?= $row["id"]; ?>" style="text-decoration:none;">ubah</a>
           </td>
       </tr>
       <?php $nomor++?>
       <?php endforeach; ?>
       </table>
    
</body>
</html>