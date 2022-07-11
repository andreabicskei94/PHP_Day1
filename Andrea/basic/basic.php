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

<div class="myname"><?php
   $myname="Andrea Bicskei";

   echo $myname;
   
    
    ?></div>

    <div class="infos">
        <?php 
        $myage=27;
        $fName="Andrea";
        $lName="Bicskei";
        $jobTitle="Junior Full Stack Developer";
        $schoolName="CodeFactory Vienna";

        echo "Hi, my first name is " . $fName . ", and my last name is " . $lName . ". I'm a " . $jobTitle . ", and finishing my course at " . $schoolName . " on August 18th. I am " . $myage . " years old." 



        ?>
    </div>

    <div class="array mt-5 d-flex justify-content-center">

    <?php
    
    $gamerNames = array(1,2,3,4);
    $gamerNames[0]="Mark";
    $gamerNames[1]= "John";
    $gamerNames[2]="George";
    $gamerNames[3]="Lisa";
    echo "The 3rd player is " . $gamerNames[2];
    
    ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>