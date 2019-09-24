<?php
session_start();
if (isset($_POST['login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];

    if ($a == "erik" && $b == "12345") {
        $_SESSION['login'] = $a;
        echo "<h1>Anda berhasil masuk</h1>";
        echo "<a href='pilhan1.php'>Pilihan 1</a>|";
        echo "<a href='pil2.php'>palihan 2</a>|";
        echo "<a href='pil3.php'>Pilihan 3</a>|";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=lo.php> Login </a>");
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
        <h2>Silahkan Login bosqu</h2>
        <table>
        <tr>
        <td>Nama lengkap <input type="text" name="user"><br></td>
        </tr>
        <tr>
        <td>Kata sandi <input type="password" name="pass"><br></td>
        </tr>
            <tr>
            <td> <input type="submit" name="login" value="Log In"></td>
            </tr>
            </table>
        </form>
    </body>

    </html>
<?php
}
?>