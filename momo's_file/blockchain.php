<?php
$current_course="4";
session_start();
$_SESSION['current_course']=$current_course;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="momo_css.css">
  <title>Block Chain</title>
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
      <img src="block.png" alt="IMage">
      <h2>Blockchain Development</h2>
      <p>Blockchain development focuses on creating decentralized applications (dApps) and smart contracts on platforms like Ethereum. It enhances transparency, security, and immutability in transactions. Key technologies include Solidity for smart contract programming, and understanding consensus mechanisms like Proof of Work (PoW) or Proof of Stake (PoS). Learning cryptography, distributed ledger technology, and frameworks like Hyperledger is essential for blockchain development.</p> </div>
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
            <img src="blcok2.jpg" alt="IMAGE">
            <h3>Understand Blockchain Concepts</h3>
            <p>Learn how blockchain technology creates a decentralized database shared across multiple computers.Study algorithms like Proof of Work (PoW) and Proof of Stake (PoS) that ensure data integrity. Understand how self-executing contracts with terms directly written into code operate.</p>
            
        </div>

        <div class="box">
            <img src="blcok1.png" alt="IMAGE">
            <h3>Learn the Underlying Technology</h3>
            <p>Familiarize yourself with the language used by your chosen platform (e.g., Solidity for Ethereum). Set up your IDE and tools for interacting with the blockchain network. Understand how to interact with the blockchain using APIs or libraries.</p>
        </div>

        <div class="box">
            <img src="blcok3.jpg" alt="IMAGE">
            <h3>Explore Advanced Topics</h3>
            <p> Learn how to build applications on top of blockchain platforms. Understand how to create digital tokens on the blockchain.Explore how to connect different blockchain networks.</p>
            
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