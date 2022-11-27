<?php 
include'connect.php'; 
$id = $_GET['updateid'];
$sql = "select * from `userinformation` where id =$id";
$results = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($results);
$name = $row['name'];
$email = $row['email'];
$password = $row['password'];
$number = $row['number'];


 if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['mobile'];
    $pass=$_POST['password'];
    $sql = "update `userinformation` set id=$id ,name='$name',email='$email',  password='$pass', number='$number' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Data Updated successfully";
        header('location:display.php');
    } 
    else{
        die(mysqli_error($con));
    }
 }

?>


<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >

    <title>CRUD OPERATION</title>
  </head>
  <body>
    <div class="container ">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control"  placeholder="Enter Name" name="name" value=<?php echo $name; ?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Email" name="email" value=<?php echo $email; ?>>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter Mobile" name="mobile" value=<?php echo $number; ?>>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter Password" name="password" value=<?php echo $password; ?> >
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >UPDATE</button>
        </form>
    </div>
  </body>
</html>