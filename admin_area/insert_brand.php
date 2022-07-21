<?php
include('../include/connect.php');
if (isset($_POST['insert_brand'])) {
    $brand_title = $_POST['brand_title'];

    // select data from database
    $select_query = "Select * from`brand` where brand_title='$brand_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0)
        echo "<script>alert('This brand is present inside the database')</script>";
    else {

        $insert_query = "insert into `brand` (brand_title) values('$brand_title')";
        $result = mysqli_query($con, $insert_query);
        if ($result)
            echo "<script> alert('$brand_title has been inserted successfully')</script>";
    }
}
?>

<h2 class="text-center">Insert Brand</h2>

<link rel="shortcut icon" href="https://res.cloudinary.com/dhzi2feeu/image/upload/v1657870618/saringan_hfdc1c.ico" type="image/x-icon">
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group w-10 mb-2">
        <input type="submit" class="form-control  bg-info" name="insert_brand" value="Insert Brand" aria-label="Username" aria-describedby="basic-addon1" class="bg-info">
        <!-- <button class="bg-info p-3" type="submit">Insert Brand</button> -->
    </div>
</form>