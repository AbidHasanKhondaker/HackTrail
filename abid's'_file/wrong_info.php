<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="abid_css.css">
  <title>Learn Hackathon</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="navbar">
        
        <div class="navlist">
          <div class="dropdown">
            <div class="bar"></div>
          </div>
          <ul>
          <li><a href="../index.php" data-after="Home" style="font-size: 30px; border-color: white;">Home</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->


  <!-- main Section  -->
  <section id="main">
    <div class="main container">
      <div>
            <h2 style="color:darkgrey">Wrong password or username</h2>
            <h1>Sign in</h1>
            
       
        <form action="signindb.php" method="post">
            <input type="text" name="username" placeholder="Your username"/>
            <input type="password" name="password" placeholder="Enter your password"/>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>

        <div class="contact-heading">
            <p>Don't have an account ? Signup now!</p>
            <a href="signup.php">Signup</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End main Section  -->




  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="org">
        <h1>Hack Trail</h1>
      </div>
      <h2>Find your inner talent</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/profile.php?id=100034743932433"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/?size=100&id=13963&format=png&color=000000" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>