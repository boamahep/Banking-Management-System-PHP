<?php
session_start();
include("dbconnection.php");
$dts = date("Y-m-d h:i:s");
mysql_query("UPDATE customers SET lastlogin='$dts' WHERE customerid='$_SESSION[customerid]'");
$sqlq = mysql_query("select * from transaction where paymentstat='Pending'");
$mailreq = mysql_query("select * from mail");

if (isset($_SESSION["adminid"]))

    {
        redirect('admindashboard.php');
    }
    
    
		else if (isset($_SESSION["employeeid"]))
    
    
     {
        redirect('empdashboard.php');
    }
            
    
		else if (isset($_SESSION["customerid"]))
		
     {
        header('cusdashboard.php');
    }
		
else
    
{
    echo unsucessful;
        header('index.php');
    }
?>
