<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Week 5</title>
    <link rel="stylesheet" href="../static/css/main.css">
    <link rel="stylesheet" href="../static/css/w3.css">

    <style media="screen">
      .inline-block {
        display: inline-block!important;
      }

      .width {
        width: auto!important;
      }

    </style>

    <script type="text/javascript">
      function validate() {
        var first = document.forms["loginForm"]["firstname"].value;
        var last = document.forms["loginForm"]["lastname"].value;
        var num = document.forms["loginForm"]["number"].value;
        var email = document.forms["loginForm"]["email"].value;
        var psw = document.forms["loginForm"]["psw"].value;
        var psw_re = document.forms["loginForm"]["psw-re"].value;

        if (first == "" || last == "") {
          document.getElementById('fn').classList.toggle('hide');
          document.getElementById('ln').classList.toggle('hide');
          return false;
        }

        if(isNaN(num) || (num == "") ) {
          document.getElementById('n').classList.toggle('hide');
          return false;
        }

        if (!(email.includes("@")) || (email   = "") )  {
          document.getElementById('em').classList.toggle('hide');
          return false;
        }

        if(psw != psw_re || psw == '' || psw_re == '') {
          if (psw == '') {
            document.getElementById('pw').classList.toggle('hide');
          }
          if (psw != psw_re) {
            document.getElementById('pr').classList.toggle('hide');
          } else if (psw_re == '') {
            document.getElementById('pr').classList.toggle('hide');
          }

          return false;
        }

        alert("You successfully filled in this form.");
        return true;
      }

    </script>
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
    <h4>Problem 3</h4><br>
    <p>
      print_r to a variable <br>
    </p>
    <pre><code>
      &lt;?php
        $myArray = [1, 2, 3, 4];
        var_dump($myArray)
        $printR = print_r($myArray, true);
        print_r($printR)
      ?>
    </code></pre>
    <br>
    <!-- https://www.google.com/search?q=What+is+the+var_dump+function%3F+How+is+it+different+than+print_r%3F&oq=What+is+the+var_dump+function%3F+How+is+it+different+than+print_r%3F&aqs=chrome..69i57.312j0j7&sourceid=chrome&ie=UTF-8 -->
    <h4>Problem 4</h4><br>
    <p>
      var_dump displays structured information about the object / variable. <br>
      This includes type and values. Like print_r arrays are recursed through and indented. <br>
      print_r displays human readable information <br>
    </p>
    <pre><code>
      &lt;?php
        $myArray = [1, 2, 3, 4];
        var_dump($myArray)
        print_r($myArray, true);
      ?>
    </code></pre>
    <br>
    <h4>Problem 5</h4><br>
    <p>
      dynamic typing is when the type of a variable is determined at runtime not on compilation. <br>
      Some advantages of this are that the code is cleaner, type mismatching is harder, and programming is easier. <br>
      Some disadvantages of this are that types are not determined by the programmer, type errors are only at runtime, and it's harder to know what type something is. <br>
    </p>
    <br>
    <h4>Problem 6</h4><br>
    <p>
      First the variable information on x which is an int. <br>
      Then the variable information on x and y and z, where z was not previusly defined <br>
      <br>
      Second the elements of Array $even_numbers. print that $even_numbers is an array <br>
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
    <br>
    <br>
    <div class="w3-container w3-center w3-light-blue">
      <div class="w3-container w3-center">
        <br><br><br>
        <form class="" name="loginForm" action="../Week5/Form/" onsubmit="return validate()" method="POST">
          <h4>Basic info</h4>
          <label for="firstname">First name</label><br>
          <input class="w3-input inline-block width" type="text" name="firstname" placeholder="First Name">
          <p id='fn' class="hide">You must enter your first name</p>
          <br>
          <label for="lastname">Last name</label><br>
          <input class="w3-input inline-block width" type="text" name="lastname" placeholder="Last Name">
          <p id='ln' class="hide">You must enter your last name</p>
          <br>
          <label for="number">Number</label><br>
          <input class="w3-input inline-block width" type="text" name="number" placeholder="42">
          <p id='n' class="hide">You must enter a number</p>
          <br>
          <label for="email">email address</label><br>
          <input class="w3-input inline-block width" type="email" name="email" placeholder="email" required>
          <p id='em' class="hide">You must enter an email</p>
          <br>
          <label for="psw">Password</label><br>
          <input class="w3-input inline-block width" type="password" name="psw" placeholder="*******" required>
          <p id='pw' class="hide">You must enter a password</p>
          <br>
          <label for="psw-re">Confirm Password</label><br>
          <input class="w3-input inline-block width" type="password" name="psw-re" placeholder="*******" required>
          <p id='pr' class="hide">You must enter the same password as above</p>
          <br>
          <input type="submit" class="w3-btn w3-light-green " value="Submit">
        </form>
      </div>
    </div>
    <br>
    <h4>Part 2 code</h4><br>
    <p>
      this is the code that formats the form information and displays it on /Week5/Form/
    </p>

    <pre><code>
    &lt;?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $postNameArr = array('firstname', 'lastname', 'number', 'email', 'psw', 'psw-re');

        // Find all of the post identifiers within $_POST
        echo "<div class=\"w3-modal\" style=\"display:block;\" onclick=\"gotoPage('../')\">";
        echo "<div class=\"w3-modal-content w3-card-4 w3-teal w3-round-xlarge\">";
        echo "<span onclick=\"gotoPage('../')\" class=\"w3-btn w3-display-topright w3-round-xlarge\">&times;</span>";
        echo "<br><br>";
        echo "<div class=\"w3-container w3-white\">";
        echo "<div style=\"width:fit-content;margin-left:25%;\">";
        echo "<h3>";

        foreach ($postNameArr as $postName)
        {
          if (array_key_exists($postName, $_POST))
          {
            switch ($postName)
            {
            case $postNameArr[0]:
              echo "Firstname: ".$_POST[$postNameArr[0]]."<br>";
              break;

            case $postNameArr[1]:
              echo "Lastname: ".$_POST[$postNameArr[1]]." <br>";
              break;

            case $postNameArr[2]:
              echo "Number: ".$_POST[$postNameArr[2]]." <br>";
              break;

            case $postNameArr[3]:
              echo "email: ".$_POST[$postNameArr[3]]." <br>";
              break;

            case $postNameArr[4]:
              echo "password: ".$_POST[$postNameArr[4]]." <br>";
              break;

            case $postNameArr[5]:
              echo "confirmed: ".$_POST[$postNameArr[5]]." <br>";
              break;

            default:
              echo $postName." variable not known";
            }
          } else {
            echo "Post was empty";
          }
        }
        echo "</h3></div></div>";
        echo "<footer class=\"w3-container w3-teal w3-round-xlarge\" style=\"height:40px;\"></footer>";
        echo "</div></div>";
      }
    ?>
    </code></pre>

  </body>
</html>
