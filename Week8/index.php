<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../static/css/main.css">
    <link rel="stylesheet" href="../static/css/w3.css">

    <title>Ecommerce Midterm Site</title>
  </head>
  <body>
    <div class="w3-top w3-bottom w3-light-gray" style="overflow-y:scroll">
      <div class="w3-top w3-left w3-right w3-teal">
        <div class="w3-third">
          <img src="./imgs/logo.png" alt="Logo Here">
        </div>
        <div class="w3-third w3-center">
          <h2>Ecommerce</h2>
        </div>
        <div class="w3-third w3-center ">
          <h6>Login</h6>
        </div>

      </div>
    </div>
  <?php
    // connect to database
  	$username = "admin";
  	$password = "pass123";

    $conn = mysqli_connect("webdev.cs.umt.edu","ch124471", "","ch124471")
       or die('Could not connect');
    echo "Connected successfully <br>";

    $query = "SELECT * from auth";
    // Try changing the SQL to search for username and password.
    //Modify the line below.  Note the concatenation of the variable and single quotes

    //$query = "SELECT * from auth where userID = '" . $username . "'";
    $result = mysqli_query($conn, $query)
      or die("Query failed ");
    echo "query ok\n";
    $num_results = mysqli_num_rows($result);
    echo '<p>Number of rows found: '.$num_results.'</p>';
    //if numresults = 1 then user has authenticated
    //modify the block of code below

    echo " <table border='1'>\n";
    while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  	   echo "\t<tr>\n";
  	   foreach ($line as $col_value) {
  	      echo "\t\t<td>$col_value</td>\n";
  	   }
  	   echo "\t</tr>\n";
    }
    echo "</table>\n";
    //Free result set
    mysqli_free_result($result);
    //close connection
    mysqli_close($conn);
  ?>
  </body>
</html>
