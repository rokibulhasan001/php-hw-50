<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>


    



    <h1>Hello, world!</h1>
    <?php

      echo "<h1>Hello, world!</h1>";
      echo "<h1>"."Hello, world!"."<h1>";
      echo "<h1>"."Hello, world! how are you"."<h1>";
      echo "<h1>"."Hello, world!"." how are you"."<h1>";
      print "<h1>"."Hello, world!" . " " . "how are you"."<h1>";


      //echo "<h1>"."Hello, world!" . " " . "how are you"."<h1>";
      #echo "<h1>"."Hello, world!" . " " . "how are you"."<h1>";

      /*
      echo "<h1>"."Hello, world!" . " " . "how are you"."<h1>";
      */


      //variable

      $name = "Roni";
      $Name = "joni";
      $name1 = "Boni";
      $name2 = "Almot";
      $namerakib = "Rokibul Hasan";


      echo "<h1>"."My name is" . " " . "$name" . " " . "khan". "<h1>";
      echo "<h1>"."My name is" . " " . "$Name" . " " . "khan". "<h1>";
      echo "<h1>"."My name is" . " " . "$name1" . " " . "khan". "<h1>";
      echo "<h1>"."My name is" . " " . "$name2" . " " . "khan". "<h1>";

      function callingName(){
       $nameRakib = "Rokibul Hasan";
       echo "<h1>"."My name is" . " " . "$nameRakib" . " " . "khan". "<h1>";

      }
      callingName();

      $rakib = "Rokibul Hasan";

      function callingName1(){
          global $rakib;
       echo "<h1>"."My name is" . " " . "$rakib" . " " . "khan". "<h1>";

      }
      callingName1();

      $firstName = "Var dump Check";
      echo $firstName . "<br>";
      var_dump($firstName);


      $number = 100;
      echo $number . "<br>";
      var_dump($number);





       $number1 = 100.25;
      echo $number1 . "<br>";
      var_dump($number1);

        $number2 = null;
      echo $number2 . "<br>";
      var_dump($number2);

       $number3 = true;
      echo $number3 . "<br>";
      var_dump($number3);

       $number4 = false;
      echo $number4 . "<br>";
      var_dump($number4);

      $data = array("Amla", "Zamla", "Kamla", 100, 142.5, true, false);
      echo  $data[2] . "<br>";
      var_dump($data);

      $result = array("Rajon" => 50, "sujon" => 60, "arif" => 350);
      echo $result['rajon'] . "<br>";
      var_dump($result);


      $number10 = 5;
      $number11 = 10;

      $total = $number10 + $number11;
      echo $total . "<br>";


      $number12 = 6;
      $number13 = 6;

      if($number12 == $number13){
        echo "equal" . "<br>";
      }

       $number14 = 9;
      $number15 = 8;

      if($number14 == $number15){
        echo "equal" . "<br>";
      }else{
        echo "not equal" . "<br>";
        
      }


      $number16 = 12;
      $number17 = 12;

      if($number16 === $number17){
        echo "identical" . "<br>";
      }else{
        echo "not identical" . "<br>";
        
      }


       $number18 = 14;
      $number19 = "14";

      if($number18 === $number19){
        echo "identical" . "<br>";
      }else{
        echo "not identical" . "<br>";
        
      }
    ?>

    <h1>30.To verify the type of any object in PHP, use the var_dump() function:</h1>
       <?php
      $a = 5;       // Integer
      $b = 5.34;    // Float
      $c = "hello"; // String
      $d = true;    // Boolean
      $e = NULL;    // NULL


      //To verify the type of any object in PHP, use the var_dump() function:
      var_dump($a);
      var_dump($b);
      var_dump($c);
      var_dump($d);
      var_dump($e);
      ?> 
       <h1>31. php math</h1>

      <?php
      echo(pi());
      ?>
      <h1>32. case-sensitive constant name</h1>

      <?php
      
      define("GREETING", "Welcome to W3Schools.com!");
      echo GREETING;
      ?> 
      <h1>33. plus+ operator</h1>

      <?php
      $x = 10;  
      $y = 6;

      echo $x + $y;
      ?>

      <h1>34. Minus + operator</h1> 
      <?php
      $x = 10;  
      $y = 6;

      echo $x - $y;
      ?> 
      <h1>35. multiplication + operator</h1> 

        <?php
        $x = 10;  
        $y = 6;

        echo $x * $y;
        ?>

        <h1>36. while loop</h1> 


        <?php
        $i = 1;
        while ($i <6) {
          echo $i;
          $i++;
        }
        ?>

        <h1>37.Do while loop</h1> 

        <?php  
        $ii = 1;

        do {
          echo $ii;
          $ii++;
        } while ($ii < 6);
        ?> 
         <h1>38.for loop</h1> 

        <?php  
        for ($x = 0; $x <= 10; $x++) {
          echo "The number is: $x <br>";
        }
        ?>
        <h1>39.foreach loop</h1>   

        <?php  
        $colors = array("red", "green", "blue", "yellow"); 

        foreach ($colors as $x) {
          echo "$x <br>";
        }
        ?>

      </body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>