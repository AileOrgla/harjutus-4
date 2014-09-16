<!DOCTYPE HTML>
<html>
   <head>
   <title>Harjutus4</title>
	 <meta http-equiv="Content-Type" content="text/html;
   charset=utf-8">
   <title>PHP põhitõed</title>
	 </head>
   <body>
      <h2>Arvutamine murd- ja täisarvudega</h2>
        <?php 
          echo $float = 3.14; 
          echo "<br>";
          echo $float + 7;
          echo "<br>";
          echo 4/3;
        ?> 
      <h2>Murdarvude ümardamine</h2>
        <?php
          echo round($float, 1);
          echo "<br>";
          echo ceil($float);
          echo "<br>";
          echo floor($float);
        ?>
      <h2>Andmetüübi funktsioonid</h2>
        <?php
          $integer = 7;
          echo "Kas {$integer} on integer? " . is_int($integer);
          echo "<br>";
          echo "Kas {$float} on integer? " . is_int($float); 
          echo "<br>";
          echo "Kas {$integer} on float? " . is_float($integer);
          echo "<br>";
          echo "Kas {$float} on float? " . is_float($float);
          echo "<br>";
          echo "Kas {$integer} on number? " . is_numeric($integer);
          echo "<br>";
          echo "Kas {$float} on number? " . is_numeric($float);
        ?>
      <h2>Jadad(array)</h2>
        <?php
          $numbers = array(4, 8, 15, 16, 23, 42);
          echo $numbers[1];
          echo "<br>";
          echo $numbers[0];
          echo "<br>";
          echo $numbers[2];
          echo "<br>";
          echo $numbers[3];
          echo "<br>";
          echo $numbers[4];
          echo "<br>";
          echo $numbers[5];
          echo "<br>";
          $mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));
          echo $mixed[2];
          echo "<br>";
          echo $mixed[4][2];
          echo "<br>";
          $mixed[2] = "kass";
          $mixed[5] = "kass";
          $mixed[] = "hobune";
        ?>
      <pre>
        <?php
          echo print_r($mixed);
        ?>
      </pre>
      <h2>Associative arrays</h2>
        <?php
          $assoc = array("first_name" => "Nipitiri ", "last_name" => "Orgla");
          echo $assoc["first_name"]; 
          echo $assoc["last_name"];
          echo "<br>";
          $numbers = array(0 => 4, 5 => 8, 6 => 15, 9 => 16, 10 => 23, 15 => 42);
          $assoc["age"] = 20;
          $assoc["first_name"] = "Aile ";
          echo $assoc["first_name"]; 
          echo $assoc["last_name"];
          $assoc["e_mail"] = "aile.orgla@khk.ee";
          echo "<br>";
          echo "Minu nimi on {$assoc["first_name"]}{$assoc["last_name"]}. Minu e-post on {$assoc["e_mail"]}.";
        ?>
      <h2>Array functions</h2>
        <?php
          $numbers_2 = array(8,23,15,42,16,4);
          echo count($numbers_2);
          echo "<br>";
          echo max($numbers_2);
          echo "<br>";
          echo min($numbers_2);
          echo "<br>";
          sort($numbers_2);
          print_r($numbers_2);
          echo "<br>";
          rsort($numbers_2);
          print_r($numbers_2);
          echo "<br>";
          echo $num_string = implode(" ja ", $numbers_2);
          echo "<br>";
          print_r(explode(" ja ", $num_string));
        ?>
   </body>

</html>
