<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Buransh - Experience the Himalayas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="main-wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent pt-3">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="https://buranshcafe.com/BuranshBannerWhite-removebg-preview.png" alt="Buransh Logo" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#buranshNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="buranshNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link px-3" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="service.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link px-3 active" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="contactus.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="container py-5 mt-lg-5">
            <div class="text-center mb-5" data-aos="fade-down">
                <h1 class="main-title display-4 text-white">About Buransh</h1>
                <div class="underline mx-auto"></div>
            </div>

            <div class="row align-items-center g-5">
                <div class="col-lg-7 text-section text-white" data-aos="fade-right">
                    <p class="lead mb-4">Nestled in the heart of Mussoorie's pristine mountains, Buransh is more than just a cafe and stay - it's a gateway to experiencing the untouched beauty of the Himalayas.</p>
                    <p>Named after the vibrant Buransh flower (Rhododendron) that blooms across these mountains, our establishment offers an authentic mountain experience that stays with you forever.</p>
                    <p>We believe in sustainable tourism that respects the local environment and culture. Our services are designed to help you connect with nature while enjoying modern comfort and hospitality.</p>
                    <p>Our team of local guides and naturalists are passionate about sharing the beauty and biodiversity of this region, ensuring every guest leaves with unforgettable memories.</p>
                </div>

                <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                    <div class="glass-card text-center p-5">
                        <div class="flower-icon mb-3" style="font-size: 3rem;">🌸</div>
                        <h3 class="h4 mb-3 text-white">Buransh Flower</h3>
                        <p class="text-white-50 italic">"The beautiful Rhododendron that inspired our name blooms across these mountains, painting the landscape in vibrant colors during spring."</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php require 'footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>



</body>

</html>