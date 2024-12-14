<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Now</title>

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
    <a href="home.php" class="logo">travel</a>
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
  </section>
  <!-- header section ends -->
  <div class="heading" style="background:url(./images/book_bow.jpg)">
    <h1>Book now</h1>
  </div>
  <!-- booking section starts -->

  <section class="booking">
    <h1 class="heading-title">book your trip!</h1>

    <form action="book_form.php" method="post" class="book-form">
      <div class="flex">

        <div class="inputBox">
          <span>name : </span>
          <input type="text" placeholder="Enter your name" name="name" required>
        </div>

        <div class="inputBox">
          <span>email : </span>
          <input type="email" placeholder="Enter your email" name="email" required>
        </div>

        <div class="inputBox">
          <span>phone : </span>
          <input type="number" placeholder="Enter your number" name="number" required>
        </div>

        <div class="inputBox">
          <span>address : </span>
          <input type="text" placeholder="Enter your address" name="address" required>
        </div>

        <div class="inputBox">
          <span>where to : </span>
          <input type="text" placeholder="place you want to visit" name="location" required>
        </div>

        <div class="inputBox">
          <span>how many : </span>
          <input type="number" placeholder="number of guests" name="guests" required>
        </div>

        <div class="inputBox">
          <span>arrivals : </span>
          <input type="date" name="arrivals" required>
        </div>

        <div class="inputBox">
          <span>leaving : </span>
          <input type="date" name="leaving" required>
        </div>

      </div>
      <input type="submit" value="submit" class="btn" name="send">
    </form>
  </section>

  <!-- booking section starts -->


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