<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    


    <?php
    $x = 1;
    var_dump($x);
    $y = $z = $x + $x;
    $x = "just no";
    var_dump($x, $y, $z);
    ?>

    <?php
    $even_numbers =[];
    $even_numbers[2] = 0;
    $even_numbers["Melissa"] = 1;
    $even_numbers[0] = 2;
    print_r($even_numbers);
    var_dump($even_numbers);
    var_dump(print_r($even_numbers, true));
    ?>
  </body>
</html>
