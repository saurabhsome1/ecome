<!-- connect file -->
<?php
include('includ/connect.php');
include('functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommers website using php and MYSQL</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- navbar -->
    <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/iconlogo.png" alt="" class="iconlogo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
     aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">total price:100/-</a>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


 <!-- secound child -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="http://localhost/ecommers%20website/admin_area/">welcome guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">login</a>
        </li>
    </ul>
 </nav>

 <!-- third child -->
<div class="bg-light">
    <h3 class="text-center">Hidden store</h3>
    <p class="text-center">communication is at the heart of e-commerce and community</p>
</div>

 <!-- fourth child -->
 <div class="row px-1">
    <div class="col-md-10">
 <!-- products -->
<div class="row">
  <!-- fetching produts -->
  
<?php 
//calling function
getproducts();
?>


    <!-- <div class="col md-4 mb-2"><div class="card">
  <img src="./images/taddy.jpg." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to card</a>
    <a href="#" class="btn btn-secondary">View more</a>

  </div>
</div>
</div> -->
<!-- row end -->

</div>
<!-- col end -->

    </div>
    <div class="col-md-2 bg-secondary p-0 text-center">
 <!-- Brand to be displayed -->
 
<li class="nav-item bg-info">
        <a href="#" class="nave-link text-light"><h5>Delivery Brands</h5></a>
    </li>

    <?php
    getbrands();
    ?>


 
    
 </ul>

<!-- categories to be displayed -->
<ul class="navbar-nav me-auto text-center">
<li class="nav-item bg-info">
        <a href="#" class="nave-link text-light"><h4>Categories</h4></a>
    </li>

    <?php
  getcategories();
    ?>

</ul>


    </div>
 </div>







 <!-- last child -->
 <div class="bg-info p-3 text-center">
    <p>All right reserved ok Designed by saurabh-2023</p>

 </div>
    </div>







 <!-- bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous"></script>
 </body>
 </html>