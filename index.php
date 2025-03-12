<!-- <?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['password'])) {
    echo "Welcome " . $_SESSION['username'] . "! Your email is " . $_SESSION['email']. "! Your password is " . $_SESSION['password'];
} else {
    echo "Session data not found.";
}
?> -->


<?php
if(!isset($_SESSION['username'])){
// Store data in session variables
$_SESSION['username'] = 'n';
$_SESSION['password'] = 'n';
$_SESSION['email'] = 'n';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Learn Hackathon</title>
</head>

<body>
 <!-- Header -->
<section id="header">
  <div class="header container">
    <div class="navbar">
      <div class="org">
        <a href="#main">
          <h1><span>H</span>ack <span>T</span>rail</h1>
        </a>
      </div>
      <div class="navlist">
        <div class="dropdown">
          <div class="bar"></div>
        </div>
        <ul>
          <li><a href="#main" data-after="Home">Home</a></li>
          <li><a href="#resources" data-after="resource">Resources</a></li>
          <li><a href="#courses" data-after="courses">Courses</a></li>
          <li><a href="#about" data-after="About">About</a></li>
          <li><a href="/abid's_file/signin.php" data-after="About">Sign up/ Log in</a></li>
          <li><a href="#contact" data-after="Contact">Contact</a></li>
        </ul>
      </div>
      <!-- Profile Icon -->
      <div class="profile-icon">
        <a href="\abid's_file\profile.php">
          <img src="https://img.icons8.com/ios-filled/50/ffffff/user-male-circle.png" alt="Profile Icon">
        </a>
      </div>
    </div>
  </div>
</section>
<!-- End Header -->





  <!-- main Section  -->
  <section id="main">
    <div class="main container">
      <div>
        <h1>Hello, <span></span></h1>
        <h1>We are HackTrail <span></span></h1>
        <h1>Want to learn hackathon? <span></span></h1>
        <a href="#courses" type="button" class="cta">Get started</a>
      </div>
    </div>
  </section>
  <!-- End main Section  -->

  <!-- resource Section -->
  <section id="resources">
    <div class="resources container">
      <div class="resource-top">
        <h1 class="section-title"><span>r</span>esou<span>r</span>ces</h1>
        <p>Kickstart your hackathon journey with essential resources. Learn web development basics with HTML, CSS, and JavaScript; dive into app development using Flutter and React Native; master machine learning with Python and TensorFlow; and explore blockchain technology and smart contracts. Equip yourself with the skills to build impressive projects and succeed in any hackathon. Start learning and bring your ideas to life!</p>
      </div>
      <div class="resource-bottom">
        <div class="resource-item">
          <div class="icon"><a href="/mohima's_file/res1.php"><img style="border-radius:10px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8srWss8hKnPEBxM2gpQ_3nz8rjmk9ZmQdnsAjq_IV8as447vME4s7CjoTNSnTunDmtII&usqp=CAU" /></a></div>
          <h2>Web Design</h2>
          <p>Master website development with our resources covering HTML, CSS, and JavaScript. Our guides and tutorials will help you create responsive, stylish sites, whether you're just starting or looking to enhance your skills.</p>
        </div>
        <div class="resource-item">
          <div class="icon"><a href="/mohima's_file/res2.php"><img style="border-radius:10px" src="https://d2ms8rpfqc4h24.cloudfront.net/mobile_application_development_ad3f711b7d.jpg" /></a></div>
          <h2>App Dev</h2>
          <p>
          Check out our app development resources for iOS and Android. Get step-by-step tutorials on Flutter and React Native to design, build, and optimize mobile apps, ideal for beginners and those looking to enhance their skills.</p>
        </div>
        <div class="resource-item">
          <div class="icon"><a href="/mohima's_file/res3.php"><img style="border-radius:10px" src="https://www.freelancinggig.com/blog/wp-content/uploads/2018/11/Start-a-Blockchain-Development-Company.jpg" /></a></div>
          <h2>Block Chain</h2>
          <p>Explore our blockchain resources to learn about architecture, smart contracts, and dApps. Our guides will help you build secure and innovative solutions, whether you're a beginner or looking to advance your skills.</p>
        </div>
        <div class="resource-item">
          <div class="icon"><a href="/mohima's_file/res4.php"><img style="border-radius:10px" src="https://www.einfochips.com/wp-content/uploads/2018/10/how-to-develop-machine-learning-applications-for-business-featured.jpg" /></a></div>
          <h2>Machine Learning</h2>
          <p>Explore our machine learning resources to grasp data analysis, algorithm development, and model training. Our guides provide practical insights and instructions, perfect for beginners and those advancing their skills.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End resource Section -->

  <!-- courses Section -->
  <section id="courses">
    <div class="courses container">
      <div class="courses-header">
        <h1 class="section-title"><span>C</span>ourses</h1>
      </div>
      <div class="all-courses">
        <div class="course-item">
          <div class="course-info">
            <h1>1.Web dev</h1>
            <h2>Html Css Javascript</h2>
            <p>This web development course covers the fundamentals of building websites using HTML, CSS, and JavaScript. You'll learn to structure content, style pages, and add interactive features. By the end of the course, you'll be equipped to create and launch your own dynamic, responsive websites.</p>
             <br>
             <button class="styled-button" onclick="changePage1()">See More</button>
          </div>
          <div class="course-img">
            <img src="./img/img1.png" alt="img">
          </div>
        </div>
        <div class="course-item">
          <div class="course-info">
            <h1>2.learn Django</h1>
            <h2>Create web with Python</h2>
            <p>This Django course will teach you how to build web applications using Python's powerful framework. You'll learn to handle databases, create dynamic pages, and manage user authentication, all while writing clean and efficient code. By the end, you'll be ready to develop your own robust and scalable web applications with Django.</p>
            <br>
             <button class="styled-button" onclick="changePage2()">See More</button>
          </div>
          <div class="course-img">
            <img src="./img/img2.png" alt="img">
          </div>
        </div>
        <div class="course-item">
          <div class="course-info">
            <h1>3.App Devlopement</h1>
            <h2>A market with the biggest possibility</h2>
            <p>This app development course will guide you through creating mobile applications for iOS and Android using tools like Flutter and React Native. You'll learn to design user-friendly interfaces, handle data, and optimize performance. By the end of the course, you'll have the skills to build and launch your own mobile apps.</p>
            <br>
             <button class="styled-button" onclick="changePage3()">See More</button>
          </div>
          <div class="course-img">
            <img src="./img/img3.png" alt="img">
          </div>
        </div>
        <div class="course-item">
          <div class="course-info">
            <h1>4.Blockchain</h1>
            <h2>A distributed database</h2>
            <p>This blockchain course introduces you to the fundamentals of blockchain technology, including how it works, its applications, and its impact on various industries. You'll learn to develop decentralized applications (dApps) and create smart contracts. By the end, you'll be equipped with the skills to build secure, transparent blockchain solutions.</p>
            <br>
             <button class="styled-button" onclick="changePage4()">See More</button>
          </div>
          <div class="course-img">
            <img src="./img/img4.png" alt="img">
          </div>
        </div>
        <div class="course-item">
          <div class="course-info">
            <h1>5.Machine learning</h1>
            <h2>AI is the future</h2>
            <p>This machine learning course will teach you the essentials of data analysis, model building, and algorithm implementation using Python. You'll explore techniques like regression, classification, and clustering, and gain hands-on experience with libraries such as TensorFlow and PyTorch. By the end, you'll be ready to develop and deploy your own machine learning models.</p>
            <br>
             <button class="styled-button" onclick="changePage5()">See More</button>
          </div>
          <div class="course-img">
            <img src="./img/img5.png" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End courses Section -->

  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./img/buet.png" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">About <span>us</span></h1>
        <h2>A beginer friendly platform</h2>
        <p>We’re here to demystify the hackathon experience and provide you with the tools and knowledge you need to succeed. Our mission is to make the world of hackathons accessible to everyone, whether you're just starting out or looking to refine your skills.

At HackTrail, we offer a wealth of resources tailored specifically for beginners. From comprehensive tutorials on web development, app development, machine learning, and blockchain, to practical advice and project ideas, we aim to equip you with the skills needed to create impressive projects and excel in hackathons.

We believe that everyone has the potential to innovate and make a difference, and we're committed to supporting you on your journey. By simplifying complex topics and providing step-by-step guidance, we help turn your ideas into reality and foster a community of confident, creative problem-solvers.

Join us, and let’s make your hackathon experience a success together!</p>
      </div>
    </div>
  </section>
  <!-- End About Section -->

  <!-- Contact Section -->
  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>01736943322</h2>
            <h2>01710024924</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>hacktrail@gmail.com</h2>
            <h2>hacktrail_customer_care@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>ECE Building, BUET, Dhaka-1205, Bangladesh</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->

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
          <a href="https://www.instagram.com/tasnim_jarin_momo_?igsh=MW9qZTF4OHowem51eg=="><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
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
  <script src="app.js"></script>
</body>

</html>