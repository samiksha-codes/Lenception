<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ========== Page Title ========== -->
    <title>Lenception</title>

    <!-- favicons -->
    <link rel="icon" href="../assets/images/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <!-- Icons -->
    <link rel="stylesheet" href="../assets/css/iconoir.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />


    <!-- ========== Start Stylesheet ========== -->

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="../assets/css/aos.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- ========== End Stylesheet ========== -->
    <script src="../../../particles.js/2.0.0/particles.min.js"></script>

</head>

<body>

    <!-- Preloader -->
    <div id='pre-loader' class="pre-loader flex-column justify-content-center align-items-center">

        <div class="d11">

            <div class="d12">

                <div id="load-txt">

                    <h1>LOADING</h1>
                    <span id="percentage">0%</span>

                </div>

                <div class="progress">

                    <div class="progress-inner">

                    </div>


                </div>


            </div>


        </div>

        <div class="pre-footer">

            <p>© 2024 Lenception. All Rights Reserved </p>


        </div>


    </div>

    <!-- End Preloader -->

    <div class="content" id="<?php echo isset($pageId) ? htmlspecialchars($pageId, ENT_QUOTES, 'UTF-8') : 'default'; ?>">


        <!-- Cursor -->
        <div class="cursor"></div>

        <div class="dot"></div>

        <!-- End Cursor -->

        <!-- Ticker -->
        <div id="ticker">
            <div class="space">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>
            <h2 class="marquee">
                <span>Welcome to Lenception! We are a creative portfolio showcasing the uniqueness and diversity of our work.
                </span>
                <span>Welcome to Lenception! We are a creative portfolio showcasing the uniqueness and diversity of our work.
                </span>
                <span>Welcome to Lenception! We are a creative portfolio showcasing the uniqueness and diversity of our work.
                </span>
                <span>Welcome to Lenception We are a creative portfolio showcasing the uniqueness and diversity of our work.
                </span>
            </h2>
        </div>
        <!-- End Ticker -->

        <!-- Header -->
        <header class="d-flex justify-content-between">

            <!-- Logo -->
            <div id="logo">
                <a href="index.php">
                    <img src="../assets/images/logo6.png" alt="logo" class="img-responsive">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="left-sidebar align-self-center">

                <p><a href="index.php" data-word="Home">Home</a></p>
                <span class="line"></span>
                <p><a href="about.php" data-word="About">About</a></p>
                <span class="line"></span>
                <p><a href="portfolio.php" data-word="Portfolio">Portfolio</a></p>
                <span class="line"></span>
                <!-- <p><a href="skills.php" data-word="Skills">Skills</a></p> -->
                <!-- <span class="line"></span> -->
                <p><a href="contact.php" data-word="Contact">Contact</a></p>

            </nav>

            <div class="contact align-items-center">

                <!-- <a href="#"><i class="iconoir-dribbble"></i></a> -->
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="iconoir-instagram"></i></a>

            </div>

            <!-- Mobile Hamburger -->
            <div class="menu-icon-wrapper">

                <div class="menu-icon d-flex flex-column align-items-end">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <div class="mobile-hamburger">
                    <div class="left-sidebar">
                        <p>Menu</p>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="skills.php">Skills</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="social">
                        <p>Social</p>
                        <aside>
                            <a href="#"><i class="iconoir-dribbble"></i></a>
                            <a href="#"><i class="iconoir-twitter"></i></a>
                            <a href="#"><i class="iconoir-instagram"></i></a>
                        </aside>
                    </div>
                </div>

            </div>

        </header>
        <!-- End Header -->