 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/eea51bea51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Singh's Clothing</title>
</head>
<body>
    <header id="header">
        <a class="logo-container" href="index.php"><i class="fas fa-tshirt"></i> SINGH'S CLOTHING</a>
        <div class="options">
            <a class="option" href="contact.php">CONTACT</a>
            <?php
                session_start();
                if(isset($_SESSION['name'])) {
                    echo '<a class="option toggle-sign" href="php/sign-out.php">SIGN OUT</a>';
                }
                else {
                    echo '<a class="option toggle-sign" href="./signin.php">SIGN IN</a>';
                }
            ?>
            
            <div class="cart-icon">
               <img class="shopping-icon" src="./img/shopping-cart.svg">
                <span class="item-count"></span>
            </div>
        </div>
        <div class="cart-dropdown" style="display : none;">
            <div class="cart-items"></div>
            <button class="btn-dark button" onclick="location.href='checkout.php'">Checkout</button> 
        </div>
    </header>
    <script src="./javascript/header.js"></script>