b <?php
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
                                    <p class='card-text'>Giá: $row[product_price].</p>
                                    <a href='index.php?add_to_cart=$row[product_id]' class='btn btn-info'>Add to cart</a>
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
                                    <a href='index.php?add_to_cart=$row[product_id]' class='btn btn-info'>Add to cart</a>
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
                                    <a href='index.php?add_to_cart=$row[product_id]' class='btn btn-info'>Add to cart</a>
                                    <a href='product_detail.php?product_id=$row[product_id]' class='btn btn-secondary'>View more</a>
                                    
                                </div>
                            </div>
                        </div>";
        }
    }

    function getIPAddress()
    {
        //whether ip is from the share internet  
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from the remote address  
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    // $ip = getIPAddress();  
    // echo 'User Real IP Address - '.$ip; 
    function add_cart()
    {
        if (isset($_GET['add_to_cart'])) {
            global $con;
            $ip = getIPAddress();
            $get_id_product = $_GET['add_to_cart'];
            $select_query = "select * from `cart_details` where ip_address='$ip' and product_id=$get_id_product";
            $result_query = mysqli_query($con, $select_query);
            $num_of_row = mysqli_num_rows($result_query);
            if ($num_of_row > 0) {
                echo "<script>alert('San pham da ton tai')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            } else {
                $insert_query = "insert into `cart_details` (product_ID,ip_address,quanlity) values('$get_id_product','$ip',1)";
                $result_select = mysqli_query($con, $insert_query);
                echo "<script>alert('Them vào cart thành công')</script>";
                echo "<script>window.open('index.php','_self')</script>";
            }
        }
    }


    function cart_item()
    {
        if (isset($_GET['add_to_cart'])) {
            global $con;
            $ip = getIPAddress();


            $select_query = "select * from `cart_details` where ip_address='$ip'";
            $result_query = mysqli_query($con, $select_query);
            $num_of_row = mysqli_num_rows($result_query);
        } else {
            global $con;
            $ip = getIPAddress();


            $select_query = "select * from `cart_details` where ip_address='$ip'";
            $result_query = mysqli_query($con, $select_query);
            $num_of_row = mysqli_num_rows($result_query);
        }
        echo $num_of_row;
    }


    function total_cart()
    {
        global $con;
        $ip = getIPAddress();
        $total = 0;
        $select_query = "select * from `cart_details` where ip_address='$ip'";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_array($result_query)) {
            $product_id = $row['product_id'];
            $select_product = "select * from `product` where product_id= '$product_id'";
            $result_product = mysqli_query($con, $select_product);
            while ($row_price = mysqli_fetch_array($result_product)) {
                // $product_price=array($row_price['product_price']);
                // $product_value=array_sum($product_price);
                $total += $row_price['product_price'];
            }
        }
        echo $total;
    }


    function get_cart()
    {
        global $con;
        $ip = getIPAddress();
        $select_query = "select * from `cart_details` where ip_address='$ip'";
        $result_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_array($result_query)) {
            $product_id = $row['product_id'];
            $select_product = "select * from `product` where product_id= '$product_id'";
            $result_product = mysqli_query($con, $select_product);
            while ($row_price = mysqli_fetch_array($result_product)) {
                $Product = $row_price['product_title'];
                $ProductImage = $row_price['product_image'];
                $Quanlity = $row['quanlity'];
                $Price = $row_price['product_price'];
                $TotalPrice = $Quanlity * $Price;

                echo "<tr>
                        <td> $Product </td>
                        <td ><img style='width: 80px;height: 60px;' src='../admin_area/product_img/$ProductImage'></img> </td><td>
                            $Quanlity </td>
                            <td>$ $TotalPrice</td>
                            <td><input type='checkbox'></input></td>
                            <td><button class= bg-info'>Updata</button> <button class= bg-info'>Remove</button></td>
                            </tr>";
            }
        }
    }




    ?>