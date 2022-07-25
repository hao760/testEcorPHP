<?php
include('../function/function_common.php');
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
    <?php
    Regiter();
    ?>
    <div class="container-fluid my-3">
        <h2 class="text-center">New User</h2>
        <div class="row">
            <div class="col-md-12">
                <form action="" enctype="multipart/form-data" method="post">
                    <div class="form-outline">
                        <label for="user-name" class="form-label">User-name</label>
                        <input type="text" name="user-name" class="form-control mb-4" placeholder="Enter user-name" />
                    </div>

                    <div class="form-outline">
                        <label for="user_password" class="form-label">user_password</label>
                        <input type="password" name="user_password" class="form-control mb-4" placeholder="Enter user_password" />
                    </div>

                    <div class="form-outline">
                        <label for="user_address" class="form-label">User_address</label>
                        <input type="text" name="user_address" class="form-control mb-4" placeholder="Enter user_address" />
                    </div>
                    <div class="form-outline">
                        <input type="submit" value="Regiter" name="Regiter" class="bg-info p-3">
                    </div>
                </form>

            </div>

        </div>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>