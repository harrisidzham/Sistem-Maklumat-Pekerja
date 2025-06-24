<?php include 'config.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class=class1>
    <header>
    <p>ANISHOLDINGS SDN.BHD</p><br>
    <a href="tambah.php" class="btn btn-primary mb-3">ADD</a>
    </header>

    <h2>Senarai Pekerja</h2>

    <table class="table-bordered">
    <tr><th>ID</th><th>NAMA</th><th>NO KP</th><th>NO HP</th><th>JANTINA</th><th></th></tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM pekerja");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama_pekerja']}</td>
                <td>{$row['no_kp']}</td>
                <td>{$row['no_hp']}</td>
                <td>{$row['jantina']}</td>
                <td>
                    <a href='kemaskini.php?id={$row['id']}' class='btn btn-sm btn-warning'>UPDATE</a>
                    <a href='padam.php?id={$row['id']}' class='btn btn-sm btn-danger'>DELETE</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>