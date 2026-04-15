<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/my-elec-web/admin/config/connection.php';
require_once __DIR__ . '/my-elec-web/admin/controllers/UserController.php';
require_once __DIR__ . '/my-elec-web/admin/controllers/CategoryController.php';
require_once __DIR__ . '/my-elec-web/admin/controllers/NewsletterController.php';
require_once __DIR__ . '/my-elec-web/admin/controllers/ContactController.php';
require_once __DIR__ . '/my-elec-web/admin/controllers/ContentController.php';








?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light Up Electric - Professional Electrical Services</title>
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo"> <a href="index.php">Light Up Electric </a></div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h1>Professional Electrical Services</h1>
            <p>Light Up Electric provides reliable, safe, and efficient electrical solutions for residential and
                commercial properties. Our certified electricians are ready to handle all your electrical needs.</p>
            <a href="contact.php" class="btn">Get a Free Quote</a>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="cards-container">
                <div class="card">
                    <div class="card-img">
                        <img src="assets/photos/Untitled.jpg" alt="Electrical Installation">
                    </div>
                    <div class="card-content">
                        <h3>Electrical Installation</h3>
                        <p>Professional installation of electrical systems for new constructions and renovations.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="assets/photos/Untitled 4.jpg" alt="Lighting Solutions">
                    </div>
                    <div class="card-content">
                        <h3>Lighting Solutions</h3>
                        <p>Modern and energy-efficient lighting designs for homes and businesses.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-img">
                        <img src="assets/photos/8.jpg" alt="Emergency Repairs">
                    </div>
                    <div class="card-content">
                        <h3>Emergency Repairs</h3>
                        <p>24/7 emergency electrical services to keep your home or business safe.</p>
                        <a href="#" class="btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>What Our Clients Say</h2>
            </div>
            <div class="testimonials-container">
                <?php if (!empty($Messages)): ?>
                    <?php foreach ($Messages as $msg): ?>
                        <div class="testimonial">
                            <div class="author-info">
                                    <h4><?= htmlspecialchars($msg['contact_name']) ?></h4>
                                     <p>Client</p>  
                                </div>
                            <div class="testimonial-text">
                                <p>"<?= nl2br(htmlspecialchars($msg['message'])) ?>"</p>
                            </div>

                                 <div class="rating">⭐️⭐️⭐️⭐️⭐️</div>
                            </div>

                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">No client testimonials found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <section class="about-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Story</h2>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Creating Brighter Spaces for Over a Decade</h3>
                    <p>Founded in 2018, Light Up began as a small family business with a passion for innovative lighting
                        design. What started as a modest operation with just three employees has grown into a leading
                        lighting solutions provider with over 50 dedicated professionals.</p>
                    <p>Our journey has been guided by a commitment to quality, sustainability, and customer
                        satisfaction. We believe that lighting isn't just about illumination—it's about creating
                        atmospheres, enhancing spaces, and improving lives.</p>
                    <p>Today, we serve both residential and commercial clients across the country, offering custom
                        lighting solutions that combine functionality with aesthetic appeal.</p>
                </div>
                <div class="about-image">
                    <img src="assets/photos/man-engaged-household-task.jpg" alt="Our office">
                </div>
            </div>
        </div>
    </section>


    <section class="team-section">
        <div class="container">
            <div class="section-title">
                <h2>Meet Our Team</h2>
            </div>
            <div class="team-cards">
                <?php if (!empty($Users)): ?>
                    <?php foreach ($Users as $user): ?>
                        <div class="team-card">
                            <div class="team-card-img">
                                <img src="<?= htmlspecialchars($user['profile']) ?>"
                                    alt="<?= htmlspecialchars($user['user_name']) ?>">
                            </div>
                            <div class="team-card-content">
                                <h3><?= htmlspecialchars($user['user_name']) ?></h3>
                                <p>Role: <?= htmlspecialchars($user['role_name']) ?></p>
                                <p>About: <?= htmlspecialchars($user['description']) ?></p>
                                <div class="team-social">
                                    <?php if (!empty($user['email'])): ?>
                                        <a href="mailto:<?= htmlspecialchars($user['email']) ?>"><i class="fas fa-envelope"></i></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No team members found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>




    <section class="gallery-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Work</h2>
            </div>
            <div class="gallery-grid">
                <?php if (!empty($contents)): ?>
                    <?php foreach ($contents as $content): ?>
                        <div class="gallery-item">
                            <a href="content.php?content_id=<?= (int) $content['content_id'] ?>">
                                <img src="<?= htmlspecialchars($content['photo']) ?>"
                                    alt="<?= htmlspecialchars($content['title']) ?>">
                            </a>
                        </div>

                        <div id="gallery-cards">
                            <h4><?= htmlspecialchars($content['title']) ?></h4>
                            <p><?= htmlspecialchars($content['description']) ?></p>
                        </div>

                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center">No projects found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>


    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>12+</h3>
                    <p>Years Experience</p>
                </div>
                <div class="stat-item">
                    <h3>500+</h3>
                    <p>Projects Completed</p>
                </div>
                <div class="stat-item">
                    <h3>50+</h3>
                    <p>Team Members</p>
                </div>
                <div class="stat-item">
                    <h3>100%</h3>
                    <p>Satisfied Clients</p>
                </div>
            </div>
        </div>
    </section>
    <div class="pricing-container">
        <h1>Electrical Service Plans</h1>

        <div class="pricing-grid">
            <div class="pricing-card">
                <h2>Basic Inspection</h2>
                <div class="price">$50<span>/visit</span></div>
                <ul class="features">
                    <li>Electrical system evaluation</li>
                    <li>Outlet & switch testing</li>
                    <li>Circuit breaker check</li>
                    <li>Safety hazard identification</li>
                    <li>Basic troubleshooting</li>
                </ul>
                <a href="#" class="btn">Book Inspection</a>
            </div>

            <div class="pricing-card popular">
                <div class="popular-tag">Most Popular</div>
                <h2>Standard Repair</h2>
                <div class="price">$150<span>/weekly</span></div>
                <ul class="features">
                    <li>All Basic Inspection items</li>
                    <li>Fixture installation/replacement</li>
                    <li>Outlet/switch replacement</li>
                    <li>Circuit breaker repairs</li>
                    <li>1-year labor warranty</li>
                </ul>
                <a href="#" class="btn">Schedule Repair</a>
            </div>

            <div class="pricing-card">
                <h2>Emergency Service</h2>
                <div class="price">$300<span>/Monthly</span></div>
                <ul class="features">
                    <li>24/7 emergency response</li>
                    <li>Priority scheduling</li>
                    <li>All Standard Repair services</li>
                    <li>Power restoration</li>
                    <li>2-hour response time guarantee</li>
                </ul>
                <a href="#" class="btn">Emergency Call</a>
            </div>

            <div class="pricing-card">
                <h2>Annual Maintenance</h2>
                <div class="price">$1500<span>/year</span></div>
                <ul class="features">
                    <li>Two comprehensive inspections</li>
                    <li>Priority service scheduling</li>
                    <li>10% discount on repairs</li>
                    <li>Smoke detector testing</li>
                    <li>Whole-home electrical review</li>
                </ul>
                <a href="#" class="btn">Subscribe Now</a>
            </div>
        </div>

        <div class="payment-methods">
            <h3>We Accept All Major Payment Methods</h3>
            <div class="payment-icons">
                <img src="https://cdn-icons-png.flaticon.com/512/196/196578.png" alt="Visa">
                <img src="https://cdn-icons-png.flaticon.com/512/196/196561.png" alt="Mastercard">
                <img src="https://cdn-icons-png.flaticon.com/512/196/196566.png" alt="American Express">
                <img src="https://cdn-icons-png.flaticon.com/512/825/825454.png" alt="PayPal">
                <img src="https://cdn-icons-png.flaticon.com/512/825/825426.png" alt="Apple Pay">
            </div>
        </div>
    </div>

    <footer>

        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>Light Up Electric</h3>
                    <p>Providing quality electrical services for residential and commercial properties since 2018.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Electrical Installation</a></li>
                        <li><a href="#">Lighting Solutions</a></li>
                        <li><a href="#">Emergency Repairs</a></li>
                        <li><a href="#">Panel Upgrades</a></li>
                        <li><a href="#">Home Automation</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="features.php">Services</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Info</h3>
                    <ul>
                        <li>Light up Uganda</li>
                        <li>Namasuba near Total 2</li>
                        <li>Phone +256 755 216 481</li>
                        <li>Email: info@lightup.com</li>
                    </ul>
                </div>
                <form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>">
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit" name="registerSubscriber">Subscribe</button>
                </form>



            </div>

            <div class="copyright">
                <p>&copy; 2025 Light Up Electric. All Rights Reserved.</p>
            </div>

        </div>
    </footer>

    <!-- Font Awesome for icons (add this before closing body tag) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/all.min.js"></script>
</body>

</html>