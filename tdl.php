<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="shortcut icon" type="image/png" href="tdl.png" />
  <link rel="stylesheet" href="css/styletdl.css">
  <title>TO-Do List</title>
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

  <div id="modal">
    <div id="inner_modal">
      <textarea placeholder="List.." id="user_input" maxlength="160"></textarea>
      <i class="far fa-times-circle" id="hide"></i>
    </div>
  </div>
  
  <main>

    <header>
      <div class="container">
        <div id="header">
          <h1><i class="fas fa-sticky-note"></i>TO-Do List</h1>
          <button id="add_note">Add List</button>
        </div>
      </div>
    </header>
    
    <section>
      <div class="container">
        <div id="all_notes"></div>
      </div>
    </section>

  </main>

  
  <script src="js/script.js"></script>
</body>
</html>