<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amine Tech</title>
</head>
<style>
    <?php
    include 'css/newproj.css';
    ?>
</style>
<body>
    <nav class="navbar">
        <a class="navbar-brand" href="#">Amine Tech</a>
        <div id="menu">
            <a class="menu">Home</a>
            <a class="menu">Products</a>
            <a href="login.php" class="menu">login</a>
            <a id="panier" href="#"><img src="css\add-to-cart-svgrepo-com.svg" height="40px" width="40px"></a>
        </div>
    </nav>
    <header class="hero-section">
        <div class="container">
            <h1>Welcome to Amine Tech Store</h1>
            <p>Find the best tech products for your needs</p>
            <a href="#products" class="btn">Shop Now</a>
        </div>
    </header>
    <section id="products" class="products-section">
        <div class="container">
            <h2>Our Products</h2>
            <div class="product-grid">
                <?php include 'productlist.php'?>
            </div>
        </div>
    </section>
    <footer class="footer">
    <div class="footer-container">
        <div class="footer-left">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
            <a href="#" class="footer-link">Terms</a>
        </div>
        <div class="footer-center">
            <nav>
                <ul class="footer-menu">
                    <li><a href="#" class="footer-menu-link">Home</a></li>
                    <li><a href="#" class="footer-menu-link">About</a></li>
                    <li><a href="#" class="footer-menu-link">Services</a></li>
                    <li><a href="#" class="footer-menu-link">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="footer-right">
            <a href="#" class="footer-icon">
                <svg class="icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 4.56c-.89.39-1.84.65-2.85.77a4.92 4.92 0 0 0 2.16-2.71 9.86 9.86 0 0 1-3.1 1.18 4.92 4.92 0 0 0-8.4 4.48 13.94 13.94 0 0 1-10.12-5.13 4.92 4.92 0 0 0 1.52 6.57 4.93 4.93 0 0 1-2.23-.61v.06c0 2.45 1.74 4.49 4.06 4.95a4.92 4.92 0 0 1-2.22.08 4.93 4.93 0 0 0 4.59 3.41A9.86 9.86 0 0 1 0 21.54a13.94 13.94 0 0 0 7.54 2.21c9.06 0 14-7.51 14-14.02 0-.21 0-.42-.01-.63A10 10 0 0 0 24 4.56z"/>
                </svg>
                
            </a>
            <a href="#" class="footer-icon">
                <svg class="icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 4.56c-.89.39-1.84.65-2.85.77a4.92 4.92 0 0 0 2.16-2.71 9.86 9.86 0 0 1-3.1 1.18 4.92 4.92 0 0 0-8.4 4.48 13.94 13.94 0 0 1-10.12-5.13 4.92 4.92 0 0 0 1.52 6.57 4.93 4.93 0 0 1-2.23-.61v.06c0 2.45 1.74 4.49 4.06 4.95a4.92 4.92 0 0 1-2.22.08 4.93 4.93 0 0 0 4.59 3.41A9.86 9.86 0 0 1 0 21.54a13.94 13.94 0 0 0 7.54 2.21c9.06 0 14-7.51 14-14.02 0-.21 0-.42-.01-.63A10 10 0 0 0 24 4.56z"/>
                </svg>
            </a>
            <a href="#" class="footer-icon">
                <svg class="icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M24 4.56c-.89.39-1.84.65-2.85.77a4.92 4.92 0 0 0 2.16-2.71 9.86 9.86 0 0 1-3.1 1.18 4.92 4.92 0 0 0-8.4 4.48 13.94 13.94 0 0 1-10.12-5.13 4.92 4.92 0 0 0 1.52 6.57 4.93 4.93 0 0 1-2.23-.61v.06c0 2.45 1.74 4.49 4.06 4.95a4.92 4.92 0 0 1-2.22.08 4.93 4.93 0 0 0 4.59 3.41A9.86 9.86 0 0 1 0 21.54a13.94 13.94 0 0 0 7.54 2.21c9.06 0 14-7.51 14-14.02 0-.21 0-.42-.01-.63A10 10 0 0 0 24 4.56z"/>
                </svg>
            </a>
        </div>
    </div>
</footer>
<script src="project.js"></script>
</body>
