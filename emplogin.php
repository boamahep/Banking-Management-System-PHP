<!DOCTYPE html>
<html>
<?php
session_start();
include("head.php");
include("dbconnection.php");
if(isset($_SESSION["employeeid"]))
{
	header("Location: empdashboard.php");
}
if(isset($_SESSION["adminid"]))
{
	header("Location: admindashboard.php");
}

if(isset($_POST["loginadmin"]))
{
		//coding for login the employee account
	$result = mysql_query("SELECT * FROM employees
	WHERE loginid='$_POST[adminlogin]' AND password='$_POST[adminpass]'");


	if(mysql_num_rows($result) == 1)
	{
		$_SESSION["adminid"] =$_POST["adminlogin"];
		header("Location: admindashboard.php");
	}
	else
	{
		$logininfo = "Invalid Username or password entered";
	}
}

if(isset($_POST["loginemp"]))
{
		//coding for login the employee account
	$result = mysql_query("SELECT * FROM employees
	WHERE loginid='$_POST[emplogin]' AND password='$_POST[emppassword]'");


	if(mysql_num_rows($result) == 1)
	{
		$_SESSION["employeeid"] =$_POST["emplogin"];
		header("Location: empdashboard.php");
	}
	else
	{
		$logininfo1 = "Invalid Username or password entered";
	}
}
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Staff</b>LOGIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
       <p class="cleaner_h50">&nbsp;<font color="#FF0000"><b><?php echo $logininfo1; ?></b></font></p>
          <p class="cleaner_h50">
    <form id="form1" action="" method="post">
      <div class="form-group has-feedback">
        <input name="emplogin" type="text" id="emplogin" class="form-control" placeholder="login">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="emppassword" type="password" id="emppassword" class="form-control" placeholder="Password">
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
         
          <button type="submit" name="loginemp" id="loginemp" value="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- Not Authorised Staff -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Contact the Manager</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
    
<div class="login-box">
  <div class="login-logo">
    <a href="index2.html"><b>Admin</b>LOGIN</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
 <p class="">&nbsp;<font color="#FF0000"><b><?php echo $logininfo; ?></b></font></p>
    <form id="form1" action="" method="post">
      <div class="form-group has-feedback">
        <input name="adminlogin" type="text" id="adminlogin" class="form-control" placeholder="login">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="adminpass" type="password" id="adminpass" class="form-control" placeholder="Password">
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
          <button type="submit" name="loginadmin" id="loginadmin" value="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- Not a Authorized -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Contact the Manager</a>
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
