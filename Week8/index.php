<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/w3.css">

    <title>Ecommerce Midterm Site</title>
  </head>
  <body>
    <div class="w3-left w3-right w3-teal" style="width: -webkit-fill-available;">
        <div class="w3-third w3-center">
          <img src="./imgs/logo2.jpg" alt="Logo Here" width="50px" height="50px">
        </div>
        <div class="w3-third w3-center">
          <h2>Ecommerce</h2>
        </div>
        <div class="w3-third w3-center ">
          <h6>Login</h6>
        </div>

      </div>
    <!-- body -->
    <div class="w3-left w3-right" style="width: -webkit-fill-available;">
        <!-- filter bar -->
        <div class="w3-light-blue">
            <!-- search bar -->
            <div class="w3-left w3-quarter w3-center">
              <input type="text" placeholder="Search..">
            </div>
            <!-- something or nothing -->
            <div class="w3-half w3-center">
              <h4>My Products</h4>
            </div>
            <!-- cart icon -->
            <div class="w3-right w3-quarter w3-center">
              <div class="">
                <h3>Cart</h3>
              </div>
            </div>
        </div>
        <!-- product content -->
      <div class="w3-left w3-right">
          <!-- left bar for filters -->
          <div class="w3-left w3-quarter">
              <div class="">

              </div>
              <div class="">

              </div>
          </div>
          <!-- pruducts -->
          <div class="w3-threequarter">
              <!-- populated from db -->
              <div class="">

              </div>
          </div>
      </div>
    </div>
    <!-- footer -->
    <div class="w3-left w3-right w3-light-grey">

    </div>
  <?php
    // connect to database
  	$username = "1";
  	$password = "123";

    $conn = mysqli_connect("webdev.cs.umt.edu","ch124471", "Eixah3ahp9ringo3oX2AhChoh2taij","ch124471")
       or die('Could not connect');
    // echo "Connected successfully <br>";

    $query = "SELECT * from auth";
    // Try changing the SQL to search for username and password.
    //Modify the line below.  Note the concatenation of the variable and single quotes

    $query = "SELECT * from auth where username = '" . $username . "' and password = '" . $password . "'";
    $result = mysqli_query($conn, $query)
      or die("Query failed ");
    // echo "query ok\n";
    $num_results = mysqli_num_rows($result);
    echo '<p>Number of rows found: '.$num_results.'</p>';
    //if numresults = 1 then user has authenticated
    //modify the block of code below

    if ($num_results == 1) {
        echo 'You have successfully logged in.';
    } else {
        echo 'Failed to authenticate.';
    }

    // echo " <table border='1'>\n";
    // while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
  	//    echo "\t<tr>\n";
  	//    foreach ($line as $col_value) {
  	//       echo "\t\t<td>$col_value</td>\n";
  	//    }
  	//    echo "\t</tr>\n";
    // }
    // echo "</table>\n";
    //Free result set
    mysqli_free_result($result);
    //close connection
    mysqli_close($conn);
  ?>
  </body>
</html>
