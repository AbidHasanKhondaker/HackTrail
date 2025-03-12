<?php
$connection = mysqli_connect('localhost:3306', 'root');
mysqli_select_db($connection, "Hackathon");

session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if ($email == "n") {
    header('Location: login_first.php');
    exit;
}

$query_check = "SELECT * FROM `userInfo` WHERE `username`='$username' AND `password`='$password'";
$result_check = mysqli_query($connection, $query_check);
$row = mysqli_fetch_assoc($result_check);
$course1 = $row['1'];
$course2 = $row['2'];
$course3 = $row['3'];
$course4 = $row['4'];
$course5 = $row['5'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="abid's_profile_css.css">
    <link rel="stylesheet" href="profile_style.css">
    <title>Learn Hackathon - Profile</title>

    <script>
        function redirectToPage() {
            var shouldRedirect = <?php echo json_encode($shouldRedirect); ?>;
            if (shouldRedirect) {
                window.location.href = "wrong_info.php";
            }
        }

        window.onload = redirectToPage;
    </script>
</head>

<body>
    <!-- Header -->
    <section id="header">
        <div class="header container">
            <div class="navbar">
                <div class="navlist">
                    <ul>
                        <li class="nav-item"><a href="../index.php" data-after="Home">Home</a></li>
                        <li class="nav-item logout"><a href="logout.php" data-after="Logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Main Section -->
    <section id="main">
        <div class="main container profile-container">
            <div class="profile-card">
                <h1>Profile</h1>
                <div class="profile-info">
                    <p><strong>Username:</strong> <?php echo htmlspecialchars($username); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                    <p><strong>Password:</strong> <?php echo htmlspecialchars($password); ?></p>
                    <p><strong>Course 1:</strong> <?php echo htmlspecialchars($course1); ?></p>
                    <p><strong>Course 2:</strong> <?php echo htmlspecialchars($course2); ?></p>
                    <p><strong>Course 3:</strong> <?php echo htmlspecialchars($course3); ?></p>
                    <p><strong>Course 4:</strong> <?php echo htmlspecialchars($course4); ?></p>
                    <p><strong>Course 5:</strong> <?php echo htmlspecialchars($course5); ?></p>
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
    <script src="./app.js"></script>
</body>

</html>
