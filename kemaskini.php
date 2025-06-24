<?php include 'config.php'; $id = $_GET['id']; $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pekerja WHERE id=$id")); ?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Kemakini Pekerja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <header>
    <a href="index.php" class="btn btn-primary mb-3">BACK</a>
    </header>

    <div class=form-update>
        <h2>UPDATE MAKLUMAT <p><?php echo "" ?><p></h2>
        <form method="POST">
            <input type="number" name="no_kp" value="<?= $data['no_kp'] ?>" class="form-control mb-2" required>
            <input type="text" name="nama_pekerja" value="<?= $data['nama_pekerja'] ?>" class="form-control mb-2" required>
            <input type="text" name="no_hp" value="<?= $data['no_hp'] ?>" class="form-control mb-2" required>
            <select id="jantina" name="jantina" class="form-control mb-2" required>
                <option value="Lelaki" <?= $data['jantina'] == 'Lelaki' ? 'selected' : '' ?>>Lelaki</option>
                <option value="Perempuan" <?= $data['jantina'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select>
            <button class="btn btn-primary" name="submit">Kemaskini</button>
            <button type="reset" class="btn btn-danger">Clear</button>
        </form>
    <?php
    if (isset($_POST['submit'])) {
        mysqli_query($conn, "UPDATE pekerja SET nama_pekerja='$_POST[nama_pekerja]', no_kp='$_POST[no_kp]', no_hp='$_POST[no_hp]', jantina='$_POST[jantina]' WHERE id=$id");
        echo "<script>window.location='index.php'</script>";
    }
    ?>
    </div>
</body>
</html>
