
<?php

$con = mysqli_connect('localhost', 'root', '','E-Commerce');
if ($con)
    echo "connection successful";
else
{
    echo "connection failt";
    die(mysqli_error($con));
    die; 
}


?>