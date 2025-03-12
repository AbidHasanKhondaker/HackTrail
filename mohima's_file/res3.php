<?php
session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email == "n") {
    header('Location: ../abid\'s_file/login_first.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="abid_css.css">
  <title>Blockchain Development Resources</title>
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
            <li><a href="../index.php" data-after="Home">Home</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Main Section -->
  <section id="main">
    <div class="main container">
      <div id="resources">
        <h1>Blockchain Development Resources</h1>

        <!-- Blockchain Basics Section -->
        <div class="resource-section" data-aos="fade-up">
          <h2>Blockchain Basics</h2>
          <p>
            Blockchain technology is a decentralized digital ledger that records transactions across many computers in a way that the registered transactions cannot be altered retroactively. It provides the foundation for cryptocurrencies and has applications beyond just digital currencies, including supply chain management, voting systems, and more.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://www.ibm.com/topics/what-is-blockchain" target="_blank">IBM - What is Blockchain?</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.blockchain.com/learning" target="_blank">Blockchain.com - Learning</a></li>
              <li><a href="https://www.geeksforgeeks.org/blockchain-tutorial/" target="_blank">GeeksforGeeks - Blockchain Tutorial</a></li>
              <li><a href="https://www.freecodecamp.org/news/what-is-blockchain/" target="_blank">FreeCodeCamp - What is Blockchain?</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=SSo_EIwHSd4" target="_blank">
                  <img src="https://img.youtube.com/vi/SSo_EIwHSd4/hqdefault.jpg" alt="Blockchain Expert Explains One Concept in 5 Levels of Difficulty">
                  <p>Blockchain Expert Explains One Concept in 5 Levels of Difficulty</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=2uYuWiICCM0&list=PLsyeobzWxl7oY6tZmnZ5S7yTDxyu4zDW-" target="_blank">
                  <img src="https://i.ytimg.com/vi/2uYuWiICCM0/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDAhiX1JweM9EPu8TuzqK1gg1W0Pg" alt="Blockchain Technology Explained">
                  <p>Blockchain Technology Explained</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Smart Contracts Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="100">
          <h2>Smart Contracts</h2>
          <p>
            Smart contracts are self-executing contracts with the terms of the agreement directly written into code. They automatically execute and enforce themselves based on predefined rules and conditions. Smart contracts run on blockchain technology, ensuring transparency and reducing the need for intermediaries.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://ethereum.org/en/developers/docs/smart-contracts/" target="_blank">Ethereum - Smart Contracts</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.tutorialspoint.com/ethereum/ethereum_smart_contracts.htm" target="_blank">TutorialsPoint - Ethereum Smart Contracts</a></li>
              <li><a href="https://cryptodev.com/smart-contracts/" target="_blank">CryptoDev - Smart Contracts Tutorial</a></li>
              <li><a href="https://www.freecodecamp.org/news/smart-contracts-explained/" target="_blank">FreeCodeCamp - Smart Contracts Explained</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=M576WGiDBdQ&list=PLTwiqKOPckq-jVx4kR-yHJQe19SrmYf_i" target="_blank">
                  <img src="https://i.ytimg.com/vi/M576WGiDBdQ/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCwowOBLP1eGJJ1gdp9uizqaBbJ3Q" alt="Introduction to Smart Contracts">
                  <p>Introduction to Smart Contracts</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=HfRrcp2CIvY&list=PLWUCKsxdKl0oksYr6IG_wRsaSUySQC0ck" target="_blank">
                  <img src="https://i.ytimg.com/vi/HfRrcp2CIvY/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCboPDq9Cf_720edxwyBH9fS6TZhw" alt="Building Smart Contracts with Solidity">
                  <p>Building Smart Contracts with Solidity</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Blockchain Development Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="200">
          <h2>Blockchain Development</h2>
          <p>
            Blockchain development involves creating applications and solutions that utilize blockchain technology. It includes developing decentralized applications (dApps), integrating smart contracts, and working with various blockchain platforms like Ethereum, Binance Smart Chain, and others.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://docs.soliditylang.org/en/v0.8.0/" target="_blank">Solidity Documentation</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.blockchain-council.org/blockchain/developer-course/" target="_blank">Blockchain Council - Developer Course</a></li>
              <li><a href="https://www.udemy.com/topic/blockchain/" target="_blank">Udemy - Blockchain Courses</a></li>
              <li><a href="https://www.freecodecamp.org/news/blockchain-development-tutorials/" target="_blank">FreeCodeCamp - Blockchain Development Tutorials</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=UKQ3el5zh18&list=PLR0uCBk15bq96j_R_cS1Rwg96rfDAfCmM" target="_blank">
                  <img src="https://i.ytimg.com/vi/UKQ3el5zh18/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLC7J7HhZLNfVob6jBxei1TRNtrlZQ" alt="Blockchain Development for Beginners">
                  <p>Blockchain Development for Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=F8ap0o3CTGo&list=PLgPmWS2dQHW_CuryjGPkyH0PNXJ2B0hAk" target="_blank">
                  <img src="https://i.ytimg.com/vi/F8ap0o3CTGo/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLD0XCb5QMzB987xmQ4YZLPst54klA" alt="How to Build Blockchain Applications">
                  <p>How to Build Blockchain Applications</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Main Section -->

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

</body>

</html>
