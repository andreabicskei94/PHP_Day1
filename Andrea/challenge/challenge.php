<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Rent a car</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search for cars</button>
      </form>
    </div>
  </div>
</nav>

<div class="welcome-text d-flex justify-content-center mt-2">
    <h1>Hi, welcome by RentACar! Browse between our beautiful cars!</h1>
</div>

<?php 

$cars = array (
    "Mustang" => array (
        "madeby" => "Ford",
        "price" => 200,
        "location" => "Vienna",
        "ps" => 400,
        "img" => "https://cdn.pixabay.com/photo/2012/11/02/13/02/car-63930_960_720.jpg"

    ),

    "Ferrari" => array (
        "madeby" => "Ferrari",
        "price" => 600,
        "location" => "London",
        "ps" => 490,
        "img" => "https://cdn.pixabay.com/photo/2013/10/02/22/58/ferrari-190036_960_720.jpg"

    ),

    "Nissan" => array (
        "madeby" => "Nissan",
        "price" => 600,
        "location" => "Birmingham",
        "ps" => 487,
        "img" => "https://cdn.pixabay.com/photo/2019/03/10/13/49/vehicle-4046251_960_720.jpg"

    )
)

?>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card   card-decoration h-100">
      <img src= <?php  echo $cars ['Mustang']['img']; ?> class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ford Mustang</h5>
        <p class="card-text">
            <?php 
        echo "The beautiful Mustang from Ford" . "<br/>"  . "<br/>" ;
        echo"From: ";
          echo $cars ['Mustang']['madeby'] .  "<br/>";
          echo "Price: ";
          echo $cars ['Mustang']['price'] .  "<br/>";
          echo "Location: ";
          echo $cars ['Mustang']['location'] . "<br/>";
          echo "PS: ";
          echo $cars ['Mustang']['ps'] . "<br/>";
        ?>
        </p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-danger">Rent Me</button>
      </div>
    </div>
  </div>
  <div class="col">
  <div class="card  card-decoration h-100">
      <img src= <?php  echo $cars ['Ferrari']['img']; ?> class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ferrari</h5>
        <p class="card-text">
            <?php 
        echo "A real italian beast" . "<br/>"  . "<br/>" ;
        echo"From: ";
          echo $cars ['Ferrari']['madeby'] .  "<br/>";
          echo "Price: ";
          echo $cars ['Ferrari']['price'] .  "<br/>";
          echo "Location: ";
          echo $cars ['Ferrari']['location'] . "<br/>";
          echo "PS: ";
          echo $cars ['Ferrari']['ps'] . "<br/>";
        ?>
        </p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-danger">Rent Me</button>
      </div>
    </div>
  </div>
  <div class="col">
  <div class="card h-100 card-decoration">
      <img src= <?php  echo $cars ['Nissan']['img']; ?> class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nissan GT-R</h5>
        <p class="card-text">
            <?php 
        echo "A japanese hero" . "<br/>"  . "<br/>" ;
        echo"From: ";
          echo $cars ['Nissan']['madeby'] .  "<br/>";
          echo "Price: ";
          echo $cars ['Nissan']['price'] .  "<br/>";
          echo "Location: ";
          echo $cars ['Mustang']['location'] . "<br/>";
          echo "PS: ";
          echo $cars ['Nissan']['ps'] . "<br/>";
        ?>
        </p>
      </div>
      <div class="card-footer">
      <button type="button" class="btn btn-danger">Rent Me</button>
      </div>
    </div>
  </div>
</div>
 

<div class="login mt-5 d-flex justify-content-center">
<h2>Already a user? </h2>
<br>
<h2>Log in!</h2>

</div>


<?php 

$host="localhost";
$user="root";
$password="";
$db="phpday1";

$con = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from users where user='".$uname."'AND password='".$password."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Username/Password";
        exit();
    }
        
}
?>


<form class=" login-form " method="POST" action="">
  <div class="mb-3">
 

    <label for="user" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>