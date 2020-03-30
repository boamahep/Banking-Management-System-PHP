<!DOCTYPE html>
<html>
<?php
session_start();
include("head.php");
include("dbconnection.php");
if(isset($_SESSION[customerid]))
{
	header("Location: cusdashboard.php");
}
$result = mysql_query("SELECT * FROM customers WHERE loginid='$_POST[login]' AND accpassword='$_POST[password]'");

if(mysql_num_rows($result) == 1)
	{
		while($recarr = mysql_fetch_array($result))
		{
			
		$_SESSION[customerid] = 	$recarr[customerid];
		$_SESSION[ifsccode] = 	$recarr[ifsccode];
		$_SESSION[customername] = 	$recarr[firstname]. " ". $recarr[lastname];
		$_SESSION[loginid] = 	$recarr[loginid];
		$_SESSION[accstatus] = 	$recarr[accstatus];
		$_SESSION[accopendate] = 	$recarr[accopendate];
		$_SESSION[lastlogin] = 	$recarr[lastlogin];		
		}
		$_SESSION["loginid"] =$_POST["login"];
		header("Location: cusdashboard.php");
	}
	else
	{
		$logininfo = "Invalid Username or password entered";
	}	

?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Customer</b>LOGIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
        <p class="cleaner_h50">&nbsp;<font color="#FF0000"><b><?php echo $logininfo; ?></b></font></p>
    <form id="form1" name="form1" action="" method="post">
      <div class="form-group has-feedback">
        <input name="login" type="text" id="login" class="form-control" placeholder="login">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="btnlogin" id="btnlogin" value="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- Not Registered for E-banking -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> CALL: 0248833753</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
