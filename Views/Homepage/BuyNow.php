<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        // You Can Change the Page Title as you like
        $pageTitle = "Buy Now";
        // Include the Template
        include '../../Templates/MetaTags.php';
    ?>
    <link rel="stylesheet" href="<?php echo $HomepagePath; ?>">
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: var(--Background-color);
    padding: 50px;
    text-align: center;
    align-items: center;
    display: flex;
    justify-content: center;
    height: 125vh;
    margin: 0;
}
    .row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; 
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 15px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 10px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
  color: black;
}
.privacy-Page {
  color: red;
  font-size: 17px;
}
.privacy-Page:hover {
  text-decoration: underline;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #004baa;
  color: white;
  padding: 17px;
  margin: 0px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #0056b3;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
  body {
    height: 225vh;
  }
}
    </style>
</head>
<body>
    <?php include $HomepageLayout; ?>
    <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
        <div class="row">
          <div class="col-50">
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Sameh Ayman">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="samehayman@example.com">
            <label for="adr"><i class="fas fa-address-card"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fas fa-city"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Cairo">
            <div class="row">
              <div class="col-50">
                <label for="state"><i class="fas fa-map-marker-alt"></i> State</label>
                <input type="text" id="state" name="state" placeholder="Cairo">
              </div>
              <div class="col-50">
                <label for="zip"><i class="fas fa-mail-bulk"></i> Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>
          <div class="col-50">
            <label for="fname"><i class="fas fa-credit-card"></i> Accepted Cards</label>
            <div class="icon-container">
              <i class="fab fa-cc-visa" style="color:navy;"></i>
              <i class="fab fa-cc-amex" style="color:blue;"></i>
              <i class="fab fa-cc-mastercard" style="color:red;"></i>
              <i class="fab fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname"><i class="fas fa-user"></i> Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Sameh Ayman">
            <label for="ccnum"><i class="fab fa-cc-visa"></i> Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth"><i class="fas fa-calendar-alt"></i> Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="June">
            <div class="row">
              <div class="col-50">
                <label for="expyear"><i class="fas fa-calendar-alt"></i> Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2026">
              </div>
              <div class="col-50">
                <label for="cvv"><i class="fas fa-credit-card"></i> CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
        </div>
        <label>
          <input type="checkbox" checked="terms-and-conditions" class="inline" required> I accept the <a href="TermsConditions.php" target="_blank" class="privacy-Page">Terms and Conditions</a>
        </label>
        <button class="btn" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>1</b>
        </span>
      </h4>
      <p><a href="#">Sign In Sync</a> <span class="price">$0</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$0</b></span></p>
    </div>
  </div>
</div>
</body>
</html>