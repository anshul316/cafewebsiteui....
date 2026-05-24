<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buransh - Experience Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
        }

        /* Marquee Animation */
        .marquee-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            padding: 10px 0;
            overflow: hidden;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .marquee-text {
            white-space: nowrap;
            display: inline-block;
            color: #fff;
            font-weight: 500;
            animation: marquee 20s linear infinite;
        }

        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        .gallery-title {
            font-family: 'Playfair Display', serif;
            letter-spacing: 2px;
            color: #fff;
        }

        .underline {
            width: 80px;
            height: 3px;
            background: #fff;
            border-radius: 2px;
            margin-top: 10px;
        }

        /* Carousel Ken Burns Animation (Slow Zoom) */
        .carousel-inner {
            border-radius: 25px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }

        .carousel-item img {
            height: 550px;
            object-fit: cover;
            width: 100%;
            transition: transform 8s ease-in-out;
        }

        /* Jab slide active ho tab zoom hoga */
        .carousel-item.active img {
            transform: scale(1.15);
        }

        /* Floating Buttons Animation */
        .floating-icon {
            animation: float 3s ease-in-out infinite;
        }

        .floating-icon:nth-child(2) {
            animation-delay: 1.5s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .floating-icon img {
            width: 55px;
            height: 55px;
            transition: 0.3s;
        }

        .floating-icon img:hover {
            transform: scale(1.2) rotate(10deg);
        }

        @media(max-width:768px){
            .carousel-item img { height: 350px; }
        }
    </style>
</head>

<body>

<div class="main-wrapper">

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent pt-3" data-aos="fade-down">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://buranshcafe.com/BuranshBannerWhite-removebg-preview.png" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#buranshNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="buranshNav">
                <ul class="navbar-nav ms-auto fw-bold">
                    <li class="nav-item"><a class="nav-link px-3" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="service.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link px-3 active" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="contactus.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="marquee-container">
        <div class="marquee-text">
            🌄 Welcome to Buransh Cafe & Camping | Experience Nature Like Never Before | Book Your Stay Now | Call: +91 9808064381 🌄 &nbsp;&nbsp; | &nbsp;&nbsp; 🌄 Experience Mussoorie's Hidden Gem 🌄
        </div>
    </div>

    <section class="container py-5">
        <div class="text-center mb-5" data-aos="zoom-in">
            <h1 class="gallery-title display-4">Experience Gallery</h1>
            <div class="underline mx-auto"></div>
        </div>

        <div id="galleryCarousel" 
             class="carousel slide carousel-fade shadow-lg" 
             data-bs-ride="carousel" 
             data-bs-interval="4000"
             data-aos="fade-up"
             data-aos-delay="200">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://buranshcafe.com/WhatsApp%20Image%202025-04-29%20at%208.46.28%20PM.jpeg" alt="Camping View">
                </div>
                <div class="carousel-item">
                    <img src="https://buranshcafe.com/WhatsApp%20Image%202025-03-25%20at%206.42.23%20AM.jpeg" alt="Buransh Cafe Sign">
                </div>
                <div class="carousel-item">
                    <img src="https://buranshcafe.com/WhatsApp%20Image%202025-03-25%20at%2012.24.15%20PM.jpeg" alt="Tents">
                </div>
                <div class="carousel-item">
                    <img src="https://buranshcafe.com/WhatsApp%20Image%202025-03-24%20at%208.57.34%20PM.jpeg" alt="Tents View">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <div class="floating-container">
        <a href="https://wa.me/919808064381" class="floating-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png" alt="WhatsApp">
        </a>
        <a href="tel:+919808064381" class="floating-icon">
            <img src="https://cdn-icons-png.flaticon.com/512/3616/3616215.png" alt="Call">
        </a>
    </div>

</div>

<?php require 'footer.php'?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
        once: true
    });
</script>

</body>
</html>