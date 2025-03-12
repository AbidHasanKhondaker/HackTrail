<?php
$connection = mysqli_connect('localhost:3306', 'root');

mysqli_select_db($connection, "Hackathon");

$user = $_POST['username'];
$password = $_POST['password'];

$query_check = "SELECT * FROM `userInfo` WHERE `username`='$user' AND `password`='$password'";
$result_check = mysqli_query($connection, $query_check);

$shouldRedirect = (mysqli_num_rows($result_check) == 0);

if ($shouldRedirect) {
    echo "Warning: username or password is wrong";
} else {
    $row = mysqli_fetch_assoc($result_check);
    if ($row) {
      $username = $row['username'];
      $email = $row['email'];
      $password = $row['password'];
      $course1 = $row['1'];
      $course2 = $row['2'];
      $course3 = $row['3'];
      $course4 = $row['4'];
      $course5 = $row['5'];
      
  
  
      session_start();
  
      
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password; 
      $_SESSION['email'] = $email;
      $_SESSION['course1'] = $course1;
      $_SESSION['course2'] = $course2;
      $_SESSION['course3'] = $course3; 
      $_SESSION['course4'] = $course4; 
      $_SESSION['course5'] = $course5; 
  }
}
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
      else{
        window.location.href = "profile.php"
      }
    }

    window.onload = redirectToPage;
  </script>
</head>

<body>
  
  <script src="./app.js"></script>
</body>

</html>
