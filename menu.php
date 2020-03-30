  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        
        <?php
	    if(isset($_SESSION["adminid"]))
	     {
	    ?>
         <p>
            <?php echo $_SESSION[customername]; ?>  
            </p>
    <?php
    }
	else if(isset($_SESSION["employeeid"]))
     {
	    ?>
        <p>
        <?php echo $_SESSION[customername]; ?>  
            </p>
    <?php
          }
	else if(isset($_SESSION["customerid"]))
     {
	    ?>    
    <p>
    <?php echo $_SESSION[customername]; ?>  
     </p>  
      <?php
    		}
		else
		{
		?>
         <p>
    <?php echo $_SESSION['Unknown']; ?>  
     </p> 
        <?php
		}
		?>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php
	if(isset($_SESSION["adminid"]))
	     {
	    ?>
     <div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="admindashboard.php"><i class="fa fa-circle-o"></i> Home</a></li>
            <li class="active"><a href="changepasst.php"><i class="fa fa-circle-o"></i> Change Password</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Settings</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="viewbranch.php"><i class="fa fa-circle-o"></i>Branch</a></li>
            <li><a href="addaccountmaster.php"><i class="fa fa-circle-o"></i>Account types</a></li>
            <li><a href="viewemp.php"><i class="fa fa-circle-o"></i>Employees</a></li>
            <li><a href="viewloantype.php"><i class="fa fa-circle-o"></i>Loan Types</a></li>
          </ul>
        </li>
                <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Customers</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewcustomer.php"><i class="fa fa-circle-o"></i>View customers</a></li>
            <li><a href="customer.php"><i class="fa fa-circle-o"></i>Add New Customer</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Transactions</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewtransaction.php"><i class="fa fa-circle-o"></i>View transactions</a></li>
          </ul>
        </li>
        <li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Email Messager</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
         <ul class="treeview-menu">
          <li><a href="mailinbox.php">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
              </a></li>
                  <li>
          <a href="mailcompose.php">
            <i class="fa fa-envelope"></i> <span>Compose</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
         <li>
          <a href="mailsent.php">
            <i class="fa fa-envelope"></i> <span>Sent Mail</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        </ul>
        <ul>
        <li><a href="logout.php"><i class="fa fa-book"></i> <span>logout</span></a></li>
      </ul>
   </div>
    <?php
    }
	else if(isset($_SESSION["employeeid"]))
     {
	    ?>
     <div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="empdashboard.php"><i class="fa fa-circle-o"></i> Alerts</a></li>
            <li class="active"><a href="accountsummary.php"><i class="fa fa-circle-o"></i> Accounts Summary</a></li>
              <li class="active"><a href="ministatements.php"><i class="fa fa-circle-o"></i> Mini Statements</a></li>
              <li class="active"><a href="accdetails.php"><i class="fa fa-circle-o"></i> Accounts Details</a></li>
              <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Statements of Accounts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Transfer Funds</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>Add External Payee</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Registered Payee</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Make Payments</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Payment Made</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Pending Payment</a></li>
          </ul>
        </li>
                <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Loans</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>View Loan Account</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Pay Loan</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>View Loan Payments</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Apply for Loan</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li><a href="logout.php"><i class="fa fa-book"></i> <span>logout</span></a></li>
      </ul>
   </div>
     <?php
    }
	else if(isset($_SESSION["customerid"]))
	     {
	    ?>
     <div>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="cusdashboard.php"><i class="fa fa-circle-o"></i> Alerts</a></li>
            <li class="active"><a href="accountsummary.php"><i class="fa fa-circle-o"></i> Accounts Summary</a></li>
              <li class="active"><a href="ministatements.php"><i class="fa fa-circle-o"></i> Mini Statements</a></li>
              <li class="active"><a href="accdetails.php"><i class="fa fa-circle-o"></i> Accounts Details</a></li>
              <li class="active"><a href="stateacc.php"><i class="fa fa-circle-o"></i> Statements of Accounts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Transfer Funds</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="Addexternalpayee.php"><i class="fa fa-circle-o"></i>Add External Payee</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>View Registered Payee</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>Make Payments</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Payment Made</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Pending Payment</a></li>
          </ul>
        </li>
                <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Loans</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i>View Loan Account</a></li>
            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i>Pay Loan</a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i>View Loan Payments</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i>Apply for Loan</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>
        <li><a href="logout.php"><i class="fa fa-book"></i> <span>logout</span></a></li>
      </ul>
   </div>
        <?php
    		}
		else
		{
		?>
        <div id="navbar" class="navbar-collapse collapse">
        <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>
        </ul>
        </div>
        <?php
		}
		?>
    </section>
    <!-- /.sidebar -->
  </aside>