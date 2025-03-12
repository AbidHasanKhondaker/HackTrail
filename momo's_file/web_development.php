<!DOCTYPE html>
<?php
$current_course="1";
session_start();
$_SESSION['current_course']=$current_course;

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style_momo.css">
  <title>Web development courses</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
<section id="header">
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

</nav>

</section>


  <!-- Header --
 
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
  
  <!-- End Header -->







  <section id="Int">
  
  <div class="wrapper ">
    <div class="txtbox">
      <img src="webintro.jpg" alt="IMage">
      <h2>Responsive Web Design</h2>
      <p>Responsive web design ensures websites function well across various devices and screen sizes, enhancing user experience and accessibility. By using flexible grids, fluid images, and CSS media queries, responsive design adapts layouts dynamically, making content accessible on desktops, tablets, and smartphones. It reduces the need for separate mobile sites, streamlines maintenance, and improves SEO. Learning frameworks like Bootstrap or CSS Grid and understanding breakpoints are key to creating responsive designs that perform well on all devices.</p>
    </div>
   </div>
   
  
  <!-- dev course Section  -->

  
  <h2 style="padding-bottom: 40px; padding-left:420px;color:darkgreen; ">Here are some beginer friendly courses .</h2>
  </section>

  <section id="int2">

<div class="container">

  <div class="box">
    <div class="content">
      <h2>01</h2>
      <h3>HTML</h3>
      <p>HTML tags give a webpage its structure. You can use HTML tags to add photos, buttons, and other elements to your webpage.

In this course, you'll learn the most common HTML tags.Elements, attributes, and their usage.Creating simple web pages </p>
      <a href="add_course_db.php"> Begineer</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="box">
    <div class="content">
      <h2>02</h2>
      <h3>CSS</h3>
      <p>CSS tells the browser how to display your webpage. You can use CSS to set the color, font, size, and other aspects of HTML elements.

In this course, you'll learn CSS and CSS layout techniques (e.g., block, inline, flexbox . And finally you will create responsive designs </p>
      <a href="add_course_db.php"> Begineer</a>
    </div>
  </div>
</div>

<div class="container">
  <div class="box">
    <div class="content">
      <h2>03</h2>
      <h3>Javascript</h3>
      <p>Learning JavaScript is crucial for web development as it enables interactive, dynamic websites. It powers front-end features, handles events, and manipulates the DOM. With Node.js, it also supports back-end development, making it key for full-stack development. JavaScript's versatility and vast ecosystem make it indispensable for modern web development. </p>
      <a href="add_course_db.php"> Begineer</a>
    </div>
  </div>
</div>
<div class="container">
  <div class="box">
    <div class="content">
      <h2>04</h2>
      <h3>React and angular</h3>
      <p>React is a JavaScript library for building fast, dynamic user interfaces, primarily for single-page applications. Angular is a full-fledged framework for developing complex web applications, offering two-way data binding and extensive tools. Both are used to create responsive, scalable, and maintainable web apps efficiently. </p>
      <a href="add_course_db.php"> Advanced</a>
    </div>
  </div>
</div>
<div class="container">
  <div class="box">
    <div class="content">
      <h2>05</h2>
      <h3>Vs code and Github</h3>
      <p>VS Code is a versatile code editor essential for efficient web development, offering features like debugging, extensions, and IntelliSense. GitHub is crucial for version control, collaboration, and hosting code repositories, enabling developers to manage changes, track progress, and collaborate seamlessly on web development projects. </p>
      <a href="add_course_db.php"> Begineer </a>
    </div>
  </div>
</div>
<div class="container">
  <div class="box">
    <div class="content">
      <h2>06</h2>
      <h3>Performance Optimization</h3>
      <p>Performance optimization in web development is crucial for improving user experience, reducing load times, and enhancing SEO. Faster websites lead to higher engagement and better conversion rates. Key tools to learn include Lighthouse for performance auditing, Webpack for bundling, and lazy loading techniques to ensure efficient resource management.</p>
      <a href="add_course_db.php"> Advanced</a>
    </div>
  </div>
</div>
<div class="container">
  <div class="box">
    <div class="content">
      <h2>07</h2>
      <h3>Deployment</h3>
      <p>
Deployment is the process of making a web application live on a server, accessible to users. It involves steps like setting up hosting, configuring environments, and managing updates. To learn deployment, explore platforms like Heroku, Netlify, or AWS, and study version control, CI/CD pipelines, and server management basics.</p>
      <a href="add_course_db.php"> Advanced </a>
    </div>
  </div>
</div>

 <div class="enroll">
 <a href="add_course_db.php" class="btn"> Add This Course</a>
 <a href="remove_course_db.php" class="btn"> Remove This Course</a>
 </div>
  <!-- End courses Section  -->






  <!--tips--
  <div class="tips">
            <h2>Tips for Learning</h2>
            <ul style="list-style-type:disc;">
                <li >Keep content concise and easy to understand.</li>
                <li>Use clear examples and illustrations.</li>
                <li>Provide practical exercises and challenges.</li>
                <li>Encourage students to experiment and create their own projects.</li>
            </ul>
  </div>
   
  
 <!--tips end-->
 </section>
<br>
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