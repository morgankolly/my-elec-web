<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$showModal = false;

if (isset($_GET['quote']) && $_GET['quote'] === 'open') {
    $showModal = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
      <header>
        <div class="container">
            <nav>
                <div class="logo"> <a href="index.html"> Light Up Electric </a> </div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>About Light Up Electric</h1>
            <p>Illuminating Your World Since 2018</p>
        </div>
    </section>

    <!-- Our Story -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Our Story</h2>
                <div class="divider"></div>
            </div>
            
            <div class="about-content">
                <div class="about-text">
                    <p>Founded in 2018, Light Up Electric began with a simple mission: to provide exceptional electrical services with unwavering commitment to safety, quality, and customer satisfaction.</p>
                    <p>What started as a small local operation has grown into a trusted name in electrical services, serving both residential and commercial clients across the region. Our journey has been powered by our dedication to excellence and the trust our clients place in us.</p>
                    <p>Over the years, we've expanded our team, refined our expertise, and invested in the latest technology to ensure we deliver the best possible solutions for all your electrical needs.</p>
                </div>
                <div class="about-image">
                    <img src="assets/photos/Untitled 5.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values -->
    <section class="section" style="background-color: #f2f2f2;">
        <div class="container">
            <div class="section-title">
                <h2>Our Values</h2>
                <div class="divider"></div>
            </div>
            
            <div class="values">
                <div class="value-card">
                    <div class="">🪖</div>
                    <h3>Safety First</h3>
                    <p>We prioritize safety in every project, ensuring protection for our clients, team, and properties.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">♥</div>
                    <h3>Customer Commitment</h3>
                    <p>Your satisfaction is our success. We listen carefully and tailor solutions to your specific needs.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">⚡</div>
                    <h3>Quality Workmanship</h3>
                    <p>We take pride in delivering superior electrical solutions that stand the test of time.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">☀</div>
                    <h3>Reliability</h3>
                    <p>Count on us to be punctual, professional, and thorough from start to finish.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Why Choose Light Up Electric</h2>
                <div class="divider"></div>
            </div>
            
            <div class="about-content">
                <div class="about-image"><img src="assets/photos/Untitled 2.jpg" alt="">

                </div>
                <div class="about-text">
                    <p>With years of experience and a commitment to ongoing training, our team stays current with the latest electrical codes, technologies, and best practices.</p>
                    <p>We're fully licensed and insured, giving you peace of mind that your electrical projects are in capable hands.</p>
                    <p>Our transparent pricing means no surprises - we provide detailed quotes and stand by them.</p>
                    <p>We pride ourselves on clean worksites and respect for your property, always leaving things better than we found them.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section team">
        <div class="container">
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number">7+</div>
                    <div class="stat-title">Years in Business</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-title">Projects Completed</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-title">Customer Satisfaction</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div class="stat-title">Emergency Service</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <h2>Ready to Experience the Light Up Electric Difference?</h2>
            <p>Contact us today for a free consultation and quote</p>
            <a href="?quote=open" class="btn">Get a Free Quote</a>
           

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Light Up Electric. All rights reserved.</p>
        </div>
    </footer>
    <?php if ($showModal): ?>
<div class="modal show">
    <div class="modal-content">
        <a href="index.php" class="close">&times;</a>

        <h2>Request a Free Quote</h2>

        <form method="POST" action="request-quote.php">
            <input name="name" required>
            <input name="email" required>
            <textarea name="message" required></textarea>
            <button type="submit">Get Free Quote</button>
        </form>
    </div>
</div>
<?php endif; ?>

</body>
</html>