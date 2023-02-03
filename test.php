<?php
  // Connect to database
  $conn = mysqli_connect("localhost", "id19969242_school", "235@Whaule9898", "id19969242_pictures");
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Delete image
  if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM images_table WHERE id = $delete_id";
    if (mysqli_query($conn, $sql)) {
      echo "Image deleted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  // Select all images from database
  $sql = "SELECT * FROM images_table";
  $result = mysqli_query($conn, $sql);

  // Show all images and delete button
  while ($row = mysqli_fetch_array($result)) {
    echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" width="200" height="200"/>';
    echo '<a href="?delete_id=' . $row['id'] . '">Delete</a><br><br>';
  }

  // Close connection
  mysqli_close($conn);
?>
