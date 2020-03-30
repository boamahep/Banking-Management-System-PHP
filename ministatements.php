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
            <!-- select -->
                <div class="form-group">
            <form id="form1" name="form1" method="POST" action="ministatements2.php">
            <table id="example2" class="table table-bordered table-hover"> 
                    <tr>
                        <td><label>Select an Account number</label></td>
                </tr> 
                <tr>
                 <td>Account number  <label for="ac_no"></label> 
                  <select name="accno" id="accno"> class="form-control">
                         <?php
        	           while($arrvar = mysql_fetch_array($result))
					  	{
        		        echo "<option value='$arrvar[accno]'>$arrvar[accno]</option>";
               			}
					   ?>
                  </select>
                <input type="submit" id="submit" class="btn btn-primary" Value="Select account number" /></td>
                </tr>
                </table>
                </form>
                </div>
            <p>&nbsp;</p>
        <p>&nbsp;</p>
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