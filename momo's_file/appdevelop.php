<?php
$current_course="3";
session_start();
$_SESSION['current_course']=$current_course;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="momo_css.css">
  <title>App development</title>
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
      <img src="app1.jpg" alt="IMage">
      <h2>App development</h2>
      <p>App development involves creating software applications for mobile devices or desktops. It requires knowledge of programming languages like Swift (iOS), Kotlin (Android), or frameworks like Flutter and React Native for cross-platform development. Key aspects include UI/UX design, performance optimization, and backend integration. Learning version control, testing, and deployment processes is essential for successful app development.</p> </div>
     
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
            <img src="jvk.jpg" alt="IMAGE">
            <h3>Programming Language</h3>
            <p>Master the syntax, data types, control flow, and object-oriented concepts.Mostly used languages are Java and Kotlin.</p>
            
        </div>

        <div class="box">
            <img src="git.png" alt="IMAGE">
            <h3>Learn Github</h3>
            <p>Learn Git for managing code changes and collaborating with others.</p>
        </div>

        <div class="box">
            <img src="net2.jpg" alt="IMAGE">
            <h3>Data Storage and Networking</h3>
            <p> Learn about local storage (e.g., SQLite) and cloud storage (e.g., Firebase). Understand how apps communicate with servers (e.g., HTTP requests).</p>
            
        </div>
        <div class="box">
            <img src="ui.png" alt="IMAGE">
            <h3>UI and UX Design</h3>
            <p> Design layouts, buttons, text fields, and other elements using frameworks or libraries. Focus on creating intuitive and engaging interfaces.</p>
        </div>
        <div class="box">
            <img src="dev.png" alt="IMAGE">
            <h3>Build a Small App</h3>
           <p>Create a basic app with limited functionality to practice concepts. Use online resources to guide you through the process. Try different approaches and learn from your mistakes.</p>
        </div>
        <div class="box">
            <img src="addvancapp.png" alt="IMAGE">
            <h3>Learn Advanced Topics</h3>
            <p> Improve app speed and responsiveness. Protect your app from vulnerabilities. Write unit tests and integration tests to ensure code quality. Learn how to publish your app to app stores or deploy it to a web server.</p>
            
        </div>
    </div>
</div>

<div class="enroll">
<a href="add_course_db.php" class="btn"> Add This Course</a>
 <a href="remove_course_db.php" class="btn"> Remove This Course</a> </div>



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