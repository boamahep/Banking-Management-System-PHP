<!DOCTYPE html>
<html>
<?php
session_start();
include("head.php");
include("dbconnection.php");
$acc= mysql_query("select * from accounts where accno='$_POST[accno]'");
while($rows = mysql_fetch_array($acc))
{
	$Accountnumber = $rows["accno"];
	$Accountbalance= $rows["accountbalance"];
}
$result = mysql_query("select * from accounts WHERE customerid='$_SESSION[customerid]'");

?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
include("header.php");
?>
  <!-- Left side column. contains the logo and sidebar -->
<?php
include("menu.php");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">    
      <h1>
        MINI STATEMENT
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Mini Statement</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
            <div class="box-body">
            <form id="form1" name="form1" method="get" action="">
              <table id="example2" class="table table-bordered table-hover">
                <tr>
        	      <th>Accounts Name: <?php echo $_SESSION[customername]; ?>
                  <br />
                  [Details of Accounts on <?php echo date("d-m-Y");?>]</th>
       	        </tr> 
                <tr>
        	      <td><strong>Account number</strong></td>
        	      <td><?php echo $Accountnumber;?>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td><strong>Account Balance</strong></td>
        	      <td><?php echo $Accountbalance; ?>&nbsp;</td>
      	      </tr>
                </table>
                <br />
             <table id="example2" class="table table-bordered table-hover"> 
                 <tr>
                <th colspan="5" scope="col">Transaction made</th>
                </tr>
                <thead>
                <tr>
                  <th>SI NO</th>
                  <th>Date</th>
                  <th>Particulars</th>
                  <th>Withdrawals</th>
                  <th>Deposites</th>
                </tr>
                </thead>
                <tbody>
            <?php
			  while($arrvar = mysql_fetch_array($result))
			  {
        	   echo " <tr>
        	      <td>$arrvar[trans_id]</td>
        	      <td>$arrvar[trans_datetime]</td>
				   <td>$arrvar[particulars]</td>
        	      <td>$arrvar[amount]</td>
				  <td>$arrvar[amount]</td>
      	      </tr>";
			  }
			  ?>
                </tbody>
              </table>
                </form>
            </div>
        <!--/.col (left) -->  
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php
include("footer.php"); 
  ?>