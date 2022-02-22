<!DOCTYPE HTML>
<?php

if (isset($_GET['source'])) {
        highlight_file(__FILE__);
        die();
    }

$output = null;

if (isset($_GET['input']) && is_string($_GET['input'])) {
  $user = $_GET['input'];
  $output = shell_exec("echo Welcome ${user} i hope you are doing well !");
  echo $output;
}

?>

<html>
  <head>
    <title>Challenge 1</title>
  </head>
  <body>
    <h2>Linux is better than Windows</h2>
   <h2>HINT : Do know how to use CLI ?</h2>
    <p>Pass your_name to welcome you <code>?input=your_name</code></p>
    <a target="_blank" href="?source">See the source code</a>
  </body>
</html>
