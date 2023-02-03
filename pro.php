<?php


// Create connection
$conn = mysqli_connect("localhost", "id19969242_school", "235@Whaule9898", "id19969242_pictures");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$title = $_POST['title'];
$date = $_POST['date'];
$author = $_POST['author'];
$content = $_POST['content'];

$sql = "INSERT INTO news (title, date, author, content) VALUES (?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ssss", $title, $date, $author, $content);

if (mysqli_stmt_execute($stmt)) {
    echo "News article added successfully";
} else {
    echo "Error adding news article: " . mysqli_error($conn);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
