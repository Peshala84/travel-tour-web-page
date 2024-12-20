<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>

  <!-- swiper css link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom css file link -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- header section starts -->
  <section class="header">
    <img src="./images/logo.jpg" alt="" style="width:80px;">
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!-- header section ends -->

  <!-- home section starts -->

  <section class="home">
    <div class=" swiper home-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(./images/head_image_01.jpg) no-repeat  ">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>travel arround the world</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class=" swiper-slide slide" style="background:url(./images/head_image_02.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>discover the new places</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

        <div class=" swiper-slide slide" style="background:url(./images/head_image_03.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>make your tour worthwhile</h3>
            <a href="package.php" class="btn">discover more</a>
          </div>
        </div>

      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

    </div>
  </section>
  <!-- home section end -->

  <!-- service section starts -->

  <section class="services">
    <h1 class="heading-title">Our Services</h1>
    <div class="box-container">

      <div class="box">
        <img src="./images/icon_1.png" alt="">
        <h3>adventure</h3>
      </div>

      <div class="box">
        <img src="./images/icon_2.png" alt="">
        <h3>tour guide</h3>
      </div>

      <div class="box">
        <img src="./images/icon_3.png" alt="">
        <h3>trekking</h3>
      </div>

      <div class="box">
        <img src="./images/icon_4.png" alt="">
        <h3>camp fire</h3>
      </div>

      <div class="box">
        <img src="./images/icon_5.png" alt="">
        <h3>off road</h3>
      </div>

      <div class="box">
        <img src="./images/icon_6.png" alt="">
        <h3>camping</h3>
      </div>

    </div>
  </section>

  <!-- service section  end -->

  <!-- home about section starts -->
  <section class="home-about">
    <div class="image">
      <img src="./images/about_image_01.jpg" alt="">
    </div>
    <div class="content">
      <h3>About us</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non ipsam repudiandae incidunt nostrum itaque est ipsum ipsa eius suscipit
        consequatur? Neque nobis facilis debitis dolorem corrupti eaque porro ea aliquid!</p>
      <a href="about.php" class="btn">read more</a>
    </div>
  </section>
  <!-- home about section ends -->

  <!-- home package section starts -->

  <section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">

      <div class="box">
        <div class="image">
          <img src="./images/travel_image_01.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="./images/travel_image_02.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="./images/travel_image_03.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="./images/travel_image_04.jpg" alt="">
        </div>
        <div class="content">
          <h3>adventure & tour</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <a href="book.php" class="btn">book now</a>
        </div>
      </div>

    </div>

    <div class="load-more" > <a href="package.php" class="btn">load more</a></div>

  </section>

  <!-- home package section ends -->

  <!-- home offer section starts -->
      
  <section class="home-offer">
    <div class="content">
      <h3>upto 50% off</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero 
        suscipit veritatis necessitatibus accusamus qui at, eum 
        expedita illum! Ex, maxime.
      </p>
      <a href="book.php" class="btn">book now</a>
    </div>
  </section>

  <!-- home offer section ends -->

  <section class="footer">
    <div class="box-container">

      <div class="box">
        <h3>Quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
      </div>

      <div class="box">
        <h3>Extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i>ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i>about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i>privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i>terms of use</a>
      </div>

      <div class="box">
        <h3>Extra links</h3>
        <a href="#"> <i class="fas fa-phone"></i> +212-345-5678</a>
        <a href="#"> <i class="fas fa-phone"></i> +111-345-5353</a>
        <a href="#"> <i class="fas fa-envelope"></i>travel@gmail.com</a>
        <a href="#"> <i class="fas fa-map"></i>mubai, <india-4000104></india-4000104></a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i>facebook</a>
        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i>twitter</a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i>instagram</a>
        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i>linkedin</a>
      </div>
    </div>

    <div class="credit">Created by <span>Ramesh Peshala</span> | all right reserved!</div>

  </section>

  <!-- swiper js cdn link -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- custom js file -->
  <script src="js/script.js"></script>
</body>

</html>