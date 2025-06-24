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
    <header>
    <a href="index.php" class="btn btn-primary mb-3">BACK</a>
    </header>
    <br>
    <br>
    
    <div class=form-table>
        <h2>ADD MAKLUMAT</h2>
        <form method="POST">
        <h4>IC</h4>
        <input type="text" name="no_kp" class="form-control mb-2" placeholder="IC" required>
        <h4>NAMA</h4>
        <input type="text" name="nama_pekerja" class="form-control mb-2" placeholder="NAMA" required>
        <h4>HP</h4>
        <input type="text" name="no_hp" class="form-control mb-2" placeholder="HP" required>
        <h4>JANTINA</h4>
        <input type="text" name="jantina" class="form-control mb-2" placeholder="Jantina" required>
        <button class="btn btn-success" name="submit">Simpan</button>
        <button type="reset" class="btn btn-danger">Clear</button>
    </form>
    <?php
        if (isset($_POST['submit'])) {
        $no_kp = $_POST['no_kp'];
        $nama_pekerja = $_POST['nama_pekerja'];
        $no_hp = $_POST['no_hp'];
        $jantina = $_POST['jantina'];
        mysqli_query($conn, "INSERT INTO pekerja (no_kp, nama_pekerja, jantina, no_hp) VALUES ('$no_kp','$nama_pekerja','$jantina','$no_hp')");
        echo "<script>window.location='index.php'</script>";
    }
    ?>
</body>
</html>