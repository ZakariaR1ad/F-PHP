<!DOCTYPE HTML>
<?php
    require("flag3.php");
    if (isset($_GET['source'])) {
        highlight_file(__FILE__);
        die();
    }

    if (isset($_GET['in'])) {
        $var = $_GET['in'];
        function filter($var) {
            if(preg_match('/(`|open|exec|pass|system|\$|\/)/i', $var)) {
                return false;
            }
            return true;
        }  

        if(!filter($var)) {
            echo "You caught! restricted chard has been used.";
            echo "\n";
            youre_caught();
        } elseif (filter($var) && eval($var)) {
            echo "Cmd exec successfuly!";
            secret_backdoor();
            # code...
        } else {
            echo "Keep trying";
        }
        
    }
// http://localhost/Challenges/third.php?in=echo(file_get_contents(%27flag3.php%27));        
?>
<html>
  <head>
    <title>3rd Challenge</title>
  </head>
  <body>
    <h2> Source code says it all</h2>
   <h2>HINT : see how preg_match works</h2> 
    <p>Try to execute <code>secret_backdoor()</code></p>
    <a target="_blank" href="?source">See the source code</a>

  </body>
</html>