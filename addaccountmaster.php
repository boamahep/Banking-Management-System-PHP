<!DOCTYPE html>
<html>
<?php
session_start();
include("head.php");
include("dbconnection.php");
?>
    <script type="text/javascript">
        function valid() {
            if (document.form1.acctype.value == "") {
                alert("INVALID ACCOUNT TYPE");
                return false;
            }
            if (document.form1.prefix.value == "") {
                alert("INVALID PREFIX");
                return false;
            }
            if (document.form1.minbalance.value == "") {
                alert("INVALID MINIMUMBALANCE");
                return false;
            }
            if (document.form1.interest.value == "") {
                alert("INVALID INTERST");
                return false;
            }
        }
    </script>
    <?php
$m=date("Y-m-d");
if(isset($_POST["add"]))
{
$sql="INSERT INTO accountmaster (accounttype,prefix,minbalance,interest)
VALUES
('$_POST[acctype]','$_POST[prefix]','$_POST[minbalance]','$_POST[interest]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}
$sql1 = mysql_query("select * from accountmaster");
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
        <small>Account Type</small>
      </h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="fa fa-dashboard"></i>Adminstrator</a></li>
                                    <li>Settings</li>
                                    <li class="active">Account Type</li>
                                </ol>
                            </section>
                            <!-- Main content -->
                            <section class="content">
                                <!-- Small boxes (Stat box) -->
                                <div class="row"> </div>
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
                                                <div class="box-header"> <i class="fa fa-envelope"></i>
                                                    <h3 class="box-title">Add account type</h3>
                                                    <!-- tools box -->
                                                </div>
                                                <div class="box-body">
                                                    <form id="form1" name="form1" action="" method="post" onsubmit="return valid()">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="acctype" id="acctype" Placeholder="Accounts Types>
                </div>
                <div class=" form-group ">
                  <input type="text " class="form-control " name="prefix " id="prefix " placeholder="Prefix ">
                </div>
                  <div class="form-group ">
                  <input type="text " class="form-control " name="minbalance " id="minbalance " placeholder="Minimum Balance ">
                </div>
                   <div class="form-group ">
                  <input type="text " class="form-control " name="interest " id="interest " placeholder="Interest ">
                </div>
              </form>
            </div>
            <div class="box-footer clearfix ">
            <button type="submit " class="pull-right btn btn-default " name="add " id="add ">ADD ACCOUNTS
            <i class="fa fa-arrow-circle-right "></i></button>
              <button type="submit " class="pull-right btn btn-default " name="update " id="update ">UPDATE ACCOUNTS
                <i class="fa fa-arrow-circle-right "></i></button>
            </div>
          </div>
        </section>
        <!-- /.Left col -->
      <div class="row ">
        <div class="col-xs-12 ">
          <div class="box ">
            <!-- /.box-header -->
              <table class="table table-hover ">
                <tr>
                  <th>ACCOUNT TYPE</th>
                  <th>PREFIX</th>
                  <th>MINIMUM BALANCE</th>
                  <th>INTEREST</th>
                </tr>
<?php
      while($arrayvar = mysql_fetch_array($sql1))
	  {
echo " <tr>
                                                            <td>&nbsp; $arrayvar[accounttype] </td>
                                                            <td>&nbsp; $arrayvar[prefix]</td>
                                                            <td>&nbsp; $arrayvar[minbalance] </td>
                                                            <td>&nbsp; $arrayvar[interest]</td>
                                                            </tr>"; } ?> 
                                               </table>
                                                        </div>
                                                        <!-- /.box-body -->
                                                </div>
                                                <!-- /.box -->
                                            </div>
                                        </div>
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