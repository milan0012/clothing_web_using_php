
<?php
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
    $brands_title=$_POST['brands_title'];
  
    // select data from data
   $select_query="SELECT * FROM brands WHERE brands_title='$brands_title'";
   $result_select=mysqli_query($con,$select_query); 
   $number=mysqli_num_rows($result_select);
   if($number>0){
    echo"<script> alert('this is present inside the database') </script>";
   }else{

   

   $insert_query= "INSERT INTO brands (brands_title)VALUES ('$brands_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo"<script> alert('brand has been insert sussesfuly') </script>";
    }
};
}
?>
<h2 class="text-center">Inser Brands</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control"name="brands_title" placeholder="insert Brands" aria-label="brands" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  
  <input type="submit" class="bg-info border-0 p-2 my-3"name="insert_brand" value="Insert Brands" aria-label="Username" aria-describedby="basic-addon1" class="bg-info">

</div>


</form>