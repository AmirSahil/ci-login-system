<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Products</h1>
</div>
<div class="table-wrap">
    <form action="" method="post" name="products_form" class="pl-3">
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Product Name</label>
                <input type="email" class="form-control" placeholder="Product Name" name="pname">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Product Price</label>
                <input type="email" class="form-control" placeholder="Product Price" name="pprice">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Product Qty</label>
                <input type="email" class="form-control" placeholder="Enter Quantity" name="pqty">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Product Img</label>
                <input type="file" class="btn btn-dark form-control" name="pimage">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Category</label>
                <select type="email" class="form-control" id="category" name="pcategory">
                    <option>Shirt</option>
                    <option>Pant</option>
                    <option>Shoes</option>
                </select>
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
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