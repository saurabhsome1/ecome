<?php
include('../includ/connect.php');
if(isset($_POST["insert_cat"]))
{
    $category_title=$_POST["cat_title"];

    //select deta from detabse
    $result_query="SELECT * FROM CATEGORY where category_title='$category_title'";
    $result_select=mysqli_query($con , $result_query);
    $number=mysqli_num_rows($result_select);
    if($number>0)
    {
        echo "<script>alert('category hase been updated into dbase')</script>";
    }
    else
    {


    $insert_query="INSERT INTO CATEGORY (category_title) values ('$category_title')";
    $result=mysqli_query($con , $insert_query);
    if($result){
        echo "<script>alert('this category is successfuly insert into dbase')</script>";
    }
    }    
}               
?>
<h2 class="text-center">Insert Categories</h2>

<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="cat_title" placeholder="insert categories" 
  aria-label="categories" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
  
  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="insert categories"> 
 
</div>

</form>