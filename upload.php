<?php
  // Connect to database
  $conn = mysqli_connect("localhost", "id19969242_school", "235@Whaule9898", "id19969242_pictures");
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if (isset($_FILES['image']['tmp_name'])) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    // Insert image into database
    $sql = "INSERT INTO images_table (image) VALUES ('$image')";
    if (mysqli_query($conn, $sql)) {
      echo "Image uploaded successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  // Close connection
  mysqli_close($conn);
?>
