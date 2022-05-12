<!-- PHP Script -->
<?php
    session_start();

    if (!$_SESSION['connected']){
        $_SESSION['msg'] = "You must log in first.";
        header('location: login.php');
    }

    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agrear</title>

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
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
                        <li class="nav-list-item"><a href="#" class="active">Home</a></li>
                        <li class="nav-list-item"><a href="" class="nav-link">Agriculture</a></li>
                        <li class="nav-list-item"><a href="" class="nav-link">Rearing</a></li>
                        <?php if (isset($_SESSION['username'])) : ?>
                            <li class="nav-list-item"><a href="./index.php" class="nav-btn"><?php echo $_SESSION['username']; ?></a></li>
                            <li class="nav-list-item"><a href="index.php?logout='1'" class="nav-btn-outline">Logout</a></li>
                        <?php else : ?>
                            <li class="nav-list-item"><a href="./login.php" class="nav-btn">Login</a></li>
                            <li class="nav-list-item"><a href="./register.php" class="nav-btn-outline">Register</a></li>
                        <?php endif ?>
                    </ul>
                </div>
            </nav>

            <!-- Start Hero Section -->
            <div class="hero">
                <div class="hero-text">

                    <!-- Notification message -->
                    <?php if (isset($_SESSION['succes'])) : ?>
                        <div class="success">
                            <h6>
                                <?php 
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                ?>
                            </h6>
                        </div>
                    <?php endif ?>
                    <!-- End notification -->

                    <!-- Logged in user -->
                    <h1>Agrear<span>.</span></h1>
                    <p>
                        Welcome to the website of our commune of Yaounde I. On this platform we present to you our various agriculture and
                        animal husbandry services. Feel free to browse our site from top to bottom and leave your opinions.
                    </p>
                    <a href="" class="hero-btn">Discover</a>
                </div>
                <div class="hero-img">
                    <img src="./img/Country-side.png" alt="">
                    <!-- <img src="./img/Country-side.gif" alt=""> -->
                </div>
            </div>
            <!-- End Hero Section -->
        </section>
    </header>
    <!-- End Header Section -->

    <!-- Start Info Section -->
    <div class="container">
        <section id="info">
            <div class="info-item">
                <div class="info-card">
                    <h2>Agriculture</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, quam corrupti corporis iste perferendis atque consectetur
                        temporibus! Laboriosam esse obcaecati earum dolorum eum aspernatur expedita. Aliquid soluta dolorum officiis sapiente.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, quam corrupti corporis iste perferendis atque consectetur
                        temporibus! Laboriosam esse obcaecati earum dolorum eum aspernatur expedita. Aliquid soluta dolorum officiis sapiente.
                    </p>
                    <a href="" class="info-btn">Discover</a>
                </div>
                <div class="info-img">
                    <img src="./img/img1.png" alt="">
                </div>
            </div>

            <div class="info-item">
                <div class="info-img">
                    <img src="./img/img2.png" alt="">
                </div>
                <div class="info-card2">
                    <h2>Animal Rearing</h2>
                    <p>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, quam corrupti corporis iste perferendis atque consectetur
                        temporibus! Laboriosam esse obcaecati earum dolorum eum aspernatur expedita. Aliquid soluta dolorum officiis sapiente.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed, quam corrupti corporis iste perferendis atque consectetur
                        temporibus! Laboriosam esse obcaecati earum dolorum eum aspernatur expedita. Aliquid soluta dolorum officiis sapiente.
                        <br>
                        <br>
                        <a href="" class="info-btn">Discover</a>
                    </p>
                </div>
            </div>
        </section>

        <section id="galery">
            <div class="galery-title">
                <h1>Have a first <span>sight</span>.</h1>
                <p>
                    It is not always about narrating the whole story to you and trying to explain things to you. Sometimes an image is worth more than a thousand words.
                </p>
            </div>
            <div class="galery-img">
                <div class="col1">
                    <h4 class="head1">The Beauty of...</h4>
                    <img src="./img/agr/img1.webp" alt="">
                    <img src="./img/agr/img2.png" alt="">
                    <img src="./img/agr/img3.jpg" alt="">
                </div>
                <div class="col2">
                    <img src="./img/rea/img1.jpg" alt="">
                    <img src="./img/rea/img2.jpg" alt="">
                    <img src="./img/rea/img3.webp" alt="">
                    <h4 class="head2">Our Pride...</h4>
                </div>
                <div class="col3">
                    <h4 class="head3">Rejoices Us.</h4>
                    <img src="./img/agr/img4.webp" alt="">
                    <img src="./img/agr/img5.jpg" alt="">
                    <img src="./img/agr/img6.webp" alt="">
                </div>
                <div class="col4">
                    <img src="./img/rea/img4.png" alt="">
                    <img src="./img/rea/img5.jpg" alt="">
                    <img src="./img/rea/img8.jpg" alt="">
                    <h4 class="head4">We love Cameroon!</h4>
                </div>
            </div>
        </section>
    </div>
    <!-- End Info Section -->

    <footer>
        <div class="footer-title">
            <h1>Thank<span>s</span> for visiting<span>.</span></h1>
        </div>
        <ul class="footer-list">
            <li class="footer-list-items">
                <a href="https://wa.me/237656997810" class="footer-link">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                </a>
            </li>
            <li class="footer-list-items">
                <a href="https://t.me/JoelFah" class="footer-link">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="bi bi-telegram" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                    </svg>
                </a>
            </li>
            <li class="footer-list-items">
                <a href="https://joel-fah.github.io/joelfah.github.io/" class="footer-link">
                    <svg xmlns="http://www.w3.org/2000/svg"  class="bi bi-globe" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
                    </svg>
                </a>
            </li>
            <li class="footer-list-items">
                <a href="https://github.com/Joel-Fah/agrear" class="footer-link">
                    <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                </a>
            </li>
        </ul>
    </footer>
</body>
</html>