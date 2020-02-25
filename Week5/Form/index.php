<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="../../static/css/main.css">
  <link rel="stylesheet" href="../../static/css/w3.css">
</head>

<body>
  <!-- <button onclick="document.getElementById('id01').style.display='block'" class="w3-btn w3-black">Open Modal</button> -->
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $postNameArr = array('firstname', 'lastname', 'number', 'email', 'psw', 'psw-re');

      // Find all of the post identifiers within $_POST
      $postIdentifierArr = array();

      foreach ($postNameArr as $postName)
      {
        if (array_key_exists($postName, $_POST))
        {
          switch ($postName)
          {
          case '$postNameArr[0]':
            echo "Perform actual code for F1_Submit.";
            break;

          case '$postNameArr[1]':
            echo "Perform actual code for F2_Submit.";
            break;

          case '$postNameArr[2]':
            echo "Perform actual code for F3_Submit.";
            break;

          case '$postNameArr[3]':
            echo "Perform actual code for F3_Submit.";
            break;

          case '$postNameArr[4]':
            echo "Perform actual code for F3_Submit.";
            break;

          case '$postNameArr[4]':
            echo "Perform actual code for F3_Submit.";
            break;

          default:
            echo $postName
          }
        } else {
          echo "post was empty"
        }
      }
      print_r($postIdentifierArr)
    }
  ?>

  <div id="form-return-modal-01" class="w3-modal" style="display:block;" onclick="document.getElementById('form-return-modal-01').style.display='none'">
    <div class="w3-modal-content w3-card-4 w3-teal w3-round-xlarge">
      <span onclick="document.getElementById('form-return-modal-01').style.display='none'" class="w3-btn w3-display-topright w3-round-xlarge">&times;</span>
      <br>
      <br>
      <div class="w3-container w3-white">
        <div style="width:fit-content;margin-left:25%;">
          <h3>
            Firstname: Cody<br>
            Lastname: Hill-Boss <br>
            Number: 20 <br>
            email: chb@umt.edu <br>
            password: ******** <br>
            confirmed:******** <br>
          </h3>
        </div>
      </div>
      <footer class="w3-container w3-teal w3-round-xlarge" style="height:40px;">
      </footer>
    </div>
  </div>

</body>

</html>
