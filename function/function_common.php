    <?php
    include('../include/connect.php');

    function getProduct()
    {
        global $con;
        if (!isset($_GET['category']))
            if (!isset($_GET['brand'])) {
                $select_query = "SELECT * FROM `product` order by rand() ";
                $result_select = mysqli_query($con, $select_query);
                while ($row = mysqli_fetch_assoc($result_select)) {
                    echo "<div class='col-md-4 mb-2'>
                            <div class='card' style='width: 18rem;'>
                                <img src='../admin_area/product_img/$row[product_image]' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'> $row[product_title]</h5>
                                    <p class='card-text'>Mo ta: $row[product_description].</p>
                                    <a href='' class='btn btn-info'>Add to cart</a>
                                    <a href='product_detail.php?product_id=$row[product_id]' class='btn btn-secondary'>View more</a>
                                </div>
                            </div>
                        </div>";
                }
            }
    }

    function getUniqueCategory()
    {

        global $con;
        if (isset($_GET['category'])) {
            $category_id = $_GET['category'];
            $select_query = "SELECT * FROM `product` where category_ID=$category_id order by rand()";
            $result_select = mysqli_query($con, $select_query);
            $num_of_row = mysqli_num_rows($result_select);
            if ($num_of_row == 0) {
                echo "<h2 class='text-center'> Không có gì để hiện luôn</h2>";
            }
            while ($row = mysqli_fetch_assoc($result_select)) {
                echo "<div class='col-md-4 mb-2'>
                            <div class='card' style='width: 18rem;'>
                                <img src='../admin_area/product_img/$row[product_image]' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'> $row[product_title]</h5>
                                    <p class='card-text'>Mo ta: $row[product_description].</p>
                                    <a href='' class='btn btn-info'>Add to cart</a>
                                    <a href='product_detail.php?product_id=$row[product_id]' class='btn btn-secondary'>View more</a>
                                    
                                </div>
                            </div>
                        </div>";
            }
        }
    }

    function getUniqueBrand()
    {

        global $con;
        if (isset($_GET['brand'])) {
            $brand_id = $_GET['brand'];
            $select_query = "SELECT * FROM `product` where brand_id=$brand_id order by rand()";
            $result_select = mysqli_query($con, $select_query);
            $num_of_row = mysqli_num_rows($result_select);
            if ($num_of_row == 0) {
                echo "<h2 class='text-center'> Không có gì để hiện luôn</h2>";
            }
            while ($row = mysqli_fetch_assoc($result_select)) {
                echo "<div class='col-md-4 mb-2'>
                            <div class='card' style='width: 18rem;'>
                                <img src='../admin_area/product_img/$row[product_image]' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'> $row[product_title]</h5>
                                    <p class='card-text'>Mo ta: $row[product_description].</p>
                                    <a href='' class='btn btn-info'>Add to cart</a>
                                    <a href='product_detail.php?product_id=$row[product_id]' class='btn btn-secondary'>View more</a>
                                    
                                </div>
                            </div>
                        </div>";
            }
        }
    }

    function getBrand()
    {
        global $con;
        $select_brand = "Select * from `brand`";
        $result_brand = mysqli_query($con, $select_brand);
        while ($row_data = mysqli_fetch_assoc($result_brand)) {
            $brand_title = $row_data['brand_title'];
            $brand_id = $row_data['brand_id'];
            echo "<li class='nav-item mt-2 '>
                                    <a href='index.php?brand=$brand_id' class='nav-link text-light'> $brand_title</a>
                                    </li>";
        }
    }


    function getCategory()
    {
        global $con;
        $select_category = "Select * from `category`";
        $result_category = mysqli_query($con, $select_category);
        while ($row_data = mysqli_fetch_assoc($result_category)) {
            $category_title = $row_data['category_title'];
            $category_id = $row_data['category_ID'];
            echo "<li class='nav-item mt-2 '>
                                    <a href='index.php?category=$category_id' class='nav-link text-light'> $category_title</a>
                                    </li>";
        }
    }

    function searchProduct()
    {
        global $con;
        if (isset($_GET['search_data'])) {
            $search_data = $_GET['search_data'];
            $select_query = "SELECT * FROM `product` where product_title like '%$search_data%'";
            $result_select = mysqli_query($con, $select_query);
            $num_of_row = mysqli_num_rows($result_select);
            if ($num_of_row == 0) {
                echo "<h2 class='text-center'> Không có gì để hiện luôn</h2>";
            }
            while ($row = mysqli_fetch_assoc($result_select)) {
                echo "<div class='col-md-4 mb-2'>
                            <div class='card' style='width: 18rem;'>
                                <img src='../admin_area/product_img/$row[product_image]' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'> $row[product_title]</h5>
                                    <p class='card-text'>Mo ta: $row[product_description].</p>
                                    <a href='' class='btn btn-info'>Add to cart</a>
                                    <a href='product_detail.php?product_id=$row[product_id]' class='btn btn-secondary'>View more</a>
                                    
                                </div>
                            </div>
                        </div>";
            }
        }
    }
    function get1Product()
    {
        global $con;
        if (isset($_GET['product_id'])) {
            $product_id = $_GET['product_id'];
            $select_query = "SELECT * FROM `product` where product_id=$product_id";
            $result_select = mysqli_query($con, $select_query);
            // $num_of_row = mysqli_num_rows($result_select);
            $row = mysqli_fetch_assoc($result_select);
                echo "<div style='margin: auto;' class='col-md-4 mb-2'>
                            <div  class='card' style='width: 18rem;'>
                                <img src='../admin_area/product_img/$row[product_image]' class='card-img-top' alt='...'>
                                <div class='card-body'>
                                    <h5 class='card-title'> $row[product_title]</h5>
                                    <p class='card-text'>Mo ta: $row[product_description].</p>
                                    <a href='' class='btn btn-info'>Add to cart</a>
                                    <a href='product_detail.php?product_id=$row[product_id]' class='btn btn-secondary'>View more</a>
                                    
                                </div>
                            </div>
                        </div>";
            
        }
    }
