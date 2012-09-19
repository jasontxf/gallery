<?php
$con=mysql_connect ("localhost", "root", "") or die ('I cannot connect to the database because: ' . mysql_error());

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
   mysql_select_db ("gallery");  


// $stmt = "INSERT INTO account (email, password) VALUES('jasontxf@hotmail.com', 'hahahaha')";
// $query = mysql_query($stmt);


$stmt = "DELETE FROM account WHERE email = 'jasontxf@hotmail.com'";
$query = mysql_query($stmt);

$stmt = "UPDATE account SET password = 'leeweijian' WHERE email = 'haha@hotmail.com'";
$query = mysql_query($stmt);


  
?>