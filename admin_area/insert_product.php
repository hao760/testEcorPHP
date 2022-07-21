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
                <select name="product_category" id="" class="form-select">
                    <option value="Option 1">Seclect Option</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>

                </select>
            <!-- Brand -->
            <div class="input-group w-90 mt-2">
                <select name="product_category" id="" class="form-select mt-4">
                    <option value="Option 1">Seclect Brand</option>
                    <option value="Option 1">Brand 1</option>
                    <option value="Option 2">Brand 2</option>
                    <option value="Option 3">Brand 3</option>
                </select>
            </div>

            <div class="w-90 m-auto mt-3">
                <label for="product_image" class="form-label">product_ image</label>
                <input type="file" name="product_image" id="product_image" class="form-control" required="required">
            </div>

            <div class="w-90 m-auto mt-3">
                <label for="product_image2" class="form-label">product_ image2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
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