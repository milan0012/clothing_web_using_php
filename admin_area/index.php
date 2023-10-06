<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin deshboard</title>
    <!-- bootstrap css and java script link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body> 
  <!--nav bar-->
   <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img class="logo" src="../img/logo.jpg" alt="">
            <nav class="navbar navbar-expand-lg ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">Welcome guest</a>
                    </li>
                    
                </ul>

</nav>
 
        </div>
    </nav>
    <!-- second child -->
 <div class="bg-light">
    <h2 class="text-center p-2">manage Details</h2>
 </div>
 <!--third child  -->
 <div class="row">
    <div class="col-md-12  bg-secondary p-1 d-flex  align-item-center" >
        <div class="px-5">
            <a href="#"><img  src="../img/product/f4.jpg" alt="" class="admin_image"></a>
            <p class="text-center text-light">Admin name</p>
            </div>
            <div class="button text-center">
               <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert product</a></button>
               <button><a href="" class="nav-link text-light bg-info my-1">View product</a></button>
               <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
               <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
               <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brand</a></button>
               <button><a href="" class="nav-link text-light bg-info my-1"> view Brand</a></button>
               <button><a href="" class="nav-link text-light bg-info my-1"> All orders</a></button>
               <button><a href="" class="nav-link text-light bg-info my-1">All payment</a></button>
               <button><a href="" class="nav-link text-light bg-info my-1"> List User</a></button>
               <button><a href="" class="nav-link text-light bg-info my-1"> Logout</a></button>
            </div>
        
    </div>  
 </div>
<!-- fourth child -->
<div class="container my-3">
    <?php
if(isset($_GET['insert_category'])){
    include('insert_categories.php');
};
if(isset($_GET['insert_brand'])){
    include('insert_brands.php');
};

?>
</div>

 <!-- last child -->
 <div class="bg-info p-3 text-center footer">
<p> All right reserved o- Designed by Khanam-2024</p>
    </div>
   </div> 

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>