<!DOCTYPE html>
<html>
<?php
session_start();
include("head.php");
include("dbconnection.php");
?>
    <script>
function validateForm()
{
var x=document.forms["form1"]["loginid"].value;
var y=document.forms["form1"]["oldpass"].value;
var z=document.forms["form1"]["newpass"].value;
var a=document.forms["form1"]["confpass"].value;
if (x==null || x=="")
  {
  alert("Login id must be filled out");
  return false;
  }
  if (y==null || y=="")
  {
  alert("Old password must be filled out");
  return false;
  }
  if (z==null || z=="")
  {
  alert("New password must be filled out");
  return false;
  }
   if (a==null || a=="")
  {
  alert("Password must be confirmed");
  return false;
  }
}
</script>
<?php

if(isset($_POST["button"]))
{
mysql_query("UPDATE employees SET password='$_POST[newpass]' WHERE loginid = '$_POST[loginid]' AND password='$_POST[oldpass]'");
	if(mysql_affected_rows() == 1)
	{
	$ctrow = "Password updated successfully..";
	}
	else
	{
	$ctrow = "Failed to update Password";
	}
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
        Dashboard
        <small>Alerts</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Adminstrator</a></li>
        <li>Dashboard</li><li class="active">Change password</li>
      </ol>
    </section>  
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
          
        </div>
         <p>&nbsp;</p>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <!-- /.nav-tabs-custom -->
          <div class="box box-success">     
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-envelope"></i>

              <h3 class="box-title">Change login Password</h3>
              <!-- tools box -->
            </div>
            <div class="box-body">
              <form id="form1" name="form1" action="" method="post"onsubmit="return validateForm()">
                <div class="form-group">
                  <input type="text" class="form-control" name="loginid" id="loginid" size="35" readonly="readonly" value="<?php echo $_SESSION["adminid"]; ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="oldpass" type="password" id="oldpass" size="35"  placeholder="Old password">
                </div>
                   <div class="form-group">
                  <input type="text" class="form-control" name="newpass" type="password" id="newpass" size="35"  placeholder="New password">
                </div>
                   <div class="form-group">
                  <input type="text" class="form-control" name="confpass" type="password" id="confpass" size="35"  placeholder="Comfirm new password">
                </div>
              </form>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" name="button" id="button">UPDATE PASSSWORD
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
          </div>

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include("footer.php"); 
?>