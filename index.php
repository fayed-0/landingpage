<?php
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Web Design Mastery | Resident</title>
  </head>
  <body>
    <header class="header">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#">Astra<span>Living</span></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <span><i class="ri-menu-line"></i></span>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#Facility">Facility</a></li>
          <li><a href="#article">Articles</a></li>
          <li><a href="#client">Clients</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        
        <!-- pindah dari halaman landingpage - login resident -->
        <div class="nav__btns">
         <a href="http://localhost/landingpage/login.php" class="btn">Login</a>
        </div>

      </nav>
      <div class="section__container header__container" id="home">
        <p>INDUSTRIAL</p>
        <h1>We Provide the Best Residential Services</h1>
        <div class="header__flex">
          <div class="header__card">
            <span><i class="ri-store-2-fill"></i></span>
            <div>
              <h5>Residential Planning</h5>
              <h4>Design & Architecture</h4>
            </div>
          </div>
          <div class="header__card">
            <span><i class="ri-building-fill"></i></span>
            <div>
              <h5>Home Design</h5>
              <h4>Construction & Development</h4>
            </div>
          </div>
          <div class="header__card">
            <span><i class="ri-stackshare-line"></i></span>
            <div>
              <h5>Property Development</h5>
              <h4>Property Management</h4>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="section__container about__container" id="about">
      <div class="about__header">
        <div>
          <h3 class="section__subheader">About Us</h3>
          <h2 class="section__header">
          The Residential Experience You Can Feel
          </h2>
        </div>
        <p class="section__description">
        With a commitment to quality, modern living, and customer satisfaction, 
        Astra Living brings hands-on solutions for your residential needs. 
        Discover the difference where expertise meets comfort, 
        offering an unparalleled lifestyle for modern homeowners.
        </p>
      </div>
      <div class="about__grid">
        <div class="about__card">
          <p>DESIGN</p>
          <h4>The art of residential design</h4>
        </div>
        <div class="about__card">
          <p>CONSTRUCTION</p>
          <h4>Crafting quality homes</h4>
        </div>
        <div class="about__card">
          <p>QUALITY</p>
          <h4>We stand strong on excellence</h4>
        </div>
      </div>
    </section>

    <section class="section__container about__container" id="Facility">
      <div class="about__header">
        <div>
          <h3 class="section__subheader">Facility</h3>
          <h2 class="section__header">
          Experience Ultimate Comfort and Convenience
          </h2>
        </div>
        <p class="section__description">
        
        AstraLiving offers the perfect blend of comfort and convenience with easy access to essential facilities that support a healthy lifestyle, 
        shopping, and mobility. Located just minutes away from top healthcare services, shopping centers, and highways, it provides everything you 
        need for a practical and efficient lifestyle. Designed for maximum comfort, AstraLiving is the ideal choice for your future home, offering both 
        convenience and modern living.
        </p>
      </div>
      <div class="about__grid">
        <div class="about__card">
          <p>HEALTHCARE</p>
          <h4>Pondok Indah Bintaro Hospital</h4>
          <p>Only 8 Minutes Away for Exceptional Health Services</p>
        </div>
        <div class="about__card">
          <p>SHOPPING</p>
          <h4>Bintaro Jaya Xchange Mall</h4>
          <p>Just 15 Minutes from You, Everything You Desire, Within Reach</p>
        </div>
        <div class="about__card">
          <p>ACCESS</p>
          <h4>Gerbang Tol Parigi</h4>
          <p>Just 5 minutes away from the toll road</p>
        </div>
      </div>
    </section>

    <section class="section__container faq__container" id="faq">
      <div class="faq__image">
        <img src="assets/rumah-4.jpg" alt="faq" />
      </div>
      <div class="faq__content">
        <h3 class="section__subheader">Ask By Client</h3>
        <h2 class="section__header">Frequently Asked Questions</h2>
        <p class="section__description">
          A comprehensive resource designed to answer your most common queries
          and provide valuable insights into our products, services, and the
          industrial landscape.
        </p>
        <div class="faq__grid">
          <div class="faq__card">
            <div class="faq__header">
              <h4>What types of residential services do you offer?</h4>
              <span><i class="ri-arrow-down-s-line"></i></span>
            </div>
            <div class="faq__description">
            We specialize in offering a wide range of residential services, 
            including property development, home design, and personalized living solutions, 
            tailored to meet the needs of modern homeowners.
            </div>
          </div>
          <div class="faq__card">
            <div class="faq__header">
              <h4>How can I purchase a property at Astra Living?</h4>
              <span><i class="ri-arrow-down-s-line"></i></span>
            </div>
            <div class="faq__description">
            Purchasing a property is simple and convenient. Visit our listings page, 
            select your preferred property, and contact our sales team for a personalized consultation. 
            We'll guide you through the purchase process step by step.
            </div>
          </div>
          <div class="faq__card">
            <div class="faq__header">
              <h4>Are there any warranties or guarantees on the properties?</h4>
              <span><i class="ri-arrow-down-s-line"></i></span>
            </div>
            <div class="faq__description">
            Our properties come with warranties that cover structural integrity and quality assurance. 
            Our dedicated support team is always available to address any concerns and provide swift resolutions.
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container article__container" id="article">
      <h3 class="section__subheader">Insight And Trends</h3>
      <h2 class="section__header">Recent Articles</h2>
      <div class="article__grid">
        <div class="article__card">
          <img src="assets/rumah-1.jpg" alt="article" />
          <div>
            <p>Aug 19, 2024</p>
            <a href="#">Innovation</a>
          </div>
          <h4>Transforming Living Spaces: Cutting-Edge Residential Architecture</h4>
        </div>
        <div class="article__card">
          <img src="assets/rumah-2.jpg" alt="article" />
          <div>
            <p>Aug 25, 2024</p>
            <a href="#">Products</a>
          </div>
          <h4>Home Essentials: Elevating Comfort with Smart Home Products</h4>
        </div>
        <div class="article__card">
          <img src="assets/rumah-3.jpg" alt="article" />
          <div>
            <p>Aug 29, 2024</p>
            <a href="#">Insights</a>
          </div>
          <h4>Residential Insights: Expert Opinions on Housing Market Trends</h4>
        </div>
      </div>
    </section>

    <section class="section__container client__container" id="client">
      <h3 class="section__subheader">Testimonials</h3>
      <h2 class="section__header">Client's Testimonials</h2>
      
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="client__card">
              <span><i class="ri-double-quotes-l"></i></span>
              <p>
              Choosing Astra Living was the best decision for our home design. 
              Their range of residential design options is unmatched, and the quality is exceptional. 
              The team’s dedication to customer satisfaction sets them apart. 
              We’re grateful for a reliable partner in creating our dream home.
              </p>
              <div class="client__details">
                <img src="assets/client-1.jpg" alt="client" />
                <div>
                  <h4>Sarah Martinez</h4>
                  <h5>Operations Director</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <span><i class="ri-double-quotes-l"></i></span>
              <p>
              Working with Astra Living has been a game-changer for our home construction. 
              Their innovative solutions have significantly improved the quality of our build, 
              and the level of support we received was outstanding. 
              I highly recommend them to anyone seeking top-notch home construction services.
              </p>
              <div class="client__details">
                <img src="assets/client-2.jpg" alt="client" />
                <div>
                  <h4>Thimoty</h4>
                  <h5>Manufacturing Manager</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="client__card">
              <span><i class="ri-double-quotes-l"></i></span>
              <p>
              As a homeowner, I rely on durable and efficient construction. 
              The support team is responsive, and their construction quality has greatly reduced maintenance issues. 
              I’m impressed and satisfied with their commitment to excellence.
              </p>
              <div class="client__details">
                <img src="assets/client-3.jpg" alt="client" />
                <div>
                  <h4>Emily Turner</h4>
                  <h5>Maintenance Supervisor</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="banner">
      <div class="section__container banner__container">
        <div class="banner__content">
          <h3 class="section__subheader">Join Us</h3>
          <h2 class="section__header">Stay Updated!</h2>
          <p class="section__description">
          From housing trends to property insights, our curated content keeps you informed.
          </p>
        </div>
        <div class="banner__form">
          <form action="/">
            <input type="text" placeholder="Enter Your Email" />
            <button class="btn">Submit</button>
          </form>
        </div>
      </div>
    </section>

    <footer id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <h4>About Us</h4>
          <p>
          AstraLiving offers the perfect balance of comfort and convenience, with easy access to healthcare, shopping, 
          and highways. Designed for maximum comfort, it provides everything you need for a practical and efficient lifestyle, 
          making it the ideal choice for your future home.
          </p>
          <button class="btn">Contact Us</button>
        </div>
        <div class="footer__col">
          <h4>Quick Links</h4>
          <ul class="footer__links">
            <li><a href="#">Products</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Customer Support</a></li>
          </ul>
        </div>
        <div class="footer__col">
          <h4>Social Media</h4>
          <div class="footer__media">
            <img src="assets/header1.jpg" alt="media" />
            <img src="assets/rumah1.jpg" alt="media" />
            <img src="assets/rumah2.jpg" alt="media" />
            <img src="assets/rumah3.jpg" alt="media" />
            <img src="assets/rumah5.jpg" alt="media" />
            <img src="assets/rumah7.jpg" alt="media" />
          </div>
          <div class="footer__socials">
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
            <a href="#"><i class="ri-linkedin-fill"></i></a>
            <a href="#"><i class="ri-instagram-line"></i></a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2024 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="main.js"></script>
  </body>
</html>