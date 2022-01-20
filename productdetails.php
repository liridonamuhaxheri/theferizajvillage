<style>
    .add {
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
    </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php 
include("db_connect.php");
$id=$_GET['pid'];
$query1="select * from products where pid=$id";
$elements=$conn->query($query1);
$row=mysqli_fetch_assoc($elements);
?>
    <div class="row bg-dark pt-4">
    <h2 class="text-white text-center bg-dark mt-2" style="height:80px;"><?=$row['pname']?>
    </div>
<div class="container">
    <div class="row">
        <?php $img="select * from image where pid=$id";
                $images=mysqli_query($conn,$img);
                ?>
        <div class="col-2 mt-4 mb-5 me-3 d-flex flex-row flex-wrap">
            <?php while ($rows=mysqli_fetch_object($images)): ?>
                <a href="#" ><img class="img-thumbnail" src="<?$rows->img_dir;?>"></a>
            <?php endwhile; ?>
        </div>
        <div class="col-9 mb-5 me-3">
            <div class="row">
                <div class="col-9 mt-5">
                   <img src="<?= $row['pimage']; ?>"height="800px" width="99%">
                </div>
                <div class="col-3 mt-5">
                <h3 class=""><?= $row['pname'];?></h3>
                <p><?= $row['pdescription']; ?></P>
                <div class="d-flex justify-content-between">
                                <div class="text-primary h3">
                                    <?php if($row['quantity']==0):?>
                                        <a class="btn add disabled btn-dark mt-1 mb-1" href=shopping_card/addtocard.php?pid="<?=$row['pid'] ?>" role="button">Out of stock</a>
                                        <?php endif;?>
                                        <?php if($row['quantity']!=0):?>
                                <a class="btn add btn-success mt-1 mb-1" href=shopping_card/addtocard.php?pid="<?=$row['pid'] ?>" role="button">Add to card</a>
                                <?php endif;?>    
                                <span class="text-accent"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-currency-euro" viewBox="0 0 16 16">
                                    <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
                                    </svg><?=$row['pprice'] ?><small>.<?=$row['pprice1'] ?></small></span></div>
                                </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<?php include('footer.php');?>