<?php
// if (file_exists('../function/function_common.php')) {
//     include('../function/function_common.php');
//     echo "<script>alert('0. ')</script>";
// }
if( empty(session_id()) && !headers_sent()){
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> New User Register</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dhzi2feeu/image/upload/v1657870618/saringan_hfdc1c.ico" type="image/x-icon">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">Login User</h2>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post">
                    <div class="form-outline">
                        <label for="user_name" class="form-label">user_name-name</label>
                        <input type="text" name="user_name" class="form-control mb-4" placeholder="Enter user_name" />
                    </div>
                    <div class="form-outline">
                        <label for="user_password" class="form-label">user_password</label>
                        <input type="password" name="user_password" class="form-control mb-4" placeholder="Enter user_password" />
                    </div>

                    <div class="form-outline">
                        <input type="submit" value="Login" name="Login" class="bg-info p-3">
                    </div>
                </form>

            </div>

        </div>


    </div>
    <?php
    global $con;
    if (isset($_POST['Login'])) {
        $user_name = $_POST['user_name'];
        $user_password = $_POST['user_password'];
        $select_query = "SELECT * FROM `user` WHERE user_name= '$user_name'";

        $result_query = mysqli_query($con, $select_query);
        $num_of_row = mysqli_num_rows($result_query);
        if ($num_of_row == 0) {
            echo "<script>alert('Tai khoan ko ton tai. ')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }
        while ($row = mysqli_fetch_array($result_query)) {
            if ($row['user_password'] != $user_password) {
                echo "<script>alert('Password sai. ')</script>";
                echo "<script>window.open('checkout.php','_self')</script>";
            } else {
                echo "<script>alert('Login suceed. ')</script>";
                $_SESSION["user_name"]="$user_name";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>