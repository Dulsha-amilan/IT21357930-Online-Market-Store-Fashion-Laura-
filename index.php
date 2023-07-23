<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'includes/header.php';
    session_start(); // Start the session
    ?>
</head>

<body>
    <!-- Header Section -->
    <header>
        <?php
            include 'includes/menu.php';
        ?>
    </header>

    <!-- Hero Section -->
    <section class="hero">
      
    <h1>Fashion changing always</h1>
    <p>Welcome to Laura fashion store! Explore our fabulous collection of clothing, accessories, and footwear, designed to elevate your style game.</P>
    <a href="shop.php" class="btn">Shop Now</a>

    </section>

<!-- category -->

<section>
    <div class="container">

<ul class="cards">
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--fence"></div>
      <div class="card__content">
        <div class="card__title">New Arrivals</div>
        <p class="card__text"> Embrace your individuality, set your own trends, and let your fashion be the ultimate expression of your unique style.</P>
        <a href="shop.php" class="btn">Shop Now</a>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--river"></div>
      <div class="card__content">
        <div class="card__title">Men</div>
        <p class="card__text">Embrace your individuality, set your own trends, and let your fashion be the ultimate expression of your unique style.</P>
        <a href="shop.php" class="btn">Shop Now</a>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--record"></div>
      <div class="card__content">
        <div class="card__title">women</div>
        <p class="card__text">Embrace your individuality, set your own trends, and let your fashion be the ultimate expression of your unique style.</p>
        <a href="shop.php" class="btn">Shop Now</a>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--flowers"></div>
      <div class="card__content">
        <div class="card__title">kids</div>
        <p class="card__text">Embrace your individuality, set your own trends, and let your fashion be the ultimate expression of your unique style.</p>
        <a href="shop.php" class="btn">Shop Now</a>
      </div>
    </div>
  </li>
</ul></div>
</section>
       

        

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="grid">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Accessibility</a></li>
                        <li><a href="#">Customer Services</a></li>
                        <li><a href="#">Return and Refund</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <img src="assets/images/logo2.png" alt="logo" class="footer-logo-img">
                    <div class="contact">
                        <a href="#"><i class="ri-mail-line"></i> email@mail.com</a>
                        <a href="#"><i class="ri-phone-line"></i> +9422566445</a>
                    </div>
                    <div class="social-icon">
                        <a href="#" title="facebook">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="#" title="instagram">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="#" title="twitter">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="#" title="linkedin">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>