<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <h1><?php echo "Yevgeniy Kolesnik";
         ?></h1>
   <P class="blocktext">Yevgeniy Kolesnik
   <p><?php
      $name = "Yevgeniy";
      $surname = "Kolesnik";
      $age = "43";
      echo "I" . " am " . $name . " " . $surname . ", I am " . $age . " years old" . ", and I work as a Full Stack Developer.";

      // echo " I am $name $surname, I am $age years old, and I work as a Freelancer.\n";
      ?></p>
   <p><?php
      echo " I am $name $surname, I am $age years old, and I work as a Full Stack Developer.\n";
      ?></p>
   <p><?php
      $names = array('Mark', 'John', 'Georg', 'Lisa');
      list($first, $second, $third, $fouth) = $names;
      echo "the third player in the team is $third\n";

      ?>

   </p>


</body>

</html>