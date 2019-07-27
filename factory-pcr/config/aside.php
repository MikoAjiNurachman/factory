<!-- HAK AKSES ADMIN -->
<?php
	if($_SESSION['username']==$_SESSION['username']){
?>
<?php
include "koneksi.php";
$query = mysqli_query($koneksi_utl,"SELECT * FROM profile");
while ($dataTampil = mysqli_fetch_array($query)) {
  ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">CBA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><?php echo $dataTampil['namacbg'];?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">



          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['username'];?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['username'];?>
                  <small>Member since 2019</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="../backend/p_logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username'];?></p>
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
      <ul class="sidebar-menu" data-widget="tree">

        <li class="header">MAIN NAVIGATION</li>

				<li>
							<a href="#">
								<i class="fa fa-briefcase"></i> <span>Dashboard Supplier</span>
											<span class="pull-right-container">
								</span>
							</a>
						</li>

				<li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Master Supplier</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="_ms_supplier"><i class="fa fa-circle-o"></i> Data Supplier</a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i> Data Laporan
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
								<li><a href="_ms_lihat_supplier.php"><i class="fa fa-circle-o"></i> Lihat Supplier</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Lihat Supplier dg Saldo</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Laporan Aging AP</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li>
              <a href="_ms_purchase_order">
                <i class="fa fa-folder"></i> <span>Master Purchase Order</span>
                      <span class="pull-right-container">
                </span>
              </a>
            </li>

<script type="text/javascript">
function my_ip() {
	const ipAPI = 'https://api.ipify.org?format=json'

Swal.queue([{
  title: 'Your public IP',
  confirmButtonText: 'Show my public IP',
  text:
    'Your public IP will be received ',
  showLoaderOnConfirm: true,
  preConfirm: () => {
    return fetch(ipAPI)
      .then(response => response.json())
      .then(data => Swal.insertQueueStep(data.ip))
      .catch(() => {
        Swal.insertQueueStep({
          type: 'error',
          title: 'Unable to get your public IP'
        })
      })
  }
}])
}

</script>


        <li>
          <a href="../p_logout.php">
            <i class="fa fa-sign-out"></i>
			<span>Logout</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php } } ?>
