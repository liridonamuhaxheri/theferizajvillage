<?php 
include('header.php');
include("db_connect.php");
$id=$_GET['bid'];
$query1="select * from products where bid=$id";
$elements=$conn->query($query1);
?>      
<div class="nav nav-tabs" id="nav-tab" role="tablist">
            <li class="nav-item dropdown">
                <a class="nav-link text-danger active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#5b5b5b"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/></svg> Brands
                </a>
                <?php 
                $query2="select * from brands";
                $elements1=$conn->query($query2);?>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php while($row=mysqli_fetch_assoc($elements1)):?>
                <a class="dropdown-item" href=showbrandproducts.php?bid="<?=$row['bid'] ?>">
                    <div class="card mb-3" style="height:50px; width:800px">
                        <div class="row no-gutters">
                            <div class="col-md-4" style="height:100px; width:100px">
                            <img src="<?=$row['pimage'];?>" class="card-img"alt="...">
                            </div>
                            <div class="col-md-8">
                                <h5 class="card-title text-center"><?=$row['name'];?></h5>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
            </li>
            <li class="nav-item">
            <a class="nav-link link-dark" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link link-dark" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Account</a>
            </li>
            <li class="nav-item">
            <a class="nav-link link-dark" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Category</a>
            </li>
        </div>
    </ul>
            <?php  $query="select * from brands where bid=$id";
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_object($result);?>
        <h2 class="text-center text-danger display-4 pt-2 px-1" style="font-family:'Mochiy Pop P One'"><?= $row->name; ?></h2>
        <div class="container-fluid mt-1" style="background-color: rgba(238, 235, 235, 0.829);">
             <div class="d-flex flex-row flex-wrap justify-content-center">
             <?php while($row=mysqli_fetch_assoc($elements)):?>
                <div class="p-2">
                    <div class="card-deck me-3 mt-5 mb-5">
                        <div class="card border-rounded" style="width: 25rem;">
                            <img class="card-img-top" src="<?=$row['image'] ?>"  alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text"><?=$row['pname'] ?></p>
                            <div class="d-flex justify-content-between">
                                <div class="text-primary h3"><span class="text-accent"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-currency-euro" viewBox="0 0 16 16">
                                    <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
                                    </svg><?=$row['pprice'] ?><small>.<?=$row['pprice1'] ?></small></span></div>
                                    <a class="btn rounded btn-outline-danger" target="_blank" href=productdetails.php?pid="<?=$row['pid'] ?>" role="button">Details...</a>
                                </div>
                            </div>
                        </div>
                    </div>
             </div>    
                <?php endwhile; ?>
            </div>
            <?php include('footer.php');
?>        