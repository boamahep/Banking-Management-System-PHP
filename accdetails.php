<!DOCTYPE html>
<html>
<?php
session_start();
include("head.php");
include("dbconnection.php");
$results = mysql_query("SELECT * FROM accounts where customerid='98683'");
while($arrow = mysql_fetch_array($results))
{
	$acno = $arrow[accno];	
	$arrow[customerid];
	$status = $arrow[accstatus];	
	$primaryacc = $arrow[primaryacc];	
	$accopen = $arrow[accopendate];	
	$acctype = $arrow[accounttype];	
	$accbal = $arrow[accountbalance];	
	$unclearbalance = $arrow[unclearbalance];	
	$accruedinterest = $arrow[accuredinterest];
}
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
        ACCOUNTS DETAILS
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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box-header">
              <h3 class="box-title">ACCOUNT NAME - <?php echo $_SESSION[customername] ?></h3>
            </div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
      		   <tr>
     		     <td width="282" height="38">ACCOUNT NUMBER</td>
     		     <td width="262">&nbsp;<?php echo $acno ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="36">ACCOUNT TYPE</td>
     		     <td>&nbsp;<?php echo $acctype ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="37">ACCOUNT STATUS</td>
     		     <td>&nbsp;<?php echo $status ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="38">PRIMARY ACCOUNT</td>
     		     <td>&nbsp;<?php echo $primaryacc; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="34">ACCOUNT HOLDER</td>
     		     <td>&nbsp;<?php echo $_SESSION[customername] ?></td>
   		     </tr>
     		   <tr>
     		     <td height="34">ACCOUNT OPEN DATE</td>
     		     <td>&nbsp;<?php echo $accopen ; ?></td>
   		     </tr>
     		   <tr>
     		     <td height="39">ACCOUNT BALANCE</td>
     		     <td>&nbsp;<?php echo $accbal ; ?></td>
   		     </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
include("footer.php"); 
?>