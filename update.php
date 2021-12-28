<?php
 include 'con.php';

 if(isset($_POST['done'])){
$username = $_POST['username'];
$password = $_POST['password'];
  
    $id= $_GET['id'];

    $q = " update usertable set id =$id, username='$username',password='$password' where id=$id";

    $query = mysqli_query($con,$q);

    header('location:display.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="main">
        <form method="post">
            <div class="mb-3">
                <h1 class="text-center bg-dark text-white">Update Table</h1>
                <label for="exampleInputEmail1" class="form-label">username</label>
                <input type="text" class="form-control" name="username"  aria-describedby="emailHelp">
               
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            
            <button type="submit" class="btn btn-primary " name="done" >Submit</button>
        </form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
