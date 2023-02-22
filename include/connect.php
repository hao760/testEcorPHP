
<?php

// $con = mysqli_connect('localhost', 'root', '','E-Commerce');
$con = mysqli_connect('localhost', 'id19331427_testphp1', 'ET[_mAU!0Km4OE6W','id19331427_testphp');
if ($con)
    echo "connected";
else
{
    echo "connection failt";
    // die(mysqli_error($con));
    die; 
}


?>