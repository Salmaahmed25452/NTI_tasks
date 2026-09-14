<?php

session_start();
include('validation.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $errors = [];

    if (!isset($_SESSION['email'])) {
        $fields = ['email', 'password'];
    } else {
        $fields = ['username', 'password', 'email', 'phone', 'facebook', 'twitter', 'instagram'];
    }

    foreach ($fields as $field) {
        $validate = $validates[$field];
        $value = filter_input(INPUT_POST, $field, $validate['filters'], $validate['my_options']);

        if (empty($_POST[$field])) {
            $errors[$field] = "You Must Fill $field";
        } elseif ($value === false) {
            $errors[$field] = $validate['error'];
        }
    }

    if ($errors) {
        $_SESSION['errors'] = $errors;
        header('location:form.php');
        exit();
    }

    if (!isset($_SESSION['email'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('location:form.php');
        exit();
    }

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['facebook'] = $_POST['facebook'];
    $_SESSION['twitter'] = $_POST['twitter'];
    $_SESSION['instagram'] = $_POST['instagram'];

    header('location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account - Scentora</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="products_nav">
        <div class="logo">
            <i class="fa-solid fa-spray-can-sparkles"></i>
            Scentora
        </div>
        <input type="checkbox" id="menu">
        <label for="menu">
            <i class="fa-solid fa-bars"></i>
        </label>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="all_product.php">All Products</a>
            </li>
            <li>
                <a href="form.php">Account</a>
            </li>
        </ul>
    </nav>

    <div class="account_page">
        <h1>My Account</h1>

        <?php
        if (isset($_SESSION['errors'])) {
            foreach ($_SESSION['errors'] as $error) {
        ?>
                <div class="alert alert-danger w-75 m-auto my-3">
                    <?php echo $error; ?>
                </div>
        <?php
            }
            unset($_SESSION['errors']);
        }
        ?>

        <?php
        if (!isset($_SESSION['email'])) {
        ?>
            <form method="post" action="form.php" class="account_form" novalidate>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </form>
        <?php
        } else {
        ?>
            <form method="post" action="form.php" class="account_form" novalidate>
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Phone Number</label>
                    <input type="text" name="phone" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Facebook Account URL</label>
                    <input type="url" name="facebook" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Twitter Account URL</label>
                    <input type="url" name="twitter" class="form-control">
                </div>
                <div class="mb-3">
                    <label>Instagram Account URL</label>
                    <input type="url" name="instagram" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
                <a href="logout.php" class="btn btn-danger">
                    Logout
                </a>
            </form>
        <?php
        }
        ?>
    </div>
</body>
</html>