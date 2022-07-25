
<?php

$con = mysqli_connect('localhost', 'root', '','E-Commerce');
if ($con)
    echo "connected";
else
{
    echo "connection failt";
    die(mysqli_error($con));
    die; 
}


?>