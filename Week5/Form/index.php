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
      $echo = "<div id=\"form-return-modal-01\" class=\"w3-modal\" style=\"display:block;\" onclick=\"document.getElementById('form-return-modal-01').style.display='none'\">";
      $echo +="<div class=\"w3-modal-content w3-card-4 w3-teal w3-round-xlarge\">";
      $echo += "<span onclick=\"document.getElementById('form-return-modal-01').style.display='none'\" class=\"w3-btn w3-display-topright w3-round-xlarge\">&times;</span>";
      $echo += "<br><br>";
      $echo += "<div class=\"w3-container w3-white\">";
      $echo += "<div style=\"width:fit-content;margin-left:25%;\">";
      $echo += "<h3>";

      foreach ($postNameArr as $postName)
      {
        if (array_key_exists($postName, $_POST))
        {
          switch ($postName)
          {
          case $postNameArr[0]:
            $echo += "Firstname: ".$_POST[$postNameArr[0]]."<br>";
            break;

          case $postNameArr[1]:
            $echo += "Lastname: ".$_POST[$postNameArr[1]]." <br>";
            break;

          case $postNameArr[2]:
            $echo += "Number: ".$_POST[$postNameArr[2]]." <br>";
            break;

          case $postNameArr[3]:
            $echo += "email: ".$_POST[$postNameArr[3]]." <br>";
            break;

          case $postNameArr[4]:
            $echo += "password: ".$_POST[$postNameArr[4]]." <br>";
            break;

          case $postNameArr[5]:
            $echo += "confirmed: ".$_POST[$postNameArr[5]]." <br>";
            break;

          default:
            $echo += $postName." variable not known";
          }
        } else {
          $echo += "Post was empty";
        }
      }
      $echo += "</h3></div></div>";
      $echo += "<footer class=\"w3-container w3-teal w3-round-xlarge\" style=\"height:40px;\"></footer>";
      $echo += "</div></div>";
      return $echo;
    }
  ?>


</body>

</html>
