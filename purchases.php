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

    <!-- Cart Items -->
    
<div class="small-container cart-page">

<table style="margin-top: 150px;">
  <tr>
    <th>Products</th>
    <th>Quantity</th>
    <th>Subtotal</th>
  </tr>
  <tr>
    <td>
      <div class="cart-info">
        <img src="image/images/product_07.jpeg" alt="">
        <div>
          <p>T-Shirt For Men</p>
          <small>Price: 199.99 L.E</small>
          <br>
          <a href="">Remove</a>
        </div>
      </div>
    </td>
    <td><input type="number" value="1" min="1"></td>
    <td>199.99 L.E</td>
  </tr>
    <tr>
      <td>
        <div class="cart-info">
          <img src="image/images/product_08.jpeg" alt="">
          <div>
            <p>Polo T-shirt</p>
            <small>Price: 159.99 L.E</small>
            <br>
            <a href="">Remove</a>
          </div>
        </div>
      </td>
      <td><input type="number" value="1" min="1"></td>
      <td>159.99 L.E</td>
    </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="image/images/product_09.jpeg" alt="">
            <div>
              <p>Umbro T-shirt</p>
              <small>Price: 249.99 L.E</small>
              <br>
              <a href="">Remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>249.99 L.E</td>
      </tr>
</table>

<div class="total-price">
  <table>
    <tr>
      <td>Subtotal</td>
      <td>609.97 L.E</td>
    </tr>
    <tr>
      <td>tax</td>
      <td>121.03 L.E</td>
    </tr>
    <tr>
      <td>Total</td>
      <td>731 L.E</td>
    </tr>
  </table>
</div>

</div>






<?php
include_once "footer.php";
?>