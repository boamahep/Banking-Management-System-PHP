<?php
$con = mysql_connect("localhost","root","mysql");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("adubank", $con);
?>