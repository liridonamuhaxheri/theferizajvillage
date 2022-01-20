<?php
include('header.php');?>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/56410036_502501350284555_3128895383216848896_n.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/186515274_1014721705729181_4361543931765087882_n.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/140734245_945679295966756_789392383017484195_n.png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/52670790_475223913012299_8241079936421462016_n.jpg" alt="Third slide">
          </div>
        </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>
      </div>
        <div class="container">
        <?php 
         include('db_connect.php');
          $query="select * from category";
          $elements=$conn->query($query);?>
          <div class="row category">
            <div class="card-group rounded">
              <?php while($row=mysqli_fetch_assoc($elements)):?>
              <div class="card rounded">
                <div class="card-body">
                  <a class="d-block text-center text-decoration-none me-1" href=showcategoryproduct.php?cid="<?=$row['cid'] ?>">
                  <img class="d-block rounded mb-3" src="<?=$row['image'];?>" width="99%"alt="Men">
                  <h3 class="fs-base text-dark pt-1 mb-0"><?=$row['cname'];?></h3></a>
                </div>
              </div>
                <?php endwhile; ?>
            </div>
          </div>
        </div>
        <?php $query="select * from  products p JOIN brands b ON p.bid=b.bid;
";
        $elements=$conn->query($query);?>
        <div class="container-fluid main" style="background-color: rgba(238, 235, 235, 0.829);">
          <h2 class="text-center pt-2 px-1">Treding Products</h2>
          <div class="d-flex flex-row flex-wrap justify-content-center">
            <?php while($row=mysqli_fetch_assoc($elements)):
              ?>
            <div class="p-2">
              <div class="card rounded" style="width: 25rem;">
                <img class="card-img-top" src="<?=$row['pimage'];?>" alt="Card image cap" height="500px">
                <div class="card-body">
                  <p class="card-text"><?=$row['pname']?></p>
                  <div class="d-flex justify-content-between">
                    <div class="img img-thumbnail"><img src="<?=$row['image']?>" height="50px" width="50px">
                    </div>
                    <a class="btn btn-lg rounded btn-outline-danger" target="_blank" href=productdetails.php?pid="<?=$row['pid'] ?>" role="button">Details...</a>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div class="text-primary h3"><span class="text-accent"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-currency-euro" viewBox="0 0 16 16">
                      <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
                      </svg><?=$row['pprice']?>.<small><?=$row['pprice1']?></small></span>
                    </div>
                    <?php if($row['quantity']==0):?>
                                        <a class="btn add disabled btn-success mt-1 mb-1" href=shopping_card/addtocard.php?pid="<?=$row['pid'] ?>" role="button">Out of stock</a>
                                        <?php endif;?>
                                        <?php if($row['quantity']!=0):?>
                                <a class="btn add btn-success mt-1 mb-1" href=shopping_card/addtocard.php?pid="<?=$row['pid'] ?>" role="button">Add to card</a>
                                <?php endif;?>  
                  </div>
                </div>
              </div>
            </div>
                <?php endwhile; ?>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-8">
              <div class="card">
                <div class="row g-0">
                  <div class="col-8"  style="background-color: rgba(238, 235, 235, 0.829);">
                    <div class="card-body text-center mt-5 bg-light">
                      <p class="card-text">Hurry up! Limited time offer</p>
                      <h5 class="card-title">Converse All Star<i class="text-danger"> On Sale!</i></h5>
                      <a class="btn rounded btn-danger" href="#" role="button">Shop Now!</a>
                    </div> 
                  </div>
                  <div class="col-4">
                    <img src="https://images.asos-media.com/products/converse-chuck-taylor-hi-lift-platform-white-trainers/12129495-1-white?$n_640w$&wid=513&fit=constrain" class="img-fluid rounded-start" alt="..."> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4 rounded" style="background-image: url('https://img.freepik.com/free-vector/minimal-doodle-frame-background-social-story-highlight_53876-97970.jpg?size=626&ext=jpg');">
              <div class="card-body text-center mt-5">
                <p class="card-text">Your Add banner here!</p>
                <h5 class="card-title">Hurry up to reserve<i class="text-danger"> your spot!</i></h5>
                <a class="btn rounded btn-danger" href="#" role="button">Contact us!</a>
              </div>
            </div>
          </div>
        </div>
<?php include('footer.php');
?>        