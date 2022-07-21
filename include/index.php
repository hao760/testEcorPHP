<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website using PHP and MySQL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://res.cloudinary.com/dhzi2feeu/image/upload/v1657870618/saringan_hfdc1c.ico" type="image/x-icon">

    <link rel="stylesheet" href="style.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../test.css"> -->


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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                            <a class="nav-link active" href="#">
                                <i class="p-1 fa-solid fa-cart-arrow-down"></i>Cart<sup>1</sup>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Price</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
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
                <div class="col-md-4 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/popeyes-14134.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-info">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/popeyes-chicken-507354.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-warning">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/texas-chicken-348801.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-danger">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/texas-chicken-348801.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card" style="width: 18rem;">
                        <img src="../img/texas-chicken-348801.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-danger">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>

            </div>
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
                $select_brand = "Select * from `brand`";
                $result_brand = mysqli_query($con, $select_brand);
                //$row_data=mysqli_fetch_assoc($result_brands);
                // echo$row_data['brand_title'];
                // echo$row_data['brand_title'];
                while ($row_data = mysqli_fetch_assoc($result_brand)) {
                    $brand_title = $row_data['brand_title'];
                    $brand_id = $row_data['brand_id'];
                    echo "<li class='nav-item mt-2 '>
                         <a href='index.php?brand=$brand_id' class='nav-link text-light'> $brand_title</a>
                         </li>";
                }
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
                $select_category = "Select * from `category`";
                $result_category = mysqli_query($con, $select_category);
                //$row_data=mysqli_fetch_assoc($result_brands);
                // echo$row_data['brand_title'];
                // echo$row_data['brand_title'];
                while ($row_data = mysqli_fetch_assoc($result_category)) {
                    $category_title = $row_data['category_title'];
                    $category_id = $row_data['category_ID'];
                    echo "<li class='nav-item mt-2 '>
                         <a href='index.php?category=$category_id' class='nav-link text-light'> $category_title</a>
                         </li>";
                }
                ?>
            </ul>
        </div>
    </div>
    </div>



    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>