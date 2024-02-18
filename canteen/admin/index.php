<?php 
include('../includes/connect.php');
include('../functions/common_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- boostrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--css link-->
    <link rel="stylesheet" href="style.css">

    <style>
        .logo{
            width:6%;
    height: 6%;
        }
        .admin_image{
            width:100px;
            height:100px;
        }
        body{
            overflow-x: hidden;
        }
        
    </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome Guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    <!-- second child -->
    <div class="bg-light">
            <h3 class="text-center p-2">ADMIN DASHBORARD</h3>
        </div>

    <!-- third child -->
    <div class="row">
        <div class="col-md-12 bg-dark p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../images/profile.jpg" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
            </div>
            <div class="button text-center">
                <button class="my-3"><a href="insert_product.php" class="nav-link text-warning bg-light p-2">Insert Item</a></button>
                <button class="my-3" ><a href="index.php?view_products" class="nav-link text-warning bg-light p-2">View Items</a></button>
                <button class="my-3"><a href="index.php?insert_category" class="nav-link text-warning bg-light p-2">Insert Category</a></button>
                <button class="my-3"><a href="" class="nav-link text-warning bg-light p-2">View Category</a></button>
                <button class="my-3"><a href="" class="nav-link text-warning bg-light p-2">Orders</a></button>
                <button class="my-3"><a href="" class="nav-link text-warning bg-light p-2">Payments</a></button>
                <button class="my-3"><a href="" class="nav-link text-warning bg-light p-2">Users</a></button>
                <button class="my-3"><a href="" class="nav-link text-warning bg-light p-2">Logout</a></button>
            </div>
        </div>
    </div>

    <!-- fourth child -->
    <div class="container my-3">
        <?php 
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        if(isset($_GET['view_products'])){
            include('view_products.php');
        }
        ?>
    </div>

   
            </div>

    <!--boostrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
     crossorigin="anonymous"></script>
</body>
</html>