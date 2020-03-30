<!DOCTYPE html>
<html>
<?php
session_start();
include("head.php");
include("dbconnection.php");
$results = mysql_query("SELECT * FROM accounts WHERE  customerid='$_SESSION[customerid]'");
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
        ACCOUNTS SUMMARY
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Accounts Summary</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Accounts Summary</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ACCOUNT TYPE</th>
                  <th>NAME</th>
                  <th>ACCOUNT NUMBER</th>
                  <th>BRANCH</th>
                  <th>CURRENCY</th>
                  <th>A/C BALANCE</th>
                </tr>
                </thead>
                <tbody>
                 <?php
			 while($arrow = mysql_fetch_array($results))
			{
				echo "<tr><td>$arrow[accounttype]</td>
     		     <td>$_SESSION[customername]</td>
     		     <td>$arrow[accno]</td>
     		     <td>$_SESSION[ifsccode]</td>
     		     <td>INR</td>
     		     <td>$arrow[accountbalance]</td></tr>";
			}
		   ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
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