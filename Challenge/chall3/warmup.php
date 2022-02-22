<!DOCTYPE HTML>
<?php
  require("flag1.php");
  if (isset($_GET['source'])) {
    highlight_file(__FILE__);
    die();
  }
  if (isset($_GET['MyValue'])) {
    $your_entered_string = $_GET['MyValue'];
    $intermediate_string = 'iLovePHP';
    $final_string = preg_replace(
            "/$intermediate_string/", '', $your_entered_string);
    if ($final_string === $intermediate_string) {
      
      super_secret_function();
    }
  }
?>

<html>
  <head>
    <title>Challenge 1</title>
  </head>
  <body>
    <h2> Source code says it all</h2>
   <h2>HINT : see how preg_replace works</h2> 
    <p>Try to reach <code>super_secret_function()</code></p>
    <a target="_blank" href="?source">See the source code</a>

  </body>
</html>