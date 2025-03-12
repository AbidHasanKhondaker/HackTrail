<?php
$current_course="5";
session_start();
$_SESSION['current_course']=$current_course;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="momo_css.css">
  <title>machine learning</title>
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
      <img src="ml.jpg" alt="IMage">
      <h2>Machine Learning</h2>
      <p>Machine learning (ML) enables systems to learn from data, identifying patterns and making decisions with minimal human intervention. It's useful in various fields, such as recommendation systems, image and speech recognition, fraud detection, and predictive analytics. ML models improve over time with more data, enhancing accuracy. Key concepts to learn include supervised and unsupervised learning, neural networks, and algorithms like decision trees and support vector machines. Tools like TensorFlow and Scikit-learn simplify building and deploying ML models.</p>
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
            <img src="super.jpg" alt="IMAGE">
            <h3>Supervised Learning</h3>
            <p>Learn about algorithms like linear regression, logistic regression, decision trees, and support vector machines.</p>
            
        </div>

        <div class="box">
            <img src="tensor.png" alt="IMAGE">
            <h3>Learn Language</h3>
            <p> Including Python: Popular choices include TensorFlow, PyTorch, Scikit-learn and R: A statistical programming language with machine learning libraries.</p>
            
        </div>

        <div class="box">
            <img src="deep.png" alt="IMAGE">
            <h3>Deep Learning</h3>
            <p>  Understand neural networks, convolutional neural networks (CNNs), and recurrent neural networks (RNNs).</p>
            
        </div>
        <div class="box">
            <img src="ml.jpg" alt="IMAGE">
            <h3>Build and Train a Model</h3>
            <p>  Choose a model based on your problem and data characteristics. Use your training data to teach the model to recognize patterns.Assess the model's accuracy using metrics like precision, recall, and F1-score.</p>
            
        </div>
        <div class="box">
            <img src="opti.jpg" alt="IMAGE">
            <h3>Fine tune and Optimize</h3>
            <p> Experiment with different parameters to improve performance. Prevent overfitting by introducing penalties. Combine multiple models to improve accuracy.</p>
            
        </div>
        <div class="box">
            <img src="deplao.png" alt="IMAGE">
            <h3>Deployment</h3>
            <p>  Incorporate the trained model into your application. Use the model to make predictions on new data.</p>
            
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