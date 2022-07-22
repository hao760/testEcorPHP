<?php
include('../include/connect.php');
if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $description = $_POST['description'];
    $product_category = $_POST['product_category'];
    echo "<script> alert('Prodtct :$product_category ')</script>";
    $product_brand = $_POST['product_brand'];
    $Price = $_POST['Price'];
    // image
    $product_image = $_FILES['product_image']['name'];
    $temp_image = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($temp_image, "product_img/$product_image");

    $insert_product = "INSERT INTO `product`( `product_title`, `product_description`, `category_id`, `brand_id`, `product_image`, `product_price`) VALUES ('$product_title','$description','$product_category','$product_brand','$product_image','$Price')";
    $result_query = mysqli_query($con, $insert_product);
    echo "<script> alert('Insert thanh cong')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style-admin.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dhzi2feeu/image/upload/v1657870618/saringan_hfdc1c.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style-admin.css">
</head>

<body class="bg-light ">
    <div class="container mt-3 ">
        <h1 id="headerr">Insert Product</h1>
        <form action="" method="post" class="mb-2" enctype="multipart/form-data">
            <!-- <Title></Title> -->
            <div class="form-outline mb-4">
                <label for="product_title" class="form-label">product_title</label>
                <input type="text" placeholder="Enter title" name="product_title" id="product_title" class="form-control" autocomplete="off" required="required">
            </div>
            <!-- </div> -->
            <!-- description -->
            <div class="form-outline mb-4">
                <label for="description" class="form-label">description</label>
                <input type="text" placeholder="Enter description" name="description" id="description" class="form-control" autocomplete="off" required="required">
            </div>

            <!-- category -->
            <div class="input-group w-90 mt-2">
                <select name="product_category" id="" class="form-select" required="required">
                    <option value="Option 1">Seclect Option</option>
                    <?php
                    $select_query = "Select * from `category`";
                    $result_select = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_select))
                        echo "<option value='$row[category_ID]'>$row[category_title]</option>";
                    ?>
                </select>
            </div>


            <!-- Brand -->
            <div class="input-group w-90 mt-2">
                <select name="product_brand" id="" class="form-select mt-4">
                    <option value="Option 1">Seclect Brand</option>
                    <?php
                    $select_query = "Select * from `brand`";
                    $result_select = mysqli_query($con, $select_query);
                    while ($row = mysqli_fetch_assoc($result_select))
                        echo "<option value='$row[brand_id]'>$row[brand_title]</option>";
                    ?>
                </select>
            </div>

            <div class="w-90 m-auto mt-3">
                <label for="product_image" class="form-label">product_ image</label>
                <input type="file" name="product_image" id="product_image" class="form-control" required="required">
            </div>



            <div class="form-outline mb-4">
                <label for="Price" class="form-label">Price</label>
                <input type="text" placeholder="Enter Price" name="Price" id="Price" class="form-control" autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4">
                <input type="submit" class="btn btn-info" name="insert_product" value="Submit">
            </div>
        </form>
    </div>

</body>

</html>