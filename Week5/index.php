<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Part 1</h2>
    <h4>Problem 1</h4><br>
    <p>
      '.' operator concats strings, '.' converts things to strings then joins them. <br>
      '+' converts things to numbers. <br>
    </p>
    <pre><code>
      &lt;?php
      $string1 = 'Hello';
      $string2 = 'World';
      $cat = $string1.' '.$string2;
      echo $cat
      ?>
      &lt;?php
      $num1 = '5';
      $num2 = 4;
      $cat = $num1 + $num2;
      echo $cat
      ?>
    </code></pre>
    <br>

    <!-- https://www.php.net/manual/en/function.array.php -->
    <h4>Problem 2</h4><br>
    <pre><code>
      &lt;?php
      $fruits = array (
        "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
        "numbers" => array(1, 2, 3, 4, 5, 6),
        "holes"   => array("first", 5 => "second", "third")
      );
      ?>

      &lt;php
        $array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
        print_r($array);
      ?>

      &lt;?php
        $a = [1, 2, 3, 4];
        print_r($a);
      ?>
    </code></pre>
    <br>
    <!-- https://www.google.com/search?q=What+is+the+var_dump+function%3F+How+is+it+different+than+print_r%3F&oq=What+is+the+var_dump+function%3F+How+is+it+different+than+print_r%3F&aqs=chrome..69i57.312j0j7&sourceid=chrome&ie=UTF-8 -->
    <h4>Problem 3</h4><br>
    <p>
      var_dump displays structured information about the object / variable. <br>
      This includes type and values. Like print_r arrays are recursed through and indented. <br>
      print_r displays human readable information <br>
    </p>
    <pre><code>
      &lt;?php
        $myArray = [1, 2, 3, 4];
        var_dump($myArray)
        print_r($myArray, TRUE);
      ?>
    </code></pre>
    <br>
    <h4>Problem 4</h4><br>
    <p>
      dynamic typing is when the type of a variable is determined at runtime not on compilation. <br>
      Some advantages of this are that the code is cleaner, type mismatching is harder, and programming is easier. <br>
      Some disadvantages of this are that types are not determined by the programmer, type errors are only at runtime, and it's harder to know what type something is. <br>
    </p>
    <br>
    <h4>Problem 5</h4><br>
    <p>
      First the variable information on x which is an int. <br>
      Then the variable information on x and y and z, where z was not previusly defined <br>
      <br>
      Second the elements of $even_numbers, 2, 0, 1. print that $even_numbers is an array <br>
      Print variable info of print_r($even_numbers, true), which is a string <br>
    </p>
    <pre><code>
      &lt;?php
        $x = 1;
        var_dump($x);
        $y = $z = $x + $x;
        $x = "just no";
        var_dump($x, $y, $z);
      ?>

      &lt;?php
        $even_numbers =[];
        $even_numbers[2] = 0;
        $even_numbers["Melissa"] = 1;
        $even_numbers[0] = 2;
        print_r($even_numbers);
        var_dump($even_numbers);
        var_dump(print_r($even_numbers, true));
      ?>
    </code></pre>
    <?php
      $x = 1;
      var_dump($x);
      $y = $z = $x + $x;
      $x = "just no";
      var_dump($x, $y, $z);
    ?>
    <br>
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
