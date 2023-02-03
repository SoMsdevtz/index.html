<?php
session_start();

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    $error = 'All fields are required';
  } else {
    // Connect to the database
    $conn = mysqli_connect("localhost", "id19969242_school", "235@Whaule9898", "id19969242_pictures");

    // Check if the username and password exists in the database
    $query = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      // Store the user's information in a session
      $_SESSION['logged_in'] = true;
      $_SESSION['username'] = $username;

      header('Location: links.php');
      exit;
    } else {
      $error = 'Invalid username or password';
    }
  }
}
?>