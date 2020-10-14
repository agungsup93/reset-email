<?php

  include "koneksi.php";

  if(!isset($_GET["reset_pass"])){

    exit("Can't find page");

  }

  $code = $_GET["reset_pass"];

  $query = mysqli_query($koneksi, "SELECT email FROM `reset_password` WHERE code = '$code' ");

  if(mysqli_num_rows($query)==0){

    exit("Can't find page");

  }

  $row = mysqli_fetch_array($query);

 

?>

<!doctype html>

<html lang="en">

  <head>

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

  </head>

  <body>

    <div class="container">

      <div class="row">

        <div class="col-6">

          <h1>Masukkan Password Baru</h1>

            <form action="new-pass.php" method="post">

              <div class="form-group">

                  <label>New Password</label>

                  <input class="form-control" type="password" name="password" placeholder="New Password">

                  <input type="hidden" value="<?php echo $row["email"]?>" name="email">

              </div>

              <button class="btn btn-success" type="submit" name="new_pass">Update</button>

            </form>

        </div>

      </div>

    </div>

  </body>

</html>