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
            if(preg_match('/(`|open|exec|pass|file_get_contents|system|readfile\$|\/)/i', $var)) {
                return false;
            }
            return true;
        }  

        if(!filter($var)) {
            echo "You caught! restricted chard has been used.";
            echo "\n";
            youre_caught();
        }
        else {
            if(eval($var)){
                echo "Command executed successfuly!";
            }
            secret_backdoor();
        }
        echo "\n";
        echo "\nKeep trying";
    }

?>
<html>
  <head>
    <title>Jail Challenge</title>
  </head>
  <body>
    <h2> Source code says it all</h2>
   <h2>HINT : I heard you're good at running, but can you escape?</h2> 
    <p>Try to find a backdoor <code>secret_backdoor()</code></p>
    <a target="_blank" href="?source">See the source code</a>

  </body>
</html>