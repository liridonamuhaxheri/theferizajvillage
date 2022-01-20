<?php 
include('header.php');
include("db_connect.php");
$id=$_GET['cid'];
$query="select * from category where cid=$id";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_object($result);
$query1="select * from products where category=$id";
$elements=$conn->query($query1);
?>
        <h2 class="text-center link-dark display-4 pt-2 px-1" style="font-family:'Mochiy Pop P One'"><?= $row->cname; ?></h2>
        <div class="container-fluid mt-1" style="background-color: rgba(238, 235, 235, 0.829);">
             <div class="d-flex flex-row flex-wrap justify-content-center">
             <?php while($row=mysqli_fetch_assoc($elements)):?>
                <div class="p-2">
                    <div class="card-deck me-3 mt-5 mb-5">
                        <div class="card border-rounded" style="width: 25rem;">
                            <img class="card-img-top" src="<?=$row['pimage'] ?>"  height="500px" alt="Card image cap">
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