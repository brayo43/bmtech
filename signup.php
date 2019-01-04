<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("nationalhousing", $con);

$sql="INSERT INTO allusers (NationalID, firstname, lastname, phonenumber, email, Username, password)
VALUES
('$_POST[nationalID]','$_POST[firstname]','$_POST[lastname]','$_POST[phonenumber]','$_POST[email]','$_POST[username]','$_POST[password]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo " record added";

mysql_close($con);
?>

<body>
</body>
</html>
