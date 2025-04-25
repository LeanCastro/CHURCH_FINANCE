<?php
include 'connection.php';

// Hardcoded username and password
$correct_username = "admin";
$correct_password = "1234";

// Get values from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Check credentials
if ($username === $correct_username && $password === $correct_password) {
    header("Location: dashboard.php");
    exit();
} else {
    echo "<h2>Login Failed. Invalid username or password.</h2>";
}
?>




/*
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

// Giving value my variable //
$usernameValue = "avonetaganahan";
$passwordValue = "admin";

if($username == $usernameValue && $password == $passwordValue) {
    header("Location: dashboard.php");
exit;
}
else {
    echo "<script>window.location='login.php'</script>";
}
*/

?>