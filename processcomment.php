<html>
    <head>
        <meta charset="UTF-8">
        <title>Nathan's Cure - Review Processed</title>
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
    $sq = "SELECT * reviews";
    $rslt = $db2->query($sq);
    
    if ($rslt->num_rows == 0)
    {
        echo '<p>There are no entries in the comments!</p>';
    }
*/

$nme=$_POST['custname'];
$eml=$_POST['custemail'];
$cmt=$_POST['comment'];

$db2 = new mysqli("localhost", "user", "password", "nathanscure");
    if(mysqli_connect_errno())
    {
        echo ("Failed to connect to MySQL: " . $db2->connect_error());
        exit;
    }
    
    $mnt= "INSERT INTO reviews VALUES('$nme','$eml','$cmt')";
    
    if( $db2->query($mnt) == false)
    {
        echo('Error: ' . mysql_error($db2));
        exit;
    }
 else 
    {
       echo '<p>Your comment was successfully submitted!</p>';     
    }
    $db2->close();
    echo '<p>To go back to the main site, click <a href="about.php">this link</a>.</p>';
?>
                </section>
      <!-- page footer -->
  <footer>
      <p>Nathan's Cure Bacon<br />
      Please see our 
      <a href="about.php">about page for more info</a>.</p>
  </footer>    
        
    </body>
</html>