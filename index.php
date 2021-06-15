<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Welcome to TSF Bank</title>
   <!-- <link rel="stylesheet" href="style.css">-->
  </head>
  <body>
    <body style="background-color:powderblue;"></body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Bank</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              <a class="nav-link" href="#">Transaction History</a>
              <a class="nav-link" href="getdetail.php">view Users</a>
              <a class="nav-link" href="#">Notifications</a>
              <a class="nav-link" href="#">Privacy policy</a>
             <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
            </div>
          </div>
        </div>
    </nav>
      <h1>Welcome to TSF Bank</h1>
      

      <div class="container">
        <div class="card-columns d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSG9034g6YvvdlLFQc8Nsoxi1cRwUZIAJzR-Q&usqp=CAU" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">View Users</h5>
          <p class="card-text">Enquiry other users info and their bank balance.</p>
          <a href="getdetail.php" class="btn btn-primary">View Users</a>
        </div>
      </div>


      <div class="card" style="width: 18rem;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2GOBAWtiwSPJbtEp8N7rLObwXDbCX_aRYOg&usqp=CAU" class="card-img-top" alt="Money Transfer Image">
        <div class="card-body">
          <h5 class="card-title">Money Transfer</h5>
          <p class="card-text">Transfer Money from one user to other.</p>
          <a href="selectuser.php" class="btn btn-primary">Transfer</a>
        </div>
      </div>
    </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>













