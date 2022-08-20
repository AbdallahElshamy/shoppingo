<?php 
  session_start();
  if(isset($_SESSION["id"]))
    {
      include_once "headerafter.php";
    }
  else
    {
      include_once "headerbefore.php";
    }
?>

    <!-- Page Content -->


<div class="empty"></div>


<!-- -------------------------------------------------------------------------------------------------------------- -->

    <!-- Carousel -->
    
    <div id="featured">
      <div id="carousel-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-slide" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slide" data-slide-to="1"></li>
          <li data-target="#carousel-slide" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="image/images/slide_01.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="image/images/slide_02.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
          <img src="image/images/slide_03.jpg" class="d-block w-100" alt="">
        </div>
        <a class="carousel-control-prev" href="#carousel-slide" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-slide" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
    <!-- End of Carousel -->

<!-- -------------------------------------------------------------------------------------------------------------- -->

    <!-- show product -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.php" style="color:#b23850!important">View all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="productDetails_01.php"><img src="image/images/product_07.jpeg" alt=""></a>
              <div class="down-content">
                <a href="productDetails_01.php"><h4>T-Shirt For Men</h4></a>
                <h6>199.99 L.E</h6>
                <p>Availability: in stock</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="productDetails_02.php"><img src="image/images/product_08.jpeg" alt=""></a>
              <div class="down-content">
                <a href="productDetails_02.php"><h4>Polo T-shirt</h4></a>
                <h6>159.99 L.E</h6>
                <p>Availability: in stock</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (23)</span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="productDetails_03.php"><img src="image/images/product_09.jpeg" alt=""></a>
              <div class="down-content">
                <a href="productDetails_03.php"><h4>Umbro T-shirt</h4></a>
                <h6>249.99 L.E</h6>
                <p>Availability: in stock</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (36)</span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="productDetails_04.php"><img src="image/images/product_10.jpeg" alt=""></a>
              <div class="down-content">
                <a href="productDetails_04.php"><h4>Adidas T-Shirt</h4></a>
                <h6>279.99 L.E</h6>
                <p>Availability: in stock</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (48)</span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="productDetails_05.php"><img src="image/images/product_19.jfif" alt=""></a>
              <div class="down-content">
                <a href="productDetails_05.php"><h4>Champion T-Shirt</h4></a>
                <h6>299.99 L.E</h6>
                <p>Availability: in stock</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (16)</span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="productDetails_06.php"><img src="image/images/product_18.jfif" alt=""></a>
              <div class="down-content">
                <a href="productDetails_06.php"><h4>Suit For Men</h4></a>
                <h6>2249.99 L.E</h6>
                <p>Availability: in stock</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fas fa-star-half-alt"></i></li>
                </ul>
                <span>Reviews (62)</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8"><br>
                  <h4>Creative &amp; Unique <em>Shoppingo</em> Products</h4>
                  <p></p>
                </div>
                <div class="col-md-4">
                  <a href="products.php" class="filled-button">All Products</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  

<?php 
include_once"footer.php";
?>