<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
<script src="./removeBanner.js"></script>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PEACE AND LOVE SCHOOLS</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
   <link href="assets/img/">
        
        <style type="css/text">
            
            #red{
                color:red;
            }
            
            
            
        </style>

        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                      <img src="school.png"  size="80%" alt="..." width5="30" height="30" />
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                PEACE AND LOVE 
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">ABOUT</a></li>
                            <li class="nav-item"><a class="nav-link" href="academics.html">ACADEMICS</a></li>
                     <li class="nav-item"><a class="nav-link" href="gallery.php">GALLERY</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
            <br>
         <br>
            <br>
               <br>
                  <br>
    
    <?php
$db = mysqli_connect("localhost", "id19969242_school", "235@Whaule9898", "id19969242_pictures");

$query = "SELECT * FROM news ORDER BY date DESC";
$result = mysqli_query($db, $query);

while ($row = mysqli_fetch_array($result)) {
  $date = strtotime($row['date']);
  $is_new = (time() - $date < 60 * 60 * 24 * 7);
  ?>
  <div class="card">
    <div class="card-header">
      <h3><?php echo $row['title']; ?></h3>
      <?php if ($is_new) { ?>
        <span class="badge badge-warning" style="animation: blinker 1s linear infinite;">New</span>
      <?php } ?>
    </div>
    <div class="card-body">
      <p>Author: <?php echo $row['author']; ?></p>
      <p>Date: <?php echo date("Y-m-d", $date); ?></p>
      <p><?php echo $row['content']; ?></p>
    </div>
  </div>
  <?php
}

mysqli_close($db);
?>

<style>
  .blinker {
    animation: blinker 1s linear infinite;
  }

  @keyframes blinker {
    50% {
      opacity: 0;
    }
  }
</style>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
