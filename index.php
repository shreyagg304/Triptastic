<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Triptastic for you Fantastic Trips</title>
</head>
<body>
    <header>
        <div class="container-fluid w-100">
        <?php session_start(); // Start the session ?>
            <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#">
                    <div class="logo"></div>
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#topdes">Packages</a></li>
                        <li class="nav-item"><a class="nav-link" href="#review">Reviews</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="ssimg_1.jpg" style="width: 100%;">
            <div class="text">WELCOME TO TRIPTASTIC</div>
        </div>
        <div class="mySlides fade">
            <img src="ssimg_2.jpg" style="width: 100%;">
            <div class="text">WELCOME TO TRIPTASTIC</div>
        </div>

        <div class="mySlides fade">
            <img src="ssimg_3.jpg" style="width: 100%;">
            <div class="text">WELCOME TO TRIPTASTIC</div>
        </div>

        <div class="mySlides fade">
            <img src="ssimg_4.jpg" style="width: 100%;">
            <div class="text">WELCOME TO TRIPTASTIC</div>
        </div>

    </div>

    <div class="topdes" id="topdes">
        <div class="titlefirst textcenter">
            <p>MODERN & BEAUTIFUL</p>
            <h2>Our Most Popular Adventures</h2>
        </div>

        <div class="desmen row">
            <div class="col-md-4 mb-4">
                <div class="box mx-4">
                    <div class="box-content">
                        <p class="placename textcenter">Kerala</p>
                        <div class="image-container">
                            <div class="box-img" style="background-image: url('Kerala.jpg'); height: 350px;"></div>
                        </div>
                        <p class="intro">With backwaters and palm-fringed beaches, Kerala's charm lies in its cultural festivals and a perfect blend of tradition and modernity.</p>
                        <div class="btn-box">
                            <a href="">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="box mx-4">
                    <div class="box-content">
                        <p class="placename textcenter">Leh Ladakh</p>
                        <div class="image-container">
                            <div class="box-img" style="background-image: url('leh.jpg'); height: 400px;"></div>
                        </div>
                        <p class="intro">Amidst the Himalayas, Leh Ladakh captivates with barren landscapes, Buddhist monasteries, and high mountain passes.</p>
                        <div class="btn-box">
                            <a href="">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="box mx-4">
                    <div class="box-content">
                        <p class="placename textcenter">Manali</p>
                        <div class="image-container">
                            <div class="box-img" style="background-image: url('Manali.jpg'); height: 400px;"></div>
                        </div>
                        <p class="intro">Nestled in Himachal Pradesh, Manali offers snow-capped peaks, lush greenery, and adventure activities for nature enthusiasts and thrill-seekers.</p>
                        <div class="btn-box">
                            <a href="">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="box mx-4">
                    <div class="box-content">
                        <p class="placename textcenter">Udaipur</p>
                        <div class="image-container">
                            <div class="box-img" style="background-image: url('udaipur.jpg'); height: 400px;"></div>
                        </div>
                        <p class="intro">The "City of Lakes," Udaipur, boasts serene lakes, majestic palaces, and a rich cultural heritage.</p>
                        <div class="btn-box">
                            <a href="">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="box mx-4">
                    <div class="box-content">
                        <p class="placename textcenter">Goa</p>
                        <div class="image-container">
                            <div class="box-img" style="background-image: url('goa.jpg'); height: 400px;"></div>
                        </div>
                        <p class="intro">Sun-kissed beaches, lively nightlife, and Portuguese architecture make Goa a coastal paradise for relaxation and adventure.</p>
                        <div class="btn-box">
                            <a href="">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-4 mb-4">
                <div class="box mx-4">
                    <div class="box-content">
                        <p class="placename textcenter">Assam</p>
                        <div class="image-container">
                            <div class="box-img" style="background-image: url('assam.jpg'); height: 400px;"></div>
                        </div>
                        <p class="intro">Discover Assam's enchanting landscapes and vibrant cultural celebrations, offering a unique travel experience in India's northeastern gem.</p>
                        <div class="btn-box">
                            <a href="">Book now</a>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

    <div class="review textcenter" id="review">
        <div class="inner">
            <h1>Reviews</h1>
            <div class="border2"></div>

            <div class="row custom-row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial">
                        <img src="ssimg_1.jpg">
                        <div class="name">Taylor Swift</div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="reviewswritten">"Easy booking process and great deals on hotels. The user interface is intuitive, and the reviews helped me make informed decisions."</p>
                    </div>
                </div>
    
                <div class="col-md-4 mb-4">
                    <div class="testimonial">
                        <img src="ssimg_2.jpg">
                        <div class="name">One Direction</div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p class="reviewswritten">"Fantastic platform! I found the best prices for my flights, and the app is user-friendly. Customer service was prompt and helpful."</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <div class="testimonial">
                        <img src="ssimg_3.jpg">
                        <div class="name">Arijit Singh</div>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p class="reviewswritten">"Reliable service and excellent customer support. I had to make changes to my itinerary, and the process was smooth and hassle-free."</p>
                        </div>
                    </div>
                </div>

        </div>
    </div>

    <footer class="footerpart textcenter">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="font-weight-light mb-4 font">Useful Links</h3>
                    <a href="#" class="text-white font">About</a><br>
                    <a href="#" class="text-white font">Services</a><br>
                    <a href="#" class="text-white font">Contact</a><br>
                    <a href="#" class="text-white font">Shop</a><br>
                    <a href="#" class="text-white font">Blog</a><br>
                </div>
                <div class="col-md-4">
                    <h3 class="font-weight-light mb-1 font">NEWSLETTER</h3>
                    <form class="form-inline">
                        <input type="email" class="form-control mb-2 " placeholder="Your Email Address" required>
                        <!-- <button type="submit" class="btn btn-secondary">SUBSCRIBE NOW</button> -->
                    </form>
                </div>
                <div class="col-md-4">
                    <h3 class="font-weight-light mb-4 font">CONTACT</h3>
                    <p class="font">123, XYZ Road, BSK 3<br> Bangalore, Karnataka, IN</p>
                    <div class="social-icons d-flex justify-content-center">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-behance"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>