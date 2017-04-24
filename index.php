<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exo4-php-les-tableaux</title>
</head>
<body>

  <p>##Exercice 1</p>
  <p>
    <?php
      $year = ["January", "Feburary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        print_r ($year);
    ?>
  </p>

  <p>##Exercice 2</p>
  <p>
    <?php
      $year = ["January", "Feburary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        echo $year[2];
    ?>
  </p>

  <p>##Exercice 3</p>
  <p>
    <?php
      $year = ["January", "Feburary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        echo $year[5];
    ?>
  </p>

  <p>##Exercice 4</p>
  <p>
    <?php
      $year = ["January", "Feburary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      $year[5] = "Août";
        echo $year[5];
    ?>
  </p>

  <p>##Exercice 5</p>
  <p>
    <?php
      $region = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme",
      ];
        print_r ($region);
    ?>
  </p>

  <p>##Exercice 6</p>
  <p>
    <?php
      $region = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme",
      ];
        echo $region[59];
    ?>
  </p>

  <p>##Exercice 7</p>
  <p>
    <?php
      $region = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme",
      ];
      $region [] = ["51" => "Marne"];
        print_r ($region);
    ?>
  </p>

  <p>##Exercice 8</p>
  <p>
    <?php
      $year = ["January", "Feburary", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      foreach ($year as $month)
      {
        echo $month." ";
      }
    ?>
  </p>

  <p>##Exercice 9</p>
  <p>
    <?php
      $region = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme",
      ];
      foreach ($region as $department)
      {
        echo $department." ";
      }
    ?>
  </p>

  <p>##Exercice 10</p>
  <p>
    <?php
      $region = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme",
      ];
      foreach ($region as $value => $department)
      {
        echo "The department ".$department." has the number ".$value.". ";
      }
    ?>
  </p>

</body> 
</html>
