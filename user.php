<?php
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $name =$_POST['name']; 
        $email =$_POST['email'];
        $mobile =$_POST['mobile'];
        $password =$_POST['password'];

        $sql = "insert into `crude` (name,email,mobile,password)values('$name','$email','$mobile','$password')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
           // echo "Data inserted successfully";
           header('location:display.php');
        }
        else
        {
            die(mysqli_error($con));
        }
    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude operation</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="mb-3">
    <label >Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
  </div>

  <div class="mb-3">
    <label >Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  </div>
  <div class="mb-3">
    <label >Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile number" name="mobile" autocomplete="off">
  </div>
  <div class="mb-3">
    <label >Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>