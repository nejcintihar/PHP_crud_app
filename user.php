<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql = "insert into `test` (name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";
  $result=mysqli_query($con,$sql);

  if($result){
    /* echo "Data inserted successfully"; */
    header("location:display.php");
  }else{
    die(mysqli_error($con));
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Crud operations</title>
  </head>
  <body>
    <div>
      <div class="container my-5">
        <h1>New user</h1>
        <form method="post">
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Mobile number</label>
            <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter your password" name="password">
          </div>
  
            <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
        </form>
      </div>
  </body>
</html>