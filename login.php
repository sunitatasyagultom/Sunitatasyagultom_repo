<?php
session_start();
require 'adminacc/koneksi.php';

if (!isset($_SESSION['username'])) {
} else {
    header('location:admin.php');
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cekuname = mysqli_query($conn, "select * from admin where username='$username' and password='$password'");
    $cekrow = mysqli_num_rows($cekuname);

    if ($cekrow > 0) {

        $_SESSION['username'] = $username;
        header('location:admin.php');
    } else {
        echo 'Password salah';
        header('location:login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login As Admin</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <div class="text-center">
                <img src="img/logo.jpeg" alt="Logo" class="img-logo">
                <h1 class="h5 text-success">PT CISADANI SAWIT RAYA</h1>
                <h1 class="h6 text-success"><b>Bersihkan Sampai Tuntas</b></h1>
            </div>
        </header>

        <!-- Main -->
        <div id="main">

            <!-- First Section -->
            <section id="first" class="main special">
                <header class="major">
                    <img src="img/OIP.jpeg" alt="Logo" class="img-logo">
                    <h1 class="h5 text-success">Admin</h1>
                </header>


                <form method="post">
                    <div class="row gtr-uniform">
                        <div class="col-6 ">
                            Username
                            <input type="text" name="username" placeholder="Username" />
                        </div>
                        <div class="col-6">
                            Password
                            <input type="password" name="password" placeholder="Password" />
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><button type="submit" class="btn btn-success" name="login">Login</button></li>
                                <li><a href="index.php" class="btn btn-success">Kembali</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <!-- Footer -->
        <footer id="footer">
            <p>Sunita tasya gultom<br>222510087<br>4TIC</p>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>