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
 $uid= $_SESSION['user'];
    $query="select * from users where uid=$uid"; 
    $elements=$conn->query($query);
    $user=mysqli_fetch_assoc($elements);
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
                                <h3 class="register-heading">Edit Profile</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <form action="edit.php" method="post">
                                            <input type="hidden" name="uid" value=<?=$user['uid']?> />
                                            <input type="text" name="uname" class="form-control" placeholder="First Name *" value="<?=$user['uname']?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="usurname"class="form-control" placeholder="Last Name *" value="<?=$user['usurname']?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="upassword" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Upload a profile Picture</label>
                                            <input type="file" name="uimage" class="form-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="uemail"class="form-control" placeholder="Your Email *" value="<?=$user['uemail']?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="uphone" class="form-control" placeholder="Your Phone *" value="<?=$user['uphone']?>" />
                                        </div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col-7">
                                                  <input type="text" name="acity" class="form-control" placeholder="City" value="<?=$user['acity']?>">
                                                </div>
                                                <div class="col">
                                                  <input type="text" name="apostalcode" class="form-control" placeholder="Zip" value="">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                              <div class="form-row">
                                                <div class="col-7">
                                                  <input type="text" name="aroadname" class="form-control" placeholder="RoadName" value="<?=$user['aroadname']?>">
                                                </div>
                                                <div class="col">
                                                  <input type="text" name="ahousenum" class="form-control" placeholder="HouseNumber" value="<?=$user['ahousenum']?>">
                                                </div>
                                              </div>
                                              </div>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Edit Profile"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Comment</label>
                                            <textarea class="form-control" value="<?=$user['Comment']?>"name="Comment"id="exampleFormControlTextarea1" rows="2"></textarea>
                                          </div>
                                    </div>
                                    
                                </div>
                                        </form>
                            </div>
                           
                            </div>
                        
                    </div>
                </div>