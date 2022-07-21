<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin Dash board</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style-admin.css">
</head>

<body>

    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../img/madara.png" alt="" id="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Welcome</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </nav>
        <!-- child 2 -->
        <div class="bg-light">
            <h3 class="text-centerp-2">Manage Details</h3>
        </div>


        <!-- child 3 -->
        <div class="row">
            <div class="col-md-12 bg-secondaryp-1 d-flex align-items-center">
                <div>
                    <a href="#"><img src="../img/popeyes-14134.jpg" alt="" class="admin_image"></a>
                    <p class="text-light text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button><a href="index.php?insert_category" class="nav-link text-light bg-info">Insert Category</a></button>
                    <button><a href="index.php" class="nav-link text-light bg-info">Insert</a></button>
                    <button><a href="index.php?insert_brand" class="nav-link text-light bg-info">Insert Brand</a></button>
                    <button><a href="index.php?hehe" class="nav-link text-light bg-info">Insert</a></button>
                    <button><a href="" class="nav-link text-light bg-info">Insert</a></button>
                    <button><a href="" class="nav-link text-light bg-info">Insert Product</a></button>
                    <button><a href="" class="nav-link text-light bg-info"></a></button>
                    <button><a href="" class="nav-link text-light bg-info">Insert Product</a></button>
                    <button><a href="" class="nav-link text-light bg-info"></a></button>
                    <button><a href="" class="nav-link text-light bg-info">Insert</a></button>
                </div>
            </div>


        </div>

    </div>

    <!-- child four -->
    <div class="container">
        <?php
        if (isset($_GET['insert_category']))
            include('insert_category.php');
        if (isset($_GET['insert_brand']))
            include('insert_brand.php');
        ?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>