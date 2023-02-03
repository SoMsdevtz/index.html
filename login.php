<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <?php if (isset($error)) { ?>
        <p style="color: red;"><?php echo $error; ?></p>
      <?php } ?>
      <form action="p.php" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Login">
      </form>
    </div>
  </body>
</html>