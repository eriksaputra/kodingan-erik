
<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];

    if ($a == "erik" && $b == "123456") {
        $_SESSION['login'] = $a;
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "Selamat datang di Aldi Store Coba<a href='index.php'> Klik</a> Supaya Bisa Masuk Home";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
        <title>Login here...</title>
    </head>

    <body> 
        <nav>
        </nav>
        <form action="" method="post">
            <center><h2>Login Here...</h2></center>
            <center>Username : <input type="text" name="user"><br></center>
            <center>Password : <input type="password" name="pass"><br></center>
            <center><input type="submit" name="Login" value="Log In"></center>
        </form>
    </body>

    </html>
<?php
}
?>
