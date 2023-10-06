<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
$product_title=$_POST['product_title'];
$description=$_POST['description'];
$product_keywords=$_POST['product_keywords'];
$product_category=$_POST['product_category'];
$product_price=$_POST['product_price'];
$product_brands=$_POST['product_brands'];
$product_status='true';

//accessing images 
$product_image1=$_FILES['product_image1']['name'];
$product_image2=$_FILES['product_image2']['name'];
$product_image3=$_FILES['product_image3']['name'];

//accesing image temp name 
$temp_image1=$_FILES['product_image1']['tmp_name'];
$temp_image2=$_FILES['product_image2']['tmp_name'];
$temp_image3=$_FILES['product_image3']['tmp_name'];
$folder = "./image/" . $product_image1;
$folder2 = "./image/" . $product_image2;
$folder3 = "./image/" . $product_image3;


//cheacking empy condition


if($product_title==''){
echo("<script> alert('please fill all the avlable field') </scriipt>");
exit();
}else{
    move_uploaded_file($temp_image1,$folder);
    move_uploaded_file($temp_image2,$folder2);
    move_uploaded_file($temp_image3,$folder3);
   // move_uploaded_file($_FILES['file']['tmp_name'], SITE_ROOT.'/static/images/slides/1/1.jpg');


    // insert query

    $insert_products="INSERT INTO products (product_title,product_description,product_keywords,product_image1,product_image2,product_image3,product_price,date,status) VALUES ('$product_title','$description','$product_keywords','$product_image1','$product_image2','$product_image3','$product_price',Now(),'true')";

    $result_query=mysqli_query($con,$insert_products);

    if($result_query){
        echo"<script> alert('data insert sussfully')   </script>";
    } 

}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert prduct admin deshboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert product</h1>
        <!-- form-->
        <form action="" method="post" enctype="multipart/form-data">

        <!-- title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label" for="product_title">product title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="enter product title" autocomplete="off" required="required">
            </div>
        <!--  description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label" for="product_title">product description</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="enter product description" autocomplete="off" required="required">
            </div>

             <!--  keywords -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label" for="product_keywords">product keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="enter product keywords" autocomplete="off" required="required">
            </div>

           


            <!--  categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">

                <option value="">select category</option>
                <?php
                $select_query="SELECT * FROM categories";
                $result_query=mysqli_query($con,$select_query);

                while($row=mysqli_fetch_assoc($result_query)){
                    $category_title=$row['category_title'];
                    $category_id=$row['category_id'];
                    echo "<option value='$category_id'>$category_title</option> ";




                }



                   ?>

               
        
                </select>
            </div>


            <!--  brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" id="" class="form-select">

                <option value="">select brand1</option>
            <?php
                    $select_query="SELECT * FROM brands";
                    $result_query=mysqli_query($con,$select_query);
       
                    while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brands_title'];
                        $brand_id=$row['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option> ";
                        }
       
       


                        ?>

                </select>
            </div>

            
            <!-- image 1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label" for="product_keywords">product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"  required="required">
            </div>

             <!-- image 2-->
             <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label" for="product_keywords">product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"  required="required">
            </div>


              <!-- image 3-->
              <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label" for="product_keywords">product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"  required="required">
            </div>
            <!--  price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label class="form-label" for="product_price"> product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="enter product keywords" autocomplete="off" required="required">
            </div>

            <!-- btn -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3" value="Insert products">

            </div>
        </form>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>