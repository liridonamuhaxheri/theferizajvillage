<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .register{
    background: -webkit-linear-gradient(left, #333, rgb(177,177,177));
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left a{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 150px;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
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
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: rgb(63, 63, 63);
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
<?php
include('../db_connect.php');
session_start();
if (isset($_SESSION['admin'])){
    ?>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="../images/logo.png" alt=""/>
                        <h3>The Village</h3>
                        <p>Shopping and Fun</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Register</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <form action="registerproduct.php" method="post">
                                            <input type="text" name="pname" class="form-control" placeholder="Name*" value="" />
                                        </div>
                                        <div class="form-group">
                                            Category:
                                            <input type="number" name="pcategory"class="form-control" placeholder="Category *" value="" />
                                        </div>
                                        <div class="form-group">
                                            Brand:
                                            <input type="number" name="pbrand" class="form-control" placeholder="Brand*" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Upload a profile Picture</label>
                                            <input type="file" name="pimage" class="form-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-7 mb-3">
                                                    quantity:
                                                <input type="number" id="quantity" name="quantity" min="1"  placeholer="Quantity">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                              <div class="form-row">
                                              Price:
                                              <div class="input-group mb-3">
                                                  
                                                <input type="text" name="pprice" class="form-control ms-5" placeholder="3" aria-label="Username">
                                                <span class="input-group-text">.</span>
                                                <input type="text" name="pprice1" class="form-control" placeholder="99" aria-label="Server">
                                                </div>
                                              </div>
                                              </div>
                                              <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Decription</label>
                                            <textarea class="form-control" name="description"id="exampleFormControlTextarea1" rows="2"></textarea>
                                            <input type="submit" class="btnRegister"  value="Create"/>  
                                        </div>
                                        </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                        </form>
                            </div>
                           
                            </div>
                        
                    </div>
                </div>
                <?php } include('formlogin.html');?>