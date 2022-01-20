<?php 
include('header.php');
include("db_connect.php");
$id=$_GET['bid'];
$query1="select * from products where bid=$id";
$elements=$conn->query($query1);
?>      
            <?php  $query="select * from brands where bid=$id";
            $result=mysqli_query($conn,$query);
            $rows1=mysqli_fetch_object($result);?>
        <h2 class="text-center text-danger display-4 pt-2 px-1" style="font-family:'Mochiy Pop P One'"><?= $rows1->name; ?></h2>
        <div class="container-fluid mt-1" style="background-color: rgba(238, 235, 235, 0.829);">
             <div class="d-flex flex-row flex-wrap justify-content-center">
             <?php while($row=mysqli_fetch_assoc($elements)):?>
                <div class="p-2">
                    <div class="card-deck me-3 mt-5 mb-5">
                        <div class="card border-rounded" style="width: 25rem;">
                            <img class="card-img-top" src="<?=$row['pimage'] ?>"  alt="Card image cap">
                            <div class="card-body">
                            <p class="card-text"><?=$row['pname'] ?></p>
                            <div class="d-flex justify-content-between">
                                <div class="img img-thumbnail"><img src="<?=$rows1->image?>" height="50px" width="50px">
                                </div>
                                <a class="btn btn-lg rounded btn-outline-danger" target="_blank" href=productdetails.php?pid="<?=$row['pid'] ?>" role="button">Details...</a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="text-primary h3"><span class="text-accent"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-currency-euro" viewBox="0 0 16 16">
                                <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
                                </svg><?=$row['pprice']?>.<small><?=$row['pprice1']?></small></span>
                                </div>
                                <?php if($row['quantity']==0):?>
                                        <a class="btn add disabled btn-danger mt-1 mb-1" href=shopping_card/addtocard.php?pid="<?=$row['pid'] ?>" role="button">Out of stock</a>
                                        <?php endif;?>
                                        <?php if($row['quantity']!=0):?>
                                <a class="btn add btn-success mt-1 mb-1" href=shopping_card/addtocard.php?pid="<?=$row['pid'] ?>" role="button">Add to card</a>
                                <?php endif;?>  
                                </div>
                            </div>
                        </div>
                    </div>
             </div>    
                <?php endwhile; ?>
            </div>
            <?php include('footer.php');
?>        