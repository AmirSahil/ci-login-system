<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "ciloginsystem");
?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Products</h1>
</div>
<div class="table-wrap">
    <form action="" method="post" class="pl-3" enctype="multipart/form-data">
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" placeholder="Product Name" name="pname">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="text" class="form-control" placeholder="Product Price" name="pprice">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Product Qty</label>
                <input type="text" class="form-control" placeholder="Enter Quantity" name="pqty">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Product Img</label>
                <input type="file" class="btn btn-dark form-control" name="pimage" id="pimage">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Category</label>
                <select class="form-control" name="pcategory">
                    <option value="shirt">Shirt</option>
                    <option value="pant">Pant</option>
                    <option value="shoes">Shoes</option>
                </select>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <input type="submit" name="submit" class="btn btn-primary" value="Upload">
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST["submit1"])) {
        $fnm = $_FILES["pimage"]["name"];
        $dst = "./product_images/";
        move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
    }

    if(isset($_POST["submit"])) {
        $target_dir = "./product_images/";
        $target_file = $target_dir . basename($_FILES["pimage"]["name"]);
        move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file);
    }
    ?>

    <h4 class="example-title mt-4">Products List</h4>
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Qty</th>
            <th>Product Img</th>
            <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>Teagan</td>
            <td>Prohaska</td>
            <td>@Elijah</td>
            <td>
                <span class="badge badge-danger">admin</span>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>



<!-- /.container-fluid -->