<html>
    <head>
        <meta charset="UTF-8">
        <title>Nathan's Cure - Order Processed</title>
        <link href="styles.css" type="text/css" rel='stylesheet'>
    </head>
    <body>
                <!-- header -->
        <header>
            <img src="NathansCureLogo.JPG" alt='Nathan Cure Logo' />
            <!--<h1>Nathan's Cure</h1>-->
        </header>
    <section>
<?php
/* 
 * ITEC 2925 - Final Project
 * Auth: Tom Q.
 * Date: JUN2020
 */
/*
if (empty($_POST['custname']) || empty($_POST['custemail'])){// || empty($_POST['item'])) {
    echo('Please fill out your name and email and make a selection,');
    exit;
} else {
*/
    $it = $_POST['item'];
    $qn = $_POST['quant'];
    $pr = 25;
    $na = $_POST['custname'];
    $em = $_POST['custemail'];

    # connect to mysql server
    $db1 = new mysqli("localhost", "user", "password", "nathanscure");

    # check connection
    if (mysqli_connect_errno()) {
        echo ("Failed to connect to MySQL: " . $db1->connect_error());
        exit;
    }

    $prs = "INSERT INTO custordrs VALUES('$it','$qn','$pr', '$na', '$em')";

    if ($db1->query($prs) == false) {
        echo('Error: ' . mysql_error($db1));
        exit;
    } else {
        echo '<p>Your order was successfully submitted!</p>';
    }
    $db1->close();
    echo '<p>To go back to the main site, click <a href="index.php">this link</a>.</p>';
    
#Email function to send to customer - also trying to get it to send to site owner
    $nme=$_POST['custname'];
    $eml=$_POST['custemail'];
    $ord=$_POST['item'];
    $num=$_POST['quant'];
# set some static info?
#  $toaddy = $eml;
  $subj = "Order Submitted";
  $mailcont = "Customer name: ".$nme. "\n" .
  "Customer email: ".$eml."\n".
  "Item ordered: ".$ord." Quantity: ".$num."\n";
  
    $fromaddy = "From: quiroz.tho9756@stu.stech.edu";
  
  #invoke mail() function
  mail($eml,$subj,$mailcont,$fromaddy); 
    
    
#}
?>
    </section>
        <!--<meta http-equiv="Refresh" content="5"; url='https://www.google.com'" />-->
          <!-- page footer -->
  <footer>
      <p>Nathan's Cure Bacon<br />
      Please see our 
      <a href="about.php">about page for more info</a>.</p>
  </footer>
        
    </body>
    
</html>