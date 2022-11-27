<?php 
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
    <title>CRUD OPERATION</title>
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light"> 
            Add user
            </a>
        </button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql = "select * from `userinformation`";
  $result = mysqli_query($con,$sql);
  if($result){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $number = $row['number'];
        $password = $row['password'];
        echo '
        <tr>
            <th scope="row">'.$id. '</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$number.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">UPDATE</a></button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">DELETE</a></button>
          </td>
        </tr>';
    }
  }
  
  ?>

 
  </tbody>
</table>
    </div>
</body>
</html>