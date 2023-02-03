
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <title>Upload Page</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Uploads</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="post.php">Upload Pictures</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post_news.php">Upload News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Upload Academics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="test.php">Delete images</a>
          </li>
          
          
          
        </ul>
      </div>
      <form class="form-inline my-2 my-lg-0">
        <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>
      </form>
    </nav>
    <div class="container my-5">
     
      
      
<head>
  <style>
    form {
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <form action="upload.php" method="post" enctype="multipart/form-data">
    <h2>Upload Image</h2>
    <input type="file" name="image">
    <br><br>
    <input type="submit" value="Submit">
  </form
      
      <!-- Content goes here -->
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
crossorigin="anonymous"
></script>
<script
   src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
   integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
   crossorigin="anonymous"
 ></script>

  </body>
</html>


