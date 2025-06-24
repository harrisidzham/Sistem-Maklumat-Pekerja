<?php include 'config.php'; session_start(); if (isset($_POST['login'])) {
    $username = $_POST['username']; $password = md5($_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM admin_login WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($result) > 0) { $_SESSION['pekerja'] = $username; header("Location: index.php"); }
    else { $error = "Login gagal."; }
} ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css"></head>
<body class="login-bg">
    <div class="login-box">
        <h3>Login Pelajar</h3>
        <?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="POST">
        <input type="text" name="username" class="form-control mb-2" placeholder="Nama Pengguna" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Kata Laluan" required>
        <button name="login" class="btn btn-success w-100">Login</button>
    </form>
    </div>   
</body>
</html>