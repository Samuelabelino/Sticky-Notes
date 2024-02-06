<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylehome.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Notes & Reminder.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="notes.php">notes</a>
      <a href="tdl.php">to-do list</a>
      <a href="login_form.php">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/slide1.jpg) no-repeat">
            <div class="content">
               <span><h1>notes & reminder.</h1></span>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/slide2.jpg) no-repeat">
            <div class="content">
               <span><h1>notes & reminder.</h1></span>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->




<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="notes.php"> <i class="fas fa-angle-right"></i> notes</a>
         <a href="tdl.php"> <i class="fas fa-angle-right"></i> to-do list</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> logout</a>
      </div>
   </div>

</section>

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/scripthome.js"></script>

</body>
</html>