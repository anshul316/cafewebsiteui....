<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Buransh</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: #0f0f0f; /* Fallback color */
        }

        .main-wrapper {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
        }

        /* Glassmorphism Effect */
        .glass-box {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            transition: all 0.4s ease;
        }

        .glass-box:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        .custom-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff !important;
            transition: all 0.3s ease;
        }

        .custom-input:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: #fff;
            box-shadow: none;
            transform: scale(1.01);
        }

        .custom-input::placeholder { color: rgba(255,255,255,0.5); }

        .underline {
            width: 80px;
            height: 4px;
            background: #fff;
            border-radius: 2px;
        }

        .info-card {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
            border-left: 4px solid #fff;
            color: #fff;
            transition: 0.3s;
        }

        .info-card:hover {
            background: rgba(255, 255, 255, 0.15);
            padding-left: 20px !important;
        }

        .send-btn {
            background: #fff;
            color: #000;
            font-weight: 600;
            border-radius: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .send-btn:hover {
            background: transparent;
            color: #fff;
            border: 1px solid #fff;
            box-shadow: 0 0 20px rgba(255,255,255,0.4);
        }

        .map-box {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 15px;
        }
    </style>
</head>
<body>

<div class="main-wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent pt-3" data-aos="fade-down" data-aos-duration="1000">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="https://buranshcafe.com/BuranshBannerWhite-removebg-preview.png" alt="Buransh" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#buranshNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="buranshNav">
                <ul class="navbar-nav ms-auto text-uppercase small fw-bold">
                    <li class="nav-item"><a class="nav-link px-3" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="service.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="gallery.php">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link px-3 active" href="contactus.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container contact-section py-5">
        <div class="text-center mb-5" data-aos="zoom-in" data-aos-duration="1200">
            <h1 class="title display-4 fw-bold text-white">Book Your Stay!</h1>
            <div class="underline mx-auto"></div>
        </div>

        <div class="row g-4">
            <div class="col-lg-7" data-aos="fade-right" data-aos-delay="200">
                <div class="glass-box p-4 p-md-5">
                    <form action="#" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3 text-start">
                                <label class="form-label text-white-50">Name</label>
                                <input type="text" class="form-control custom-input" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 mb-3 text-start">
                                <label class="form-label text-white-50">Email</label>
                                <input type="email" class="form-control custom-input" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label text-white-50">Phone</label>
                            <input type="text" class="form-control custom-input" placeholder="Phone Number" required>
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label text-white-50">Service Interested In</label>
                            <select class="form-select custom-input">
                                <option selected>Select a service</option>
                                <option>Camping</option>
                                <option>Cafe</option>
                                <option>Stay</option>
                            </select>
                        </div>
                        <div class="mb-4 text-start">
                            <label class="form-label text-white-50">Message</label>
                            <textarea class="form-control custom-input" rows="4" placeholder="Your requirements..."></textarea>
                        </div>
                        <button type="submit" class="btn send-btn w-100 py-3">Send Message</button>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="info-side h-100">
                    <div class="row g-3">
                        <div class="col-12" data-aos="fade-left" data-aos-delay="300">
                            <div class="info-card p-3">
                                <strong>📍 Location</strong><br>
                                <small>Mussoorie, Uttarakhand</small>
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-left" data-aos-delay="400">
                            <div class="info-card p-3">
                                <strong>📞 Phone</strong><br>
                                <small>+91 98080 64381</small>
                            </div>
                        </div>
                        <div class="col-12" data-aos="fade-left" data-aos-delay="500">
                            <div class="info-card p-3">
                                <strong>✉️ Email</strong><br>
                                <small>info@buransh.com</small>
                            </div>
                        </div>
                    </div>

                    <div class="map-box mt-4 p-2" data-aos="zoom-in-up" data-aos-delay="600">
                        <p class="small text-white-50 mb-2 px-2">Find Us on Google Maps</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55080.03847844078!2d78.03369689269466!3d30.450123512304857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3908d0cfa61c95b3%3A0xc30f3583683f999c!2sMussoorie%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1712490000000!5m2!1sen!2sin" 
                            width="100%" height="200" style="border:0; border-radius: 12px;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require 'footer.php' ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Initialize Animations
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
</script>

</body>
</html>