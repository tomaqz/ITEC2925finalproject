<!DOCTYPE html>
<!--
Php & MySQL Final Project
Auth: TomasQ.
JUN2020
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nathan's Cure - Orders</title>
        <link href="styles.css" type="text/css" rel='stylesheet'>
    </head>
    <body>
        <!-- header -->
        <header>
            <img src="NathansCureLogo.JPG" alt='Nathan Cure Logo' />
            <!--<h1>Nathan's Cure</h1>-->
        </header>
        <!-- menu -->
        <nav>
            <div class="menu">
                <a href="index.php">
                    <span class="menutext">Home</span> 
                </a>
            </div>
            <div class="menu">
                <a href="about.php">
                    <span class="menutext">About</span> 
                </a>
            </div>
            <div class="menu">
                <a href="orders.php">
                    <span class="menutext">Orders</span> 
                </a>
            </div>
            <div class="menu">
                <a href="reviews.php">
                    <span class="menutext">Reviews</span> 
                </a>
            </div>
        </nav>
          <!-- page content -->
  <section>
     <h2>Order From Us</h2>
     <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         "</p>
     <!-- 
     In this section, create an order form with an email sender
     attached to the submit button
     then make a new php file to process the order (to database) and send the email to
     customer and owner...
            -->
            <form method="POST" action="processorder.php">
                <p>Customer Name <input type="text" name="custname"/></p>
                <p>Bacon Type</p>
                <p>Regular<input type="radio" name="item" value="regbac"/></p>
                <p>Hickory<input type="radio" name="item" value="hicbac"/></p>
                <p>Pepper<input type='radio' name='item' value="pepbac"/></p>
                
                <p>Quantity<input type="number" name='quant' min='1' max="10"></p>
                
                <p>Email <input type="text" name="custemail"/></p>
                <p><input type="submit" value="Submit"/></p>
            </form>
            
  </section>
<?php
#the mail from order chunk
/*
$nme=$_POST['custname'];
$eml=$_POST['custemail'];
$ord=$_POST['item'];
$num=$_POST['quant'];
# set some static info?
 * $toaddy = "nathanscure@gmail.com".$eml;
 * $subj = "Order Submitted";
 * $mailcont = "Customer name: ".$nme. "\n" .
 * "Customer email: ".$eml."\n".
 * "Item ordered: ".$ord." Quantity: ".$num."\n";
 * 
 * $fromaddy = "From: nateserver@something.com";
 * 
 * #invoke mail() function
 * mail($toaddy,$subj,$mailcont,$fromaddy);         
 * 
 */
# echo "Please try to place an order here...";

?>
    </body>
</html>
