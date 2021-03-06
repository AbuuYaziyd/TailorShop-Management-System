<?php
require_once('includes/functions.php');
dbconnect();
session_start();
$user = $_SESSION['username'];
$usid = $pdo->query("SELECT id FROM users WHERE username='".$user."'");
$usid = $usid->fetch(PDO::FETCH_ASSOC);
$uid = $usid['id'];

if (!is_user()) {
	redirect('login.php');
}elseif (isset($_GET['id'])) {
	$deleteid = intval($_GET['id']);
	delete_item_from('stafftype',$deleteid);
}
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>All Designation</title>
	<link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
	<!-- END: Vendor CSS-->
	<!-- BEGIN: Theme CSS-->
	<link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
	<!-- END: Theme CSS-->
	<!-- BEGIN: Page CSS-->
	<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
	<!-- END: Page CSS-->
	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
	<!-- BEGIN: Header-->
	<?php include_once 'includes/header.php'; ?>
	<!-- END: Header-->
	<!-- BEGIN: Main Menu-->
	<?php include_once 'includes/sidebar.php'; ?>
	<!-- END: Main Menu-->
	<!-- BEGIN: Content-->
	<div class="app-content content">
		<div class="content-overlay"></div>
		<div class="content-wrapper">
			<div class="content-header row">
				<div class="content-header-left col-md-6 col-12 mb-2">
					<h3 class="content-header-title">All Designations</h3>
					<div class="row breadcrumbs-top">
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a>
								</li>
								<li class="breadcrumb-item"><a href="#">designation</a>
								</li>
								<li class="breadcrumb-item">All Designation
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
			<div class="content-body">
				<!-- all designations table -->
				<section id="configuration">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"> Staff Designations</h4>
									<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
									<div class="heading-elements">
										<ul class="list-inline mb-0">
											<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
											<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
											<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
											<li><a data-action="close"><i class="ft-x"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="card-content collapse show">
									<div class="card-body card-dashboard">
										<div class="table-responsive">
											<table class="table table-striped table-bordered zero-configuration">
												<thead>
													<tr>
														<th>#</th>
														<th>Name</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
<?php
$ddaa = $pdo->query("SELECT id, title FROM stafftype ORDER BY id");
		$counter = 0;
    while ($data = $ddaa->fetch(PDO::FETCH_ASSOC))
    {			
    $counter +=1;						
 echo "<tr>                                            <td>$counter</td>
           <td>$data[title]</td><td>
							<a href='staffcatedit.php?id=$data[id]' class='btn btn-info btn-xs'>Edit</a>
							<a href='all-designation.php?id=$data[id]' class='btn btn-danger btn-xs'>DELETE</a>
						</td>
          </tr>";
	}
	
?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--/ all designations table -->
			</div>
		</div>
	</div>
	<!-- END: Content-->
	<!-- BEGIN: Customizer-->
	<?php include_once 'includes/customizer.php'; ?>
	<!-- End: Customizer-->
	<!-- BEGIN: Footer-->
	<?php include_once 'includes/footer.php'; ?>
	<!-- END: Footer-->
	<!-- BEGIN: Vendor JS-->
	<script src="app-assets/vendors/js/vendors.min.js"></script>
	<!-- BEGIN Vendor JS-->
	<!-- BEGIN: Page Vendor JS-->
	<script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
	<!-- END: Page Vendor JS-->
	<!-- BEGIN: Theme JS-->
	<script src="app-assets/js/core/app-menu.min.js"></script>
	<script src="app-assets/js/core/app.min.js"></script>
	<script src="app-assets/js/scripts/customizer.min.js"></script>
	<script src="app-assets/js/scripts/footer.min.js"></script>
	<!-- END: Theme JS-->
	<!-- BEGIN: Page JS-->
	<script src="app-assets/js/scripts/tables/datatables/datatable-basic.min.js"></script>
	<!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>