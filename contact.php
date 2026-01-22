<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../my-elec-website/my-elec-web/admin/config/connection.php';
require_once __DIR__ . '/../my-elec-website/my-elec-web/admin/controllers/ContactController.php';

$ContactModel = new ContactModel($pdo);
$success = false;
$error = false;

if (isset($_POST['saveAndSendMessage'])) {
 
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if ($ContactModel->saveAndSendMessage($name, $email, $message)) {
        $success = true;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.html"> Light Up Electric </a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->

    <section class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

                <?php if ($success): ?>
                <div class="alert alert-success">
                    Your message has been sent successfully!
                </div>
                <?php elseif ($error): ?>
                <div class="alert alert-danger">
                    Something went wrong. Please try again.
                </div>
                <?php endif; ?>

            <div class="contact-container">
    <div class="contact-info">
        <h3>Get in Touch</h3>

        <p>
            <strong>Address:</strong>
            <a href="https://www.google.com/maps/search/?api=1&query=Namasuba+near+Total+2"
               target="_blank">
                Namasuba near Total 2
            </a>
        </p>

        <p>
            <strong>Phone:</strong>
            <a href="tel:+256744802691">+256 744 802 691</a>
        </p>

        <p>
            <strong>Email:</strong>

            <a href="mailto:lightup2567.com?subject=Customer%20Inquiry">
    info@lightup2567.com
</a>

        </p>

        <p>
            <strong>Hours:</strong>
            Sunday - Friday: 8am - 6pm<br>
            Emergency services available 24/7
        </p>

        <p>
            <strong>WhatsApp:</strong>
            <a href="https://wa.me/256744802691" target="_blank">
                Chat on WhatsApp
            </a>
        </p>
    </div>



                <div class="contact-form">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="contact_name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" required></textarea>
                        </div>

                        <button type="submit" name="saveAndSendMessage" class="btn">
                            Send Message
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <i class="fas fa-bolt"></i> Light Up Electric
                </div>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="services.php">Services</a>
                    <a href="about.php">About Us</a>
                    <a href="pricing.php">Pricing</a>
                    <a href="contact.php">Contact</a>
                    <a href="privacy.php">Privacy Policy</a>
                    <a href="terms.php">Terms of Service</a>
                </div>
                <div class="copyright">
                    &copy; 2025 Light Up Electric. All rights reserved.
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/all.min.js"></script>

</html>