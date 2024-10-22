<!-- This is the Home Page of Every Sunday -->

<?php
session_start();
$is_logged_in = isset($_SESSION['user_id']);
$user_name = $is_logged_in ? $_SESSION['user_name'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Icon -->
    <link rel="icon" type="image/x-icon" href="/assets/brand-icon.svg">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Links To All Style Files -->
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="./styles/hero.css">
    <link rel="stylesheet" href="./styles/services.css">
    <link rel="stylesheet" href="./styles/feedback-section.css">
    <title>Every Sunday | Embark On New Adventures</title>
</head>
<body>
    <header>
        <nav class="container">
            <img src="./assets/brand-logo.svg" alt="Every Sunday Logo">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="destination.php">Destination</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="prices.php">Pricing</a></li>
            </ul>
            <!-- <div id="toggle">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div> -->
            <div id="login-container">
    <?php if ($is_logged_in): ?>
        <!-- Display user's name and logout button if logged in -->
        <div>
            <span>Hello, <?php echo htmlspecialchars($user_name); ?>!</span>
            <a href="logout.php" id="logout-btn" class="btn-small" style="border-radius:50px;color:var(--white)">Log Out</a>
        </div>
    <?php else: ?>
        <!-- Display login icon if not logged in -->
        <a href="login.html" id="loginBtn"><i class="fa-solid fa-user" id="login-btn"></i></a>
    <?php endif; ?>
</div>

            <div class="responsive-nav">
                <i class="fa-solid fa-bars" style="color:var(--white-light)"></i>
                <div class="responsive-nav-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/destination.php">Destination</a></li>
                        <li><a href="/feedback.php">Feedback</a></li>
                        <li><a href="/prices.php">Pricing</a></li>
                    </ul>
                    <div id="login-container">
                        <a href="./login.php" id="loginBtn"><i class="fa-solid fa-user" id="login-btn"></i></a>
                        <div style="display: none;">
                            <a href='./checkout.html'><i class="fa-solid fa-cart-shopping" style="margin-right:1rem"></i></a>
                            <a href="/" id="logout-btn" class='btn-small' style='border-radius:50px;color:var(--white)'>Log Out</a>
                        </div>       
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="container hero-section fade-in">
           <div class="hero-content-container">
            <div class="hero-content">
                <h1>Summer <span style="color:var(--highlight)">Trip!</span></h1>
                <p>Every Sunday is a service for booking hotels, air tickets and other travel services for professionals.</p>
            </div>
            <div class="searchbox">
               
            <button id="search-btn" class="btn" onclick="destination()" >Lets Begin</button>
            </div>
           </div> 
           <div class="hero-image-container">
            <img src="./assets/Hero Image.png" alt="Hero Image">
           </div>
        </section>
        <section class="background-dark fade-in">
            <section class="container services">
                <div class="services-cards">
                    <div class="card service large-card">
                        <div class="service-img-container">
                            <i class="fa-solid fa-map"><i class="fa-solid fa-location-dot" style="color:var(--primary)"></i></i>
                        </div>
                        <div class="service-content">
                            <h4>Lot of Choices</h4>
                            <p>Amazing place? We will give you the best choice!</p>
                        </div>
                    </div>
                    <div class="card service">
                        <div class="service-img-container">
                            <i class="fa-solid fa-ticket"></i>
                        </div>
                        <div class="service-content">
                            <h4>Easy Booking</h4>
                            <p>Payment is simple, and  you'll get your ticket quickly!</p>
                        </div>
                    </div>
                    <div class="card service">
                        <div class="service-img-container">
                            <i class="fa-solid fa-people-group"></i>
                        </div>
                        <div class="service-content">
                            <h4>Best Tour Guide</h4>
                            <p>Our guide team will will make your trip as as comfortable</p>
                        </div>
                    </div>
                </div>
                <div class="services-content ">
                    <h3 class="highlight-circle">01</h3>
                    <h2>Our Services</h2>
                    <p>Every Sunday is a service for booking hotels, air tickets and other travel services for professionals</p>
                    
                </div>
            </section>
            <section class="container packages fade-in">
                <div class="packages-content">
                    <h3 class="highlight-circle">02</h3>
                    <h2>Special Package</h2>
                    <p>Every Sunday is a service for booking hotels, air tickets and other travel services for professionals</p>
                    
                </div>
                <div class="packages-cards">
                    <div class="card package-card"> 
                        <div class="package-card-img">
                            <img src="https://images.unsplash.com/photo-1592835978338-6b7b07592dfe?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1192&q=80" alt="Mumbai Image">
                        </div>                       <div class="package-card-content">
                            <h4>Mumbai <span>India</span></h4>
                            <div>
                                <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="large-card package-card"> 
                        <div class="package-card-img">
                            <img src="https://images.unsplash.com/photo-1534351590666-13e3e96b5017?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NjE5NTF8MHwxfHNlYXJjaHwxfHxBbXN0ZXJkYW18ZW58MHx8fHwxNjg5ODM5MTUwfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Amsterdam Image">
                        </div>                       <div class="package-card-content">
                            <h4>Amsterdam <span>Netherlands</span></h4>
                            <div>
                                <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                            </div>
                            <p>Netherlands</p>
                           
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="container feedback-section fade-in">
            <div class="feedback-details">
                <h3 class="highlight-circle">03</h3>
                <div>
                    <h2>Full Featured on with more than 200,000 users</h2>
                    
                </div>
            </div>
            <div class="offers">
                <div>
                    <img src="./assets/Seconday-Hero.png" alt="Seconday Hero Image">
                </div>
                <div>
                    <span>Exclusive</span>
                    <h3><span>₹1099</span>/pack</h3>
                    <ul>
                        <li><i class="fa-solid fa-circle-check"></i> President suite room</li>
                        <li><i class="fa-solid fa-circle-check"></i> Free breakfast and lunch</li>
                        <li><i class="fa-solid fa-circle-check"></i> Free pick up</li>
                    </ul>

                    <button class="btn">View All</button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="articles"></section>
        <div class="container">
            <h1>Get started and early <span>Update</span> about our package</h1>
            
            <div class="searchbox">
                <input  type="text" placeholder="Enter your email">
                <button class="btn" id="cta">Get Started</button>
            </input>
            </div>
            <hr>
            <div class="footer">
                <img src="./assets/brand-logo.svg" alt="Every Sunday Logo">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="destination.php">Destination</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                    <li><a href="prices.php">Pricing</a></li>
                </ul>
                <p><i class="fa-regular fa-copyright"></i> 2024 Every Sunday</p>
            </div>
            <div class="socials">
                <div class="social">
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="social">
                    <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<script src="main.js"></script>
<script>
let packageBtn = document.getElementById("packageBtn");
let feedbackBtn = document.getElementById("feedbackBtn");
packageBtn.addEventListener("click", () => {
window.location.href="destination.html";
});
feedbackBtn.addEventListener("click", () => {
window.location.href="feedback.php";
});
function destination()
{
    window.location.href = "destination.php";
}
</script>