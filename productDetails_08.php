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

<!-- Product Details -->


    <div class = "card-wrapper">
        <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
            <div class = "img-display">
                <div class = "img-showcase">
                    <img src = "image/images/product_24.jfif" alt = "">
                </div>
            </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
            <h2 class = "product-title">Black T-Shirt</h2>
            <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <span>4.8(21)</span>
        </div>

        <div class = "product-price">
            <p class = "last-price">Old Price: <span>350 L.E</span></p>
            <p class = "new-price">New Price: <span>249.99 L.E</span></p>
        </div>

        <div class = "product-detail">
            <h2>about this item: </h2>
            <p>Availability: in stock</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p>
        </div>

        <div class = "purchase-info">
            <input type = "number" min = "1" value = "1">
            <?php
            if(isset($_SESSION["id"]))
            {
                echo '<button type = "button" class = "btn" name="submit">Add to Cart <i class = "fas fa-shopping-cart"></i></button>';
            }
            else
            {
                echo '<a type = "button" class = "btn" name="submit" href="login.php">Add to Cart <i class = "fas fa-shopping-cart"></i></a>';
            }
            ?> 
        </div>

        <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
                <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
                <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
                <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
                <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
                <i class = "fab fa-pinterest"></i>
            </a>
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