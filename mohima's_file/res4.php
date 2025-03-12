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
  <title>Machine Learning Resources</title>
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
        <h1>Machine Learning Resources</h1>

        <!-- Introduction to Machine Learning Section -->
        <div class="resource-section" data-aos="fade-up">
          <h2>Introduction to Machine Learning</h2>
          <p>
            Machine Learning (ML) is a field of artificial intelligence that focuses on building systems that can learn from data, identify patterns, and make decisions with minimal human intervention. It encompasses a variety of techniques and algorithms that enable computers to improve their performance on tasks over time through experience. Machine Learning is crucial for developing intelligent systems that can adapt and provide insights from complex data.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://scikit-learn.org/stable/" target="_blank">Scikit-Learn Documentation</a></li>
              <li><a href="https://tensorflow.org/learn" target="_blank">TensorFlow Learn</a></li>
              <li><a href="https://pytorch.org/docs/stable/index.html" target="_blank">PyTorch Documentation</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.coursera.org/learn/machine-learning" target="_blank">Coursera - Machine Learning by Andrew Ng</a></li>
              <li><a href="https://www.kaggle.com/learn/intro-to-machine-learning" target="_blank">Kaggle - Intro to Machine Learning</a></li>
              <li><a href="https://www.datacamp.com/courses/intro-to-machine-learning-with-python" target="_blank">DataCamp - Intro to Machine Learning with Python</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=ukzFI9rgwfU&list=PLEiEAq2VkUULYYgj13YHUWmRePqiu8Ddy" target="_blank">
                  <img src="https://i.ytimg.com/vi/ukzFI9rgwfU/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCT8v2neVBU9yxFfWluZvOE48nnlw" alt="Machine Learning Tutorial for Beginners">
                  <p>Machine Learning Tutorial for Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=bY__YW-xknU&list=PLfFghEzKVmjsNtIRwErklMAN8nJmebB0I" target="_blank">
                  <img src="https://i.ytimg.com/vi/bY__YW-xknU/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDfAE6S6TmFVbPn36A8edTV-B6aaQ" alt="Machine Learning Full Course">
                  <p>Machine Learning Full Course</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Deep Learning Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="100">
          <h2>Deep Learning</h2>
          <p>
            Deep Learning is a subset of Machine Learning that involves neural networks with many layers (deep neural networks). It excels in handling large amounts of data and complex patterns, making it particularly effective for tasks like image recognition, speech processing, and natural language understanding. Deep Learning models are the backbone of many modern AI applications.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://keras.io/" target="_blank">Keras Documentation</a></li>
              <li><a href="https://www.tensorflow.org/api_docs" target="_blank">TensorFlow API Documentation</a></li>
              <li><a href="https://pytorch.org/tutorials/" target="_blank">PyTorch Tutorials</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.udacity.com/course/deep-learning--ud730" target="_blank">Udacity - Deep Learning Nanodegree</a></li>
              <li><a href="https://www.coursera.org/specializations/deep-learning" target="_blank">Coursera - Deep Learning Specialization</a></li>
              <li><a href="https://www.fast.ai/" target="_blank">fast.ai - Practical Deep Learning for Coders</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=Mubj_fqiAv8&list=PLeo1K3hjS3uu7CxAacxVndI4bE_o3BDtO" target="_blank">
                  <img src="https://i.ytimg.com/vi/Mubj_fqiAv8/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCSEX347Gt2SbRSApK06CIxk1A_Jg" alt="Deep Learning Tutorial for Beginners">
                  <p>Deep Learning Tutorial for Beginners</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=2dH_qjc9mFg&list=PLKnIA16_RmvYuZauWaPlRTC54KxSNLtNn" target="_blank">
                  <img src="https://i.ytimg.com/vi/2dH_qjc9mFg/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLCJjERFfBqa6Mn35l_q1W-8SkqU6A" alt="Deep Learning Full Course">
                  <p>Deep Learning Full Course</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Machine Learning Tools Section -->
        <div class="resource-section" data-aos="fade-up" data-aos-delay="200">
          <h2>Machine Learning Tools</h2>
          <p>
            Machine Learning tools and frameworks provide the infrastructure needed to develop, train, and deploy ML models efficiently. These tools often include libraries for data manipulation, model training, and evaluation. Popular ML tools offer extensive documentation and community support to help users build robust models.
          </p>
          <div class="links-group">
            <h3>Official Documentation</h3>
            <ul>
              <li><a href="https://www.anaconda.com/products/distribution" target="_blank">Anaconda Documentation</a></li>
              <li><a href="https://www.apache.org/projects/spark/" target="_blank">Apache Spark Documentation</a></li>
              <li><a href="https://www.h2o.ai/" target="_blank">H2O.ai Documentation</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>Tutorials</h3>
            <ul>
              <li><a href="https://www.datacamp.com/community/tutorials/spark-tutorial-machine-learning" target="_blank">DataCamp - Apache Spark Tutorial</a></li>
              <li><a href="https://www.machinelearningplus.com/machine-learning/" target="_blank">Machine Learning Plus - Tutorials and Resources</a></li>
              <li><a href="https://www.analyticsvidhya.com/blog/2021/02/a-comprehensive-guide-to-machine-learning-libraries/" target="_blank">Analytics Vidhya - Machine Learning Libraries Guide</a></li>
            </ul>
          </div>
          <div class="links-group">
            <h3>YouTube Videos</h3>
            <ul class="video-links">
              <li>
                <a href="https://www.youtube.com/watch?v=tMZn54M8tGU&list=PLfP3JxW-T70Hh7j17_NLzjZ8CejSPx40V" target="_blank">
                  <img src="https://i.ytimg.com/vi/tMZn54M8tGU/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBixEX9A52_piVxCYXybv6HUJXUkA" alt="Machine Learning Tools Overview">
                  <p>Machine Learning Tools Overview</p>
                </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=bPrmA1SEN2k&list=PLZoTAELRMXVPBTrWtJkn3wWQxZkmTXGwe" target="_blank">
                  <img src="https://i.ytimg.com/vi/bPrmA1SEN2k/hqdefault.jpg?sqp=-oaymwEXCNACELwBSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBtNCa1c_IhNq4w36GPW_ludzZDag" alt="Hands-On Machine Learning with Python">
                  <p>Hands-On Machine Learning with Python</p>
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
      <p>&copy; 2024 Machine Learning Resources. All rights reserved.</p>
    </div>
  </section>
  <!-- End Footer -->

</body>

</html>
