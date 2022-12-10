

<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['FullName'])) {
 
 ?>
<?php
include "header.php";
include "footer.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <script src="script.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap"
      rel="stylesheet"
    />
    <script src="store.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
  
  </head>
   <!-- Store Section Start-->
   <section class="container content-section">
      <h1>Used Cars</h1>
      <div class="shop-items">
        <div class="shop-item">
          <span class="shop-item-title">Honda</span>
          <img
            class="shop-item-image"
            src="Images/store-images/dell-laptop.png"
          />
          <div class="shop-item-details">
            <span class="shop-item-price">$10200</span>
            <button class="btn btn-primary shop-item-button" type="button">
              ADD TO CART
            </button>
          </div>
        </div>
        <div class="shop-item">
          <span class="shop-item-title">Nissan 1 </span>
          <img
            class="shop-item-image"
            src="Images/laptop-2.png"
          />
          <div class="shop-item-details">
            <span class="shop-item-price">$9500</span>
            <button class="btn btn-primary shop-item-button" type="button">
              ADD TO CART
            </button>
          </div>
        </div>
        <div class="shop-item">
          <span class="shop-item-title">Toyota</span>
          <img
            class="shop-item-image"
            src="Images/store-images/mobile-2.png"
          />
          <div class="shop-item-details">
            <span class="shop-item-price">$9200</span>
            <button class="btn btn-primary shop-item-button" type="button">
              ADD TO CART
            </button>
          </div>
        </div>
        <div class="shop-item">
          <span class="shop-item-title">Ford</span>
          <br>
          <img
            class="shop-item-image"
            src="Images/ford.jpg"
          />
          <div class="shop-item-details">
            <span class="shop-item-price">$7020</span>
            <br>
            <button class="btn btn-primary shop-item-button" type="button">
              ADD TO CART
            </button>
          </div>
        </div>
      </div>
    </section>
    <section class="container content-section">
      <h2 class="section-header">CART</h2>
      <div class="cart-row">
        <span class="cart-item cart-header cart-column">ITEM</span>
        <span class="cart-price cart-header cart-column">PRICE</span>
        <span class="cart-quantity cart-header cart-column">QUANTITY</span>
      </div>
      <div class="cart-items"></div>
      <div class="cart-total">
        <strong class="cart-total-title">Total</strong>
        <span class="cart-total-price">$</span>
      </div>
      <button class="btn btn-primary btn-purchase" type="button">
        PURCHASE
      </button>
    </section>


  </body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
