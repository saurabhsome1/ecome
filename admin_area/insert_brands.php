<?php
include('../includ/connect.php');
if(isset($_POST["insert_brand"]))
{
    $brand_title=$_POST["brand_title"];

    //select deta from detabse
    $result_query="SELECT * FROM BRAND where brand_title='$brand_title'";
    $result_select=mysqli_query($con , $result_query);
    $number=mysqli_num_rows($result_select);
    if($number>0)
    {
        echo "<script>alert('Brand hase been updated into dbase')</script>";
    }
    else
    {


    $insert_query="INSERT INTO BRAND  (brand_title) values ('$brand_title')";
    $result=mysqli_query($con , $insert_query);
    if($result){
        echo "<script>alert('this Brand is seccessfuly insert into dbase')</script>";
    }
    }    
}                   
?>
<h2 class="text-center">Insert Brands</h2>


<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="brand_title" placeholder="insert brands" 
  aria-label="brands" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value="insert Brands"> 
</div>

</form>