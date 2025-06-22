<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.icon">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>TicStore</title>
</head>
<body>
    <nav>
        <div class="container">
            <div class="logo">
                <img src="img/logo.icon" alt="" srcset="" width="100px" height="85px">
            </div>
            <div class="buttons">
                <ul>
                    <?php if(isset($_SESSION["id"])){ ?>
                        <li><a href=""><i class="bi bi-phone"> Phone</i></a></li>
                        <li><a href="#about"><i class="bi bi-tv"> TV</i></a></li>
                        <li><a href=""><i class="bi bi-pc-display"> PC</i></a></li>
                        <li><a href="">Other</a></li>
                    <?php } else {?>
                        <li><a href="">Best Seller</a></li>
                        <li><a href="#about">About TechStore</a></li>
                        <li><a href="">Connect With Us</a></li>
                    <?php } ?>
                </ul>
                
                
                
            </div>
            <div class="links">
                <?php if(isset($_SESSION["id"])){ ?>
                    <a href="logout.php"><i class="bi bi-box-arrow-in-right"></i>Logout</a>
                <?php } else {?>
                    <a href="login.php"><i class="bi bi-box-arrow-in-right"></i>Login</a>
                    <a href="signup.php"><i class="bi bi-card-checklist"></i>Signup</a>
                <?php } ?>
            </div>
        </div>
    </nav>
    <div class="landing">
        <div class="container">
            <div class="image-container" id="image-container"></div>
        </div>
    </div>
    <div class="about" id="about">
        <h1>About Us</h1>
        <div class="container">
            <p>      
                Our online store is your ideal destination for purchasing phones, computers, headphones, and other electronic devices. 
                We offer a wide range of high quality products and state-of-the-art technology to meet your needs and improve your technology experience.
            
                Whether you're looking for the latest smartphone from leading brands, a powerful PC for home or business use, or a headset with exceptional sound quality,
                we guarantee you'll find what you're looking for with us.
            
                We take care of the quality of the products we offer, and ensure that every product goes through rigorous inspection before being displayed in the store.
                We partner with trusted brands and trusted manufacturers to ensure you get the best products and state-of-the-art technology.
            
                In addition, we provide excellent customer service and an easy and convenient shopping experience. We care about your satisfaction and strive to provide
                exceptional service and solutions tailored to your individual needs.
            </p>
        </div>
    </div>
    <div class="explore">
        <h1>Explore Products</h1>
        <div class="container">
            <div class="cards">
                <div class="card">
                    <img src="/img/a1.jpg" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>AirPods</h2>
                        <p>AirPods</p>
                        <p>250$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/s1.jpg" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>S23</h2>
                        <p>S23</p>
                        <p>750$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/s2.jpg" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>AirPods</h2>
                        <p>AirPods</p>
                        <p>150$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/w1.png" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>Apple Watch</h2>
                        <p>Apple Watch</p>
                        <p>400$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/c1.jfif" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>iphone 14 pro max</h2>
                        <p>iphone 14 pro max</p>
                        <p>1000$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/dell1.jfif" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>Dell laptop</h2>
                        <p>Dell laptop</p>
                        <p>900$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
                <div class="card">
                    <img src="/img/tv1.png" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>Toshiba TV</h2>
                        <p>Toshiba TV</p>
                        <p>560$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
    
                <div class="card">
                    <img src="/img/tv2.jpg" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>LG TV</h2>
                        <p>LG TV</p>
                        <p>780$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
                                 <div class="card">
                    <img src="/img/sp2.webp" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>Toshiba TV</h2>
                        <p>Toshiba TV</p>
                        <p>560$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
                     <div class="card">
                    <img src="/img/k1.png" alt="" height="100px" width="100px">
                    <div class="text">
                        <h2>Speakers w/BT</h2>
                        <p>Speakers w/BT</p>
                        <p>60$</p>
                        <button>CheckOut</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <h1>Follow Us</h1>
        <ul>
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-twitter"></i></li>
            <li><i class="fa-brands fa-snapchat"></i></li>
        </ul>
    </footer>
</body>
<!-- JS -->
<script src="js/Home.js"></script>
</html>