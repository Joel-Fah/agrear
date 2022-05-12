<!-- PHP script -->
<?php
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrear &middot; Register</title>

    <!-- CSS files -->
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    <!-- Start Header Section -->
    <header>
        <section class="header">
            <nav class="navbar">
                <div class="nav-brand">
                    <img src="./img/logo.png" alt="agrear logo">
                </div>
                <div class="nav-tabs">
                    <ul class="nav-list">
                        <li class="nav-list-item"><a href="./index.php" class="active">Home</a></li>
                        <li class="nav-list-item"><a href="" class="nav-link">Agriculture</a></li>
                        <li class="nav-list-item"><a href="" class="nav-link">Rearing</a></li>
                        <li class="nav-list-item"><a href="./login.php" class="nav-btn">Login</a></li>
                        <li class="nav-list-item"><a href="#" class="nav-btn-outline">Register</a></li>
                    </ul>
                </div>
            </nav>

            <!-- Start Hero Section -->
            <div class="register-hero">
                <div class="register-form">
                    <h2>Registration Form</h2>
                    <form action="register.php" method="post">
                        <?php include('errors.php'); ?>
                        <div class="input-field">
                            <label for="">Username</label> <br>
                            <input type="text" name="username" class="form-input" value="<?php echo $username; ?>" placeholder="Enter your name">
                        </div>
                        <div class="input-field">
                            <label for="">Email</label> <br>
                            <input type="email" name="email" class="form-input" value="<?php echo $email; ?>" placeholder="Enter your email">
                        </div>
                        <div class="input-field">
                            <label for="">Password</label> <br>
                            <input type="password" name="password_1" class="form-input" placeholder="Enter your password">
                        </div>
                        <div class="input-field">
                            <label for="">Confirm Password</label> <br>
                            <input type="password" name="password_2" class="form-input" placeholder="Re-enter password">
                        </div>
                        <input type="submit" value="Sign Up" name="reg_user" class="form-btn">
                    </form>
                </div>
                <div class="register-img">
                    <img src="./img/register.png" alt="">
                    <!-- <img src="./img/Country-side.gif" alt=""> -->
                </div>
            </div>
            <!-- End Hero Section -->
        </section>
    </header>
    <!-- End Header Section -->
</body>
</html>