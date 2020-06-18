<!DOCTYPE html>
<!--
Php & MySQL Final Project
Auth: TomasQ.
JUN2020
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nathan's Cure - Reviews</title>
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
          
      <h2>Customer Reviews</h2>
      
     <?php
/* 
 */
     $db3 = new mysqli("localhost", "user", "password", "nathanscure");
        
     if(mysqli_connect_errno())
    {
        echo ("Failed to connect to MySQL: " . $db3->connect_error());
        exit;
    }

    $sq = "SELECT * FROM reviews";
    $rslt = $db3->query($sq);
    
    if ($rslt->num_rows == 0)
    {
        echo '<p>There are no entries in the comments!</p>';
        # echo 'The error is: '.mysql_errno();
    }
    else
    {
        echo "<p>The following comments have been made about our product: </p>";
        echo "<table width='75%' border='1'>";
        #echo "<tr><th>Comments: </th></tr>";
        
        while($ro = $rslt->fetch_assoc())
        {
            echo "<tr><td>{$ro['comment']}</td></tr>";
        }  
    }
    mysqli_free_result($rslt);
    $db3->close();
    
?>
      
<section>   
     <!--
     This is the part to allow a customer to view and enter comments
     First retrieval of the reviews from DB (3-5 max displayable)
     then a form to allow customers to add it
     -->
     <form action="processcomment.php" method="post">
    <p>Your customer name:<br/>
    <input type="text" name="custname" size="40" /></p>
	
	<p>Your email address: </br>
		<input type="text" name="custemail" size="40" /></p>
		
	<p>Your feedback: <br/>
	<textarea name="comment" rows="8" cols="40">
	</textarea></p>
	
	<p><input type="submit" value="Send Feedback"/></p>
	</form>
  </section>

          
    </body>
</html>