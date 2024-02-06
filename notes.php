<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">  
    <title>Notes</title>
    <link rel="stylesheet" href="css/stylenotes.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Iconscout Link For Icons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
    <div class="popup-box">
      <div class="popup">
        <div class="content">
          <header>
            <p></p>
            <i class="uil uil-times"></i>
          </header>
          <form action="#">
            <div class="row title">
              <label>Title</label>
              <input type="text" spellcheck="false">
            </div>
            <div class="row description">
              <label>Description</label>
              <textarea spellcheck="false"></textarea>
            </div>
            <button></button>
          </form>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <li class="add-box">
        <div class="icon"><i class="uil uil-plus"></i></div>
        <p>Add new note</p>
      </li>
    </div>
    <script src="js/scriptnotes.js"></script>
    
  </body>
</html>