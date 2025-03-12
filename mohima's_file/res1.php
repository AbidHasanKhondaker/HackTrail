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
  <title>Web Development Resources</title>
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
        <h1>Web Development Resources</h1>

        <!-- HTML Section -->
        <div class="resource-section" data-aos="fade-up">
          <h2>HTML</h2>
          <p>
            HTML (HyperText Markup Language) is the standard language for creating web pages and web applications. It forms the structure of a webpage by defining elements like headings, paragraphs, links, images, and more. Understanding HTML is essential for anyone looking to build or edit websites, as it is the foundation upon which all web content is built.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">MDN Web Docs - HTML</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.w3schools.com/html/" target="_blank">W3Schools - HTML Tutorial</a></li>
              <li><a href="https://html.com/" target="_blank">HTML.com - Tutorials and Resources</a></li>
              <li><a href="https://www.freecodecamp.org/news/html-tutorial/" target="_blank">FreeCodeCamp - HTML Tutorial</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=UB1O30fR-EE" target="_blank">
                  <img src="https://img.youtube.com/vi/UB1O30fR-EE/hqdefault.jpg" alt="HTML Crash Course for Beginners">
                  <p>HTML Crash Course for Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=it1rTvBcfRg&list=PLP9IO4UYNF0VdAajP_5pYG-jG2JRrG72s" target="_blank">
                  <img src="https://i.ytimg.com/vi/it1rTvBcfRg/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCew9cxZOCeASLaM5mXZX1cuSkygA" alt="HTML Full Course">
                  <p>HTML Full Course</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- CSS Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="100">
          <h2>CSS</h2>
          <p>
            CSS (Cascading Style Sheets) is a stylesheet language used to describe the presentation of a document written in HTML or XML. CSS controls the layout of multiple web pages all at once, allowing developers to change the style of an entire website by altering just one file. It brings aesthetic appeal to websites by providing tools to style fonts, colors, spacing, and more.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">MDN Web Docs - CSS</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.w3schools.com/css/" target="_blank">W3Schools - CSS Tutorial</a></li>
              <li><a href="https://css-tricks.com/" target="_blank">CSS-Tricks - Tips and Tricks</a></li>
              <li><a href="https://www.freecodecamp.org/news/css-tutorial/" target="_blank">FreeCodeCamp - CSS Tutorial</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=yfoY53QXEnI" target="_blank">
                  <img src="https://img.youtube.com/vi/yfoY53QXEnI/hqdefault.jpg" alt="CSS Crash Course For Absolute Beginners">
                  <p>CSS Crash Course For Absolute Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/playlist?list=PL5d6Xzyt8zbx8K--UcbRYFF7dJsbUeJ7T" target="_blank">
                  <img src="https://img.youtube.com/vi/1Rs2ND1ryYc/hqdefault.jpg" alt="CSS Full Course">
                  <p>CSS Full Course</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- JavaScript Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="200">
          <h2>JavaScript</h2>
          <p>
            JavaScript is a programming language that enables interactive web pages and is an essential part of web applications. It allows developers to create dynamically updating content, control multimedia, animate images, and much more. As one of the core technologies of the World Wide Web, along with HTML and CSS, JavaScript is a must-know for aspiring web developers.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">MDN Web Docs - JavaScript</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.w3schools.com/js/" target="_blank">W3Schools - JavaScript Tutorial</a></li>
              <li><a href="https://javascript.info/" target="_blank">JavaScript.info - Modern JavaScript Tutorial</a></li>
              <li><a href="https://www.freecodecamp.org/news/javascript-tutorial/" target="_blank">FreeCodeCamp - JavaScript Tutorial</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=PkZNo7MFNFg" target="_blank">
                  <img src="https://img.youtube.com/vi/PkZNo7MFNFg/hqdefault.jpg" alt="JavaScript Tutorial for Beginners">
                  <p>JavaScript Tutorial for Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=ajdRvxDWH4w&list=PLGjplNEQ1it_oTvuLRNqXfz_v_0pq6unW" target="_blank">
                  <img src="https://i.ytimg.com/vi/ajdRvxDWH4w/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDHZkl1toTFHBY8cD7PLeg9Jxd5oA" alt="JavaScript Full Course">
                  <p>JavaScript Full Course</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- PHP Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="300">
          <h2>PHP</h2>
          <p>
            PHP (Hypertext Preprocessor) is a popular server-side scripting language designed primarily for web development. It is used to manage dynamic content, databases, session tracking, and even build entire e-commerce sites. PHP code is executed on the server, and the result is returned to the browser as plain HTML, making it a powerful tool for creating interactive and data-driven websites.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://www.php.net/manual/en/index.php" target="_blank">PHP Manual</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.w3schools.com/php/" target="_blank">W3Schools - PHP Tutorial</a></li>
              <li><a href="https://www.phptherightway.com/" target="_blank">PHP: The Right Way</a></li>
              <li><a href="https://www.freecodecamp.org/news/php-tutorial/" target="_blank">FreeCodeCamp - PHP Tutorial</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=OK_JCtrrv-c" target="_blank">
                  <img src="https://img.youtube.com/vi/OK_JCtrrv-c/hqdefault.jpg" alt="PHP for Beginners">
                  <p>PHP for Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=at19OmH2Bg4&list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR" target="_blank">
                  <img src="https://i.ytimg.com/vi/at19OmH2Bg4/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLB8ECX2S9z-NGB2iXFugYjeKIMm6w" alt="PHP Full Course">
                  <p>PHP Full Course</p>
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

  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true
    });
  </script>
  <script src="./app.js"></script>
</body>

</html>
