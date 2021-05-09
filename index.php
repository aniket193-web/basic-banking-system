<!--Aniket chauhan-->
<!--The Spark fondation-->
<!--Basic Banking System-->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body style="background-color :yellow ">
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color :#7B8788;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to Banking system</h3>
      
                </div>
              </div>
            </div>
            <div class="container">
  <div class="row">
  <div class="col-6"> <img src="img/re.png" class="img-fluid">
                    <br>
                   </div>
    <div class="col-6"><a href="createuser.php"><button style="background-color : #2785C4;">Create a account</button></a><br>
                  </div>
  
    </div>
<br><br>
  <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
  <div class="row">
  <div class="col-6"><img src="img/tr.jpg" class="img-fluid">
                    <br>
                   </div>
    <div class="col-6"> <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a><br>
                  </div>
  
    </div><br><br>

  <!-- Columns are always 50% wide, on mobile and desktop -->
  <div class="row">
    <div class="col-6"><img src="img/st.jpg" class="img-fluid">
                    <br>
                   </div>
    <div class="col-6"><a href="transactionhistory.php"><button style="background-color : #2785C4;">Pervious Transaction </button></a><br>
                  </div>
  </div>
</div>
      <!-- Activity section -->
            
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>