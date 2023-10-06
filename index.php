<!-- connect file-->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ecomerce website </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-0">

        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="./img/logo.jpg" alt="" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total prize=100/-</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- second child  -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="#">welcome guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">login</a>
                </li>
            </ul>
        </nav>

        <!-- third child-->

        <div class="bg-light">
            <h3 class="text-center"> Hidden Store</h3>
            <p class="text-center">Communcication is at the heart of e-commerce and community</p>


        </div>
        <!-- fourth child -->

        <div class="row px-1">
            <div class="col-md-10">
                <!--prodeucts -->
                <div class="row">
                    <!-- fatching products-->
                    <?php

// call the product function 
getproducts();

// $select_query="SELECT * FROM products ORDER BY  rand() limit 0,9";
// $result_query=mysqli_query($con,$select_query);
// //$row=mysqli_fetch_assoc($result_query);
// //echo $row['product_description'];
// while($row=mysqli_fetch_assoc($result_query)){
// $product_id=$row['product_id'];
// $product_title=$row['product_title'];
// $product_description=$row['product_description'];
// $product_image1=$row['product_image1'];
// $product_price=$row['product_price'];
// $category_id=$row['category_id'];
// $brand_id=$row['brand_id'];

// echo " <div class='col-md-4 mb-2'>
// <div class='card'>
//     <img src='./admin_area/image/$product_image1' class='card-img-top' alt='$product_title'>
//     <div class='card-body'>
//         <h5 class='card-title'>$product_title</h5>
//         <p class='card-text'>$product_description</p>
//         <a href='#' class='btn btn-info'>Add to cart</a>
//         <a href='#' class='btn btn-secondary'>view more</a>
//     </div>
// </div>
// </div>
// ";


 
// }


?>
                  

                    <!-- row end -->

                </div>
                <!-- col end -->
            </div>

            <!--sidenav -->
            <div class="col-md-2 bg-secondary p-0">
                <!-- Brand to be displayed-->
                <ul class="navbar-nav me-auto text-center ">
                    <li class="nav-item bg-info">
                        <a class="nav-link text-light" href="#">
                            <h4>Delivery Brand</h4>
                        </a>
                    </li>

                    <?php
    //  $select_brands="SELECT * FROM brands";
    //  $result_brands=mysqli_query($con,$select_brands);
    //  $row_data=mysqli_fetch_assoc($result_brands);
    // //  echo $row_data['brands_title'];
    // while($row_data=mysqli_fetch_assoc($result_brands)){
    //   $brand_title=$row_data['brands_title'];
    //   $brand_id=$row_data['brand_id'];
    //   echo "<li class='nav-item'>
    //   <a class='nav-link text-light' href='index.php?brand=$brand_title'>$brand_title</a>
    // </li>";
    // }

    //calling function
    getbrands();

?>


                </ul>
                <!-- categories to be displayed-->
                <ul class="navbar-nav me-auto text-center ">
                    <li class="nav-item bg-info">
                        <a class="nav-link text-light" href="#">
                            <h4>Categories</h4>
                        </a>
                    </li>
                    <?php
    //  $select_categories="SELECT * FROM categories";
    //  $result_categories=mysqli_query($con,$select_categories);
    //  $row_data=mysqli_fetch_assoc($result_categories);
    // //  echo $row_data['brands_title'];
    // while($row_data=mysqli_fetch_assoc($result_categories)){
    //   $category_title=$row_data['category_title'];
    //   $category_id=$row_data['category_id'];
    //   echo "<li class='nav-item'>
    //   <a class='nav-link text-light' href='index.php?category=$category_title'>$category_title</a>
    // </li>";
    // }

    // calling function 

    getcategories();

?>



                </ul>
            </div>
        </div>


        <!-- last child -->
        <div class="bg-info p-3">
            <p> All right reserved o- Designed by Khanam-2024</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>