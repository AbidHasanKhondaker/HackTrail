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
  <title>App Development Resources</title>
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
        <h1>App Development Resources</h1>

        <!-- Android Section -->
        <div class="resource-section" data-aos="fade-up">
          <h2>Android</h2>
          <p>
            Android development involves creating applications for devices running the Android operating system. With a robust set of tools and a thriving community, Android is a popular platform for mobile app development.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://developer.android.com/docs" target="_blank">Android Developer Documentation</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.udacity.com/course/new-android-fundamentals--ud851" target="_blank">Udacity - Android Fundamentals</a></li>
              <li><a href="https://www.youtube.com/watch?v=InigFUSiPl8&list=RDQMor4E0dpSzLY&start_radio=1" target="_blank">FreeCodeCamp - Android Course</a></li>
              <li><a href="https://www.coursera.org/specializations/android-app-development" target="_blank">Coursera - Android App Development</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=u64gyCdqawU&pp=ygUTZnVsbCBhbmRyb2lkIGNvdXJzZQ%3D%3D" target="_blank">
                  <img src="https://i.ytimg.com/vi/InigFUSiPl8/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAsAYkZ8d6O6uNTfgsCDXOOKx4riA" alt="Android Development for Beginners">
                  <p>Android Development for Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=aS__9RbCyHg" target="_blank">
                  <img src="https://img.youtube.com/vi/aS__9RbCyHg/hqdefault.jpg" alt="Complete Android App Development">
                  <p>Complete Android App Development</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- iOS Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="100">
          <h2>iOS</h2>
          <p>
            iOS development is the process of creating applications for Apple's mobile operating system, iOS. It involves learning Swift or Objective-C and utilizing Apple's development environment, Xcode, to create beautiful and functional apps.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://developer.apple.com/documentation/" target="_blank">Apple Developer Documentation</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://developer.apple.com/tutorials/app-dev-training" target="_blank">Apple - App Development Training</a></li>
              <li><a href="https://www.hackingwithswift.com/" target="_blank">Hacking with Swift</a></li>
              <li><a href="https://www.freecodecamp.org/news/swift-ios-tutorial/" target="_blank">FreeCodeCamp - Swift iOS Tutorial</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=09TeUXjzpKs" target="_blank">
                  <img src="https://img.youtube.com/vi/09TeUXjzpKs/hqdefault.jpg" alt="iOS Development for Beginners">
                  <p>iOS Development for Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=FcsY1YPBwzQ" target="_blank">
                  <img src="https://img.youtube.com/vi/FcsY1YPBwzQ/hqdefault.jpg" alt="Complete iOS Development">
                  <p>Complete iOS Development</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Flutter Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="200">
          <h2>Flutter</h2>
          <p>
            Flutter is an open-source UI software development toolkit created by Google. It allows for fast and expressive development of natively compiled applications for mobile, web, and desktop from a single codebase.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://flutter.dev/docs" target="_blank">Flutter Documentation</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://flutter.dev/docs/codelabs" target="_blank">Flutter Codelabs</a></li>
              <li><a href="https://www.udacity.com/course/build-native-mobile-apps-with-flutter--ud905" target="_blank">Udacity - Build Native Mobile Apps with Flutter</a></li>
              <li><a href="https://www.freecodecamp.org/news/flutter-course/" target="_blank">FreeCodeCamp - Flutter Course</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=x0uinJvhNxI" target="_blank">
                  <img src="https://img.youtube.com/vi/x0uinJvhNxI/hqdefault.jpg" alt="Flutter Tutorial for Beginners">
                  <p>Flutter Tutorial for Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=1gDhl4leEzA" target="_blank">
                  <img src="https://img.youtube.com/vi/1gDhl4leEzA/hqdefault.jpg" alt="Flutter Full Course">
                  <p>Flutter Full Course</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- React Native Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="300">
          <h2>React Native</h2>
          <p>
            React Native is a popular framework developed by Facebook for building mobile applications using JavaScript and React. It allows developers to create truly native apps and doesn't compromise on the user experience.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://reactnative.dev/docs/getting-started" target="_blank">React Native Documentation</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.udacity.com/course/react-native-training--ud282" target="_blank">Udacity - React Native Training</a></li>
              <li><a href="https://www.tutorialspoint.com/react_native/index.htm" target="_blank">TutorialsPoint - React Native</a></li>
              <li><a href="https://www.freecodecamp.org/news/react-native-tutorial/" target="_blank">FreeCodeCamp - React Native Tutorial</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=0-S5a0eXPoc" target="_blank">
                  <img src="https://img.youtube.com/vi/0-S5a0eXPoc/hqdefault.jpg" alt="React Native Crash Course">
                  <p>React Native Crash Course</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=Hf4MJH0jDb4" target="_blank">
                  <img src="https://img.youtube.com/vi/Hf4MJH0jDb4/hqdefault.jpg" alt="Build React Native Apps">
                  <p>Build React Native Apps</p>
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

  <!-- JavaScript for AOS animation -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>
