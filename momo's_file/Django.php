<?php
$current_course="2";
session_start();
$_SESSION['current_course']=$current_course;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="momo_css.css">
  <title>Django</title>
</head>

<body>
 <!-- Header -->

 
<nav>
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn"><i class="fas fa-bars"></i></label>
 <!-- <label class="logo"><h1 style="color: red;">H</h1> ACK<h1 style="color: red;">T</h1>RAIL </label>-->
  <label class="logo">HACKTRAIL</label>
  <ul>
        <li><a href="../index.php" data-after="Home">Home</a></li>
          <li><a href="../index.php" data-after="resource">Resources</a></li>
          <li><a href="../index.php" data-after="courses">Courses</a></li>
          <li><a  href="../index.php" data-after="About">About</a></li>
          <li><a href="../abid's_file/signin.php" data-after="About">Sign up/ Log in</a></li>
          <li><a href="../index.php" data-after="Contact">Contact</a></li>
         <li> <a href="..\abid's_file\profile.php">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/user-male-circle.png" alt="Profile Icon">
        </a> </li>
        </ul>
     
      <!-- Profile Icon -->
     

</nav>


<!-- End Header -->

<div class="django">

<div class="wrapper ">
    <div class="txtbox">
      <img src="Django-logo.png" alt="IMage">
      <h2>Learn Django</h2>
      <p>Learning Django is highly beneficial for web development because it is a powerful, open-source Python framework that simplifies the creation of robust, scalable, and secure web applications. Django's built-in features, like authentication, ORM, and admin panel, speed up development while ensuring best practices. It follows the "Don't Repeat Yourself" (DRY) principle, reducing redundant code. Django's versatility makes it suitable for both simple projects and complex, enterprise-level applications. Additionally, its large community and extensive documentation provide excellent support, making it easier for developers to solve problems and continuously improve their skills.</p>
      </div>
   </div>
</div>
<!--
<section id="courses">
    
</section>

c0urses-->

<div class="container">
    <h1 class="heading"> Available Courses! </h1>
    <div class="box-container">
        <div class="box">
            <img src="django-2.png" alt="IMAGE">
            <h3>Begineer Friendly</h3>
            <p>This course provides a comprehensive overview of Django, covering all the essential topics.</p>
            
        </div>

        <div class="box">
            <img src="django4.jpg" alt="IMAGE">
            <h3>Advanced</h3>
            <p>This lecture series covers more advanced topics in Django, such as class-based views, signals, and custom user models.</p>
            
        </div>

        <div class="box">
            <img src="django3.png" alt="IMAGE">
            <h3>Crash Course!</h3>
            <p> This course offers a fast-paced introduction to Django, covering the basics in a short period of time.</p>
            
        </div>
    </div>
</div>

<div class="enroll">
<a href="add_course_db.php" class="btn"> Add This Course</a>
 <a href="remove_course_db.php" class="btn"> Remove This Course</a>
 </div>



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