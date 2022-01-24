<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    
body{
    background: -webkit-linear-gradient(left, #333, rgb(177,177,177));
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: rgb(236, 47, 47);
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #f00;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
.cont {
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
     @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

body {
    background: -webkit-linear-gradient(left, #333, rgb(177,177,177));
    font-family: 'Calibri', sans-serif !important
}

.container {
    margin-top: 100px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid transparent;
    border-radius: 0px
}
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.card .card-title {
    position: relative;
    font-weight: 600;
    margin-bottom: 10px
}

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent
}

* {
    outline: none
}

.table th,
.table thead th {
    font-weight: 500
}

.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6
}

.table th {
    padding: 1rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6
}

.table th,
.table thead th {
    font-weight: 500
}

th {
    text-align: inherit
}

.m-b-20 {
    margin-bottom: 20px
}

.customcheckbox {
    display: block;
    position: relative;
    padding-left: 24px;
    font-weight: 100;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.customcheckbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer
}

.checkmark {
    position: absolute;
    top: -3px;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #CDCDCD;
    border-radius: 6px
}

.customcheckbox input:checked~.checkmark {
    background-color: #2196BB
}

.customcheckbox .checkmark:after {
    left: 8px;
    top: 4px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg)
}
</style>
<?php
include('../db_connect.php');
if (isset($_SESSION['admin'])){ ?>
<ul class="nav nav-tabs fixed-top bg-dark" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-dark active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Brands</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark text-light" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark text-light" id="product-tab" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="false">Categories</a>
                        </li>
                    </ul>
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <?php
                            $brands="select * from brands";
                            $resultbrand=mysqli_query($conn,$brands);?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title m-b-0">Brands</h5>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th><a class="btn btn-dark ms-3" href="createbrand.php">Create new</a></th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">image</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="customtable">
                                                        <?php while ($brand=mysqli_fetch_object($resultbrand)):?>
                                                        <tr>
                                                            <th> <label class="customcheckbox"><a class="btn btn-success me-1" href=editbrand.php?bid="<?php echo $brand->bid;?>">edit </a>
                                                            <a class="btn btn-danger me-1" href=deletebrand.php?bid="<?php echo $brand->bid;?>">Delete</a></th>
                                                            <td><?=$brand->name?></td>
                                                            <td><img src="../<?=$brand->image?>" height="50px" weight="50px" ></td>
                                                        </tr>
                                                        <?php endwhile;?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php
                            $products="select * from products";
                            $resultproduct=mysqli_query($conn,$products);?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title m-b-0">Products</h5>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th><a class="btn btn-dark ms-3" href="createproduct.php">Create new</a></th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">image</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="customtable">
                                                        <?php while ($product=mysqli_fetch_object($resultproduct)):?>
                                                        <tr>
                                                            <th> <label class="customcheckbox"><a class="btn btn-success me-1" href=editprd.php?pid="<?php echo $product->pid;?>">edit </a>
                                                            <a class="btn btn-danger me-1" href=deleteproduct.php?pid="<?php echo $product->pid;?>">Delete</a></th>
                                                            <td><?=$product->pname?></td>
                                                            <td><img src="../<?=$product->pimage?>" height="50px" weight="50px"></td>
                                                            <td><?=$product->pprice?>.<?=$product->pprice1?></td>
                                                            <td><?=$product->quantity?></td>
                                                            <td><?=$product->pdescription?></td>
                                                        </tr>
                                                        <?php endwhile;?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="product" role="tabpanel" aria-labelledby="product-tab">
                            <?php
                            $categories="select * from category";
                            $resultcategory=mysqli_query($conn,$categories);?>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title m-b-0">Categories</h5>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th><a class="btn btn-dark ms-3" href="createcategory.php">Create new</a></th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">image</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="customtable">
                                                        <?php while ($category=mysqli_fetch_object($resultcategory)):?>
                                                        <tr>
                                                            <th> <label class="customcheckbox"><a class="btn btn-success me-1" href=editcategory.php?cid="<?php echo $category->cid;?>">edit </a>
                                                            <a class="btn btn-danger me-1" href=deletecategory.php?cid="<?php echo $category->cid;?>">Delete</a></th>
                                                            <td><?=$category->cname?></td>
                                                            <td><img src="../<?=$category->image?>"  height="50px" weight="50px"></td>
                                                        </tr>
                                                        <?php endwhile;?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
else include('formlogin.html');?>