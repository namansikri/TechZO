<?php
require "./partials/_Connect_To_Database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $firstName = $_POST['first-name'];
  $lastName = $_POST['last-name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  if ($password == $cpassword) {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $enrollSql = "INSERT INTO user_details(first_name, last_name, email, password_hash) VALUES('$firstName','$lastName','$email','$hash');";
    $result = mysqli_query($connection, $enrollSql);
    if ($result) {
      session_start();
      $_SESSION['created'] = true;
      header("location: Home_Page.php");
      exit;
    } else {
      echo '<div class="alert-box">
      <span><strong>Error: </strong>Cannot Create the account! Email already exists</span> <button
          id="dismiss"></button>
          </div>';
    }
  } else {
    echo '<div class="alert-box">
    <span><strong>Error: </strong>Cannot Create the account! Passwords didnot match</span> <button
        id="dismiss"></button>
  </div>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>TechZO: Sign Up</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/SignUp.css">
  <link rel="stylesheet" href="./css/Alert_Box.css">
</head>

<body>
  <div class="signup-box">
    <h1>Sign Up</h1>
    <h4>It's free and only takes a minute</h4>
    <form class="form" action="./Sign_Up.php" method="post">
      <label for="first-name">First Name</label>
      <input type="text" name="first-name" id="first-name">
      <label for="last-name">Last Name</label>
      <input type="text" name="last-name" id="last-name">
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
      <label for="cpassword">Confirm Password</label>
      <input type="password" name="cpassword" id="cpassword">
      <input type="submit" value="Submit" id="submit-btn">
    </form>
    <p>
      By clicking the Sign Up button,you agree to our <br>
      <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
    </p>
    <p class="para-2">
      Already have an account? <a href="./Home_Page.html">Login here</a>
    </p>
  </div>
</body>
<script src="./js/Alert_Box.js"></script>

</html>