<?php
include 'control/config.php';
include 'control/function.php';

if(isset($_POST['register'])){
    if (Registrasi($_POST) > 0){
        echo "<script> alert('user baru berhasil dibuat')</script>";
    } else {
        echo mysqli_error($db);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/registrasi.css">
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <div class="app" ALIGN="center">
    <h1>Sign Up</h1>
    <fieldset>
        <form action="" method="POST">
            <ul>
                <td>
                    <input type="text" name="username" id="username" placeholder="username">
                </td>
                <td>
                    <input type="password" name="password" id="password" placeholder="passsword">
                </td>
                <td>
                    <input type="password" name="password2" id="password2" placeholder="confirm password">
                </td>   
                <td>
                    <input type="text" name="nama" id="nama" placeholder="nama"><br><br><br>
                </td>
                <input type="submit" name="register" value="Sign Up"/><br><br>
                <a href="login.php">Login</a>
            </ul>
        </form>
    </fieldset>
    </div>
</body>
</html>