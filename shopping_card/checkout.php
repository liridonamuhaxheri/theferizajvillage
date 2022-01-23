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
$sid=$_POST['sid'];
$email=$_POST['email'];
$password=$_POST['password'];
$total=$_POST['total'];
$query="select * from users where uemail='$email' and upassword='$password' ";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
    $row=mysqli_fetch_object($result);
    $uid=$row->uid;
    $query1="select * from products p ,invoke i where p.pid=i.pid and  sid='$sid'";
    $invoke=mysqli_query($conn,$query1);
    $order=mysqli_fetch_object($invoke);
        $query2="INSERT INTO `order` (`oid`, `uid`, `sid`, `total`) VALUES (NULL, '$uid', '$sid', '$total')";
        $checkorder=mysqli_query($conn,$query2);
        //$query3="select form order where sid=$sid;"
       //include('pdfreport.php');
       ?>
                                   <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body text-center d-block-inline">
                                            <h5 class="cont d-inline me-5"><a href="../index.php" class="profile-edit-btn text-danger"><img src="../images/caret-left.svg"><img src="../images/caret-left.svg">Continue Shopping</a></h5>
                                                <h5 class="card-title d-inline ">Dear <?php echo $row->uname; ?> Your Order   has been placed </h5>
                                                  <input class="btn btn-dark text-right" type="button" onclick="generate()" value="Download" />
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table" id="simple_table">
                                                <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" >Name</th>
                                                            <th class="text-center" scope="col" style="width:20%">Email</th>
                                                            <th class="text-center" scope="col" style="width:20%" >Phone Number</th>
                                                            <th scope="col">Address</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="customtable">
                                                    <tr>
                                                      
                                                      <td><?php echo $row->uname.' '.$row->usurname ?></td>
                                                      <td><?php echo $row->uemail?></td>
                                                      <td class="text-center"><?php echo  $row->uphone?></td>
                                                      <td><?php echo $row->acity.' , '.$row->aroadname.' , '.$row->ahousenum ?></td>
                                                  </tr>
                                                  <tr>
                                                  <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th class="text-center" scope="col" style="width:20%"></th>
                                                            <th scope="col"></th>
                                                
                                                  </tr>
                                                  <tr>
                                                  <th scope="col"></th>
                                                            <th class="text-right"scope="col">Your</th>
                                                            <th class="text-center" scope="col" style="width:20%">Ordered</th>
                                                            <th scope="col">Porducts</th>
                                                
                                                  </tr>
                                                  <tr>
                                                  <th scope="col"></th>
                                                            <th scope="col"></th>
                                                            <th class="text-center" scope="col" style="width:20%"></th>
                                                            <th scope="col"></th>
                                                
                                                  </tr>
                                                        <tr style="background-color:gray;">
                                                            <th scope="col">Name</th>
                                                            <th scope="col">image</th>
                                                            <th class="text-center" scope="col" style="width:20%">Price</th>
                                                            <th scope="col">Description</th>
                                                        </tr>
                                                    <tbody class="customtable">
                                                        <?php while ($product=mysqli_fetch_object($invoke)):?>
                                                        <tr>
                                                      
                                                            <td><?=$product->pname?></td>
                                                            <td><img src="../<?=$product->pimage?>" height="50px" weight="50px"></td>
                                                            <td class="text-center"><?=$product->pprice?>.<?=$product->pprice1?><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-euro" viewBox="0 0 16 16">
                        <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
                        </svg></td>
                                                            <td><?=$product->pdescription?></td>
                                                        </tr>
                                                        <?php endwhile;?>
                                                        <tr>
                                                      
                                                            <td></td>
                                                            <td class="text-center text-link h5">Total</td>
                                                            <td class="text-center text-link h5"><?php echo $total?><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-euro" viewBox="0 0 16 16">
                        <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
                        </svg></td>
                                                            <td></td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                                                       
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
                             <?php
                              $query3="delete from invoke where sid='$sid'";
                               $clearinvoke=mysqli_query($conn,$query3);

}
else
{ 
    ?>
       <div class="errormsg">
                        <h4>Wrong username or password </h4>
</div> <?php
  include ("carddetails.php");
}
?>