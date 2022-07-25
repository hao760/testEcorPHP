<?php
include('../function/function_common.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website-Cart detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://res.cloudinary.com/dhzi2feeu/image/upload/v1657870618/saringan_hfdc1c.ico" type="image/x-icon">

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <!-- navbar -->
    <div class="p-0 container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img id="logo" src="../img/popeyes-14134.jpg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="cart.php">
                                <i class="p-1 fa-solid fa-cart-arrow-down"></i>Cart<sup><?php cart_item();?></sup>
                            </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="cart.php">Price: <?php total_cart();' $'?></a>
                        </li>
                    </ul>
                    <form action="" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                        <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                        <input type="submit" value="Search" class="btn btn-outline-light">
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Welcome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login</a>
            </li>

        </ul>
    </nav>


    <!-- child thirde -->
    <div class="bg-light">
        <h3 class="text-center">Hidden Store</h3>
        <p class="text-center">Communications is at the heart ofe-commerce
            and community</p>
    </div>

    <!-- child four -->
    <div class="row iimg">
        <div class="col-md-10">
            <!-- products -->
            <div class="row">
                <form action="" method="post">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Product Image</th>
                            <th>Quanlity</th>
                            <th>Update</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                            <th>Operation</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        Update();
                        get_cart();
                        Delete_cart();
                        ?>
                    </tbody>
<!-- <input type="submit" value="g" name=""> -->
                </table>
                </form>
            </div>
            <button class="p-3  bg-info"><a class="text-decoration-none " href="checkout.php">ChechOut</a></button>
        </div>
        <div class="col-md-2 col-bg-2 bg-secondary p-0">
            <!-- Brand -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="../admin_area/index.php" class="nav-link text-light">
                        <h4>Delivery Brands</h4>
                    </a>
                </li>
                <?php
                getBrand();
                ?>
            </ul>

            <!-- Category -->
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item bg-info">
                    <a href="#" class="nav-link text-light">
                        <h4>Delivery Category</h4>
                    </a>
                </li>
                <?php
                getCategory();
                ?>
            </ul>
        </div>
    </div>
    </div>


    <?php
    include('footer.html');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>