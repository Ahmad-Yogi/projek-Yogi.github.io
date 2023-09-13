<?php 
    if (isset($_POST["submit"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
            header("Location: home.php");
            exit;
        }else{
            $error = true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style type="text/css">
        body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
        max-width: 400px;
        margin: 0 auto;
    }

    .container h2 {
        text-align: center;
        padding : 10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #3f69a8;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>
</head>
<body>
    <div class="container">
        <form class="login-form" action="" method="post">
            <h2>Selamat Datang</h2>
            <h2>Di Manajemen Keuangan Masjid</h2>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit" name="submit">Masuk</button>
        </form>
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic; text-align: center;"> Username / Password Salah!!</p>
         <?php endif; ?>
    </div>
</body>
</html>