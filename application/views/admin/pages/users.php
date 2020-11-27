<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Users</h1>
</div>
<div class="table-wrap">
    <!--<form action="" method="post" name="user_form" class="pl-3">
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">User ID</label>
                <input type="text" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="User ID">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="User Name">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email_id" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Email">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Password">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <label for="exampleInputEmail1">Login Status</label>
                <input type="text" name="login_status" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="0">
            </div>
        </div>
        <div class="form-group row pr-5">
            <div class="col-xs-6">
                <button type="submit" name="adduser" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>-->
    <form action="<?php echo base_url()?>Adminadduser/savedata" method="post">
        <table width="600" border="1" cellspacing="5" cellpadding="5">
            <tr>
                <td width="230">User ID </td>
                <td width="329"><input type="text" name="id" id="id"/></td>
            </tr>
            <tr>
                <td>User Name </td>
                <td><input type="text" name="user_name" id="user_name"/></td>
            </tr>
            <tr>
                <td>Email ID </td>
                <td><input type="email" name="email_id" id="email_id"/></td>
            </tr>
            <tr>
                <td>Password </td>
                <td><input type="password" name="password" id="password"/></td>
            </tr>
            <tr>
                <td>Login Status </td>
                <td><input type="text" name="login_status" id="login_status"/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
            </tr>
        </table>

    </form>
    <h4 class="example-title mt-4">Users List</h4>
    <div class="table-responsive">
        <table class="table">
        <thead>
            <tr>
            <th>#</th>
            <th>User ID</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Login Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>1PU</td>
            <td>Prohaska Mogan</td>
            <td>@Elijah</td>
            <td>
                <span class="badge badge-danger">private</span>
            </td>
            <td>active</td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>



<!-- /.container-fluid -->