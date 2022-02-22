<!DOCTYPE HTML>
<?php

if (isset($_GET['source'])) {
        highlight_file(__FILE__);
        die();
    }

$output = null;

if (isset($_GET['dir'])) {
	$files = scandir($_GET['dir']);
	$output = ($files === false) ? "Error" : count($files)." files";
	echo $output;
    }

?>

<html>
  <head>
    <title>Challenge 4</title>
  </head>
  <body>
    <h2>GLOBal Security Issues</h2>
   <h2>HINT : What about learning some PHP functions ?</h2>
    <p>Pass the_directory to count how many files in it <code>?dir=the_directory</code></p>
    <a target="_blank" href="?source">See the source code</a>
  </body>
</html>
