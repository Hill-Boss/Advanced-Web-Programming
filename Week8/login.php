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
  // echo '<p>Number of rows found: '.$num_results.'</p>';
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
