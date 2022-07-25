<?php
require "./_Connect_To_Database.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $findSql = "SELECT * FROM user_details WHERE email='$email'";
    $result = mysqli_query($connection, $findSql);
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password_hash'])) {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['firstName'] = $row['first_name'];
        $_SESSION['lastName'] = $row['last_name'];
        $_SESSION['email'] = $email;
        $_SESSION['joinTime'] = $row['creation_date'];
        $_SESSION['showSuccess'] = true;
    } else {
        session_start();
        $_SESSION['showWarning'] = true;
    }
    header("location: ../Home_Page.php");
}
?>