<?php 
session_start();
$con=mysqli_connect('localhost','root','','sparksintern');
$name=$_POST['Name'];
$q="select * from user where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
//echo $_SESSION['name'];

?>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

   <title>
   viewUser
    </title>
    <link rel="stylesheet" href="styles.css">

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
    <div class="view">
        <h1>User Information</h1>
       <table class="flat-table flat-table-1">
          
           <th>Name</th>
           <th>Email</th>
           <th>Credit</th>
           <tr>
           <?php  
     
     $row=mysqli_fetch_array($result);
           ?>
 <td><?php echo  $row["Name"]; ?></td>
  <td><?php echo  $row["Email"]; ?></td>
  <td><?php echo  $row["Credit"]; ?></td>
   

           </tr>


        </table>

        </div>
        <br>


        <div class="container">
  <div class="text-center">

        <button type="button" class="btn btn-primary btn-lg btn-block">

        <a href="viewuser.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Transfer To</a>
        </button>
</div>
</div>




       <!-- <div class="text-center" >
                 <p class="css-button-text">Transfer To</p>
                 <div class="css-button-inner">
                 <a href="viewuser.php" >
                 <div class="reset-skew">
                 <p class="css-button-inner-text">Transfer To</p>
               </div></a>
               </div>
               </div>-->


               <br> <br> <br> <br> <br>
               
               


    </body>
</html>