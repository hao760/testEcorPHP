

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $ip = getIPAddress();
    $select_query = "select * from `user` where user_ip='$ip'";
    $result_query = mysqli_query($con, $select_query);
    $row = mysqli_fetch_array($result_query);
        $user_ip = $row['user_id'];

    // $select_product = "select * from `product` where product_id= '$product_id'";
    // $result_product = mysqli_query($con, $select_product);
    // while ($row_price = mysqli_fetch_array($result_product))
    ?>

    <button><a href="order.php?user_id=<?php echo $user_ip?>"  rel="noopener noreferrer">Order</a>
    </button>
</body>

</html>