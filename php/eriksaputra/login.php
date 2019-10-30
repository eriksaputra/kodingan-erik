
<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];

    if ($a == "erik" && $b == "123456") {
        $_SESSION['login'] = $a;

        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "Selamat datang di Erick Store <a href='index.php'> Klik</a> Supaya Bisa Masuk Home";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
        <title>Selamat datang</title>
    </head>

    <body> 
        <nav>
        </nav>
        <form action="" method="post">
        <center><h2>Selamat datang</h2></center>
         <table>
            <tr>
                <td>Username : <input type="text" name="user"></td><br>
                <td>Password : <input type="password" name="pass"></td><br>
                <td><input type="submit" name="Login" value="Log In"></td>
            </tr>
         </table>
        </form>
    </body>

    </html>
<?php
}
?>
