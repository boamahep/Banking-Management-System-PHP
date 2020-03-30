<!DOCTYPE html>
<html>
<?php
session_start();
include("head.php");
include("dbconnection.php");
$brancharray = mysql_query("select * from branch");  
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
        Settings
        <small>Bank Branches</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Adminstrator</a></li>
        <li>Settings</li><li class="active">Branch</li>
      </ol>
    </section> 
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
         <p>&nbsp;</p>
      <!-- /.row -->
      <!-- Main row -->
-<div class="row ">
        <div class="col-xs-12 ">
          <div class="box ">
            <!-- /.box-header -->
              <table class="table table-hover ">
                <tr>
                  <th>IFSC CODE</th>
                  <th>BRANCH CODE</th>
                  <th>CITY</th>
                  <th>BRANCH ADDRESS</th>
                <th>STATE</th>
                <th>COUNTRY</th>
                </tr>
<?php
      while($arrayvar = mysql_fetch_array($sql1))
	  {
echo " <tr>
      <td>&nbsp;$branch[ifsccode]</td>
      <td>&nbsp;$branch[branchname]</td>
      <td>&nbsp;$branch[city]</td>
      <td>&nbsp;$branch[branchaddress]</td>
      <td>&nbsp;$branch[state]</td>
      <td>&nbsp;$branch[country]</td>
    </tr>";
	  }
	  ?>
  </table>
 </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include("footer.php"); 
?>