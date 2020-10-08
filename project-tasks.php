<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
   
    <title>Project Task </title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/selects/select2.min.css">
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
	<?php include_once("includes/header.php"); ?>
    <!-- END: Header-->


	<!-- BEGIN: Main Menu-->
	<?php include_once("includes/sidebar.php"); ?>
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h3 class="content-header-title">Project Task</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Project</a>
                  </li>
                  <li class="breadcrumb-item active">Project Task
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <button class="btn btn-info round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.php">Cards</a><a class="dropdown-item" href="component-buttons-extended.php">Buttons</a></div>
            </div>
          </div>
        </div>
        <div class="content-body"><section class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">My Task List</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
				<div class="heading-elements">
					<button class="btn btn-primary btn-sm"><i class="ft-plus white"></i> New Task</button>
					<span class="dropdown">
						<button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-warning btn-sm dropdown-toggle dropdown-menu-right"><i
							 class="ft-download white"></i></button>
						<span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
							<a href="#" class="dropdown-item"><i class="la la-calendar"></i> Due Date</a>
							<a href="#" class="dropdown-item"><i class="la la-random"></i> Priority </a>
							<a href="#" class="dropdown-item"><i class="la la-bar-chart"></i> Progress</a>
							<a href="#" class="dropdown-item"><i class="la la-user"></i> Assign to</a>
						</span>
					</span>
					<button class="btn btn-success btn-sm"><i class="ft-settings white"></i></button>
				</div>
			</div>
			<div class="card-content">
				<div class="card-body">
					<!-- Task List table -->
					<div class="table-responsive">
						<table id="project-task-list" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
							<thead>
								<tr>
									<th><div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkboxsmallall">
                      <label class="custom-control-label" for="checkboxsmallall"></label>
                    </div></th>
									<th>Task</th>
									<th>Dates</th>
									<th>Priority</th>
									<th>Progress</th>
									<th>Owner</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<!-- ABC Project -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="checkboxsmallall11">
                      <label class="custom-control-label" for="checkboxsmallall11"></label>
                    </div></th></td>
									<td>
										<a href="#" class="text-bold-600">Complete the page header</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0">Basics Tasks & Milestones in <span class="text-bold-600">ABC Project</span> on <em>30 Oct,
												2017</em></h6>
									</td>
									<td><span class="badge badge-danger">Critical</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="82" aria-valuemax="100" class="progress-bar bg-gradient-x-success" role="progressbar"
											 style="width:82%" aria-valuenow="82"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-3.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="John Doe"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall1">
                  <label class="custom-control-label" for="checkboxsmall1"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Menu open issue on top</a>
										<p class="text-muted">Proin varius libero at magna dignissim lacinia.</p>
									</td>
									<td>
										<h6 class="mb-0">Basics Tasks & Milestones in <span class="text-bold-600">ABC Project</span> on <em>30 Oct,
												2017</em></h6>
									</td>
									<td><span class="badge badge-primary">Medium</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-warning" role="progressbar"
											 style="width:32%" aria-valuenow="32"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-online">
											<img src="app-assets/images/portrait/small/avatar-s-5.png" alt="avatar" data-placement="right"
											 title="Peater Doe"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop3" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop3" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall2">
                  <label class="custom-control-label" for="checkboxsmall2"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Integrate ChartJS Page</a>
										<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
									</td>
									<td>
										<h6 class="mb-0">Basics Tasks & Milestones in <span class="text-bold-600">ABC Project</span> on <em>30 Oct,
												2017</em></h6>
									</td>
									<td><span class="badge badge-warning">High</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="20" aria-valuemax="100" class="progress-bar bg-gradient-x-danger" role="progressbar"
											 style="width:20%" aria-valuenow="20"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-online">
											<img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar" data-placement="right"
											 title="Nicole Barrett"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop4" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop4" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall3">
                  <label class="custom-control-label" for="checkboxsmall3"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Support Charls Users</a>
										<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
									</td>
									<td>
										<h6 class="mb-0">Basics Tasks & Milestones in <span class="text-bold-600">ABC Project</span> on <em>30 Oct,
												2017</em></h6>
									</td>
									<td><span class="badge badge-info">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"
											 aria-valuenow="30"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-off">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-placement="right"
											 title="Jason Robertson"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop5" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop5" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- ABC Project -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall4">
                  <label class="custom-control-label" for="checkboxsmall4"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">UI/UX Design for the new Mobile APP</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0">UI Tasks & Support in <span class="text-bold-600">ABC Project</span> on <em>12 Nov, 2017</em></h6>
									</td>
									<td><span class="badge badge-success">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="100" aria-valuemax="100" class="progress-bar bg-gradient-x-success" role="progressbar"
											 style="width:100%" aria-valuenow="100"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Willie Sanchez"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop6" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop6" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall5">
                  <label class="custom-control-label" for="checkboxsmall5"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">PSD Creation for the ABC APP</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0">UI Tasks & Support in <span class="text-bold-600">ABC Project</span> on <em>12 Nov, 2017</em></h6>
									</td>
									<td><span class="badge badge-primary">Medium</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="50" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"
											 aria-valuenow="50"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-8.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Mary Salazar"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop7" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop7" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 2 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall6">
                  <label class="custom-control-label" for="checkboxsmall6"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Fix bootstrap progress bar issue</a>
										<p class="text-muted">Aliquam finibus tellus magna, eget viverra augue gravida eget.</p>
									</td>
									<td>
										<h6 class="mb-0">DFD & Support Task in <span class="text-bold-600">ABC Project</span> on <em>15 Dec, 2017</em></h6>
									</td>
									<td><span class="badge badge-primary">Medium</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="35" aria-valuemax="100" class="progress-bar bg-gradient-x-warning" role="progressbar"
											 style="width:35%" aria-valuenow="35"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-9.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Jerry King"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop8" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop8" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall7">
                  <label class="custom-control-label" for="checkboxsmall7"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Support Alib on form wizard</a>
										<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
									</td>
									<td>
										<h6 class="mb-0">DFD & Support Task in <span class="text-bold-600">ABC Project</span> on <em>15 Dec, 2017</em></h6>
									</td>
									<td><span class="badge badge-info">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"
											 aria-valuenow="30"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-off">
											<img src="app-assets/images/portrait/small/avatar-s-11.png" alt="avatar" data-placement="right"
											 title="Jason Robertson"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop9" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop9" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 3 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall8">
                  <label class="custom-control-label" for="checkboxsmall8"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Integrate D3 JS Page</a>
										<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
									</td>
									<td>
										<h6 class="mb-0">Frontend Task & Testing Task in <span class="text-bold-600">ABC Project</span> on <em>18
												Dec, 2017</em></h6>
									</td>
									<td><span class="badge badge-warning">High</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="20" aria-valuemax="100" class="progress-bar bg-gradient-x-danger" role="progressbar"
											 style="width:20%" aria-valuenow="20"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-online">
											<img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar" data-placement="right"
											 title="Nicole Barrett"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop10" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop10" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall9">
                  <label class="custom-control-label" for="checkboxsmall9"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Contact Charls for Vertical Menu issuea</a>
										<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
									</td>
									<td>
										<h6 class="mb-0">Frontend Task & Testing Task in <span class="text-bold-600">ABC Project</span> on <em>18
												Dec, 2017</em></h6>
									</td>
									<td><span class="badge badge-info">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"
											 aria-valuenow="30"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-off">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-placement="right"
											 title="Jason Robertson"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop11" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop11" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall10">
                  <label class="custom-control-label" for="checkboxsmall10"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">UI/UX Design for the new Mobile APP</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0">Frontend Task & Testing Task in <span class="text-bold-600">ABC Project</span> on <em>18
												Dec, 2017</em></h6>
									</td>
									<td><span class="badge badge-success">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="100" aria-valuemax="100" class="progress-bar bg-gradient-x-success" role="progressbar"
											 style="width:100%" aria-valuenow="100"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Willie Sanchez"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop12" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop12" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall11">
                  <label class="custom-control-label" for="checkboxsmall11"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Admin PSD Creation for the ABC APP</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0">Frontend Task & Testing Task in <span class="text-bold-600">ABC Project</span> on <em>18
												Dec, 2017</em></h6>
									</td>
									<td><span class="badge badge-primary">Medium</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="50" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"
											 aria-valuenow="50"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-8.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Mary Salazar"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop13" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop13" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 4 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall12">
                  <label class="custom-control-label" for="checkboxsmall12"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Complete dashboard page design</a>
										<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
									</td>
									<td>
										<h6 class="mb-0"> Task & DFD in <span class="text-bold-600">ABC Project</span> on <em>22 Dec, 2017</em></h6>
									</td>
									<td><span class="badge badge-warning">High</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="20" aria-valuemax="100" class="progress-bar bg-gradient-x-danger" role="progressbar"
											 style="width:20%" aria-valuenow="20"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-online">
											<img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar" data-placement="right"
											 title="Nicole Barrett"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop14" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop14" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall13">
                  <label class="custom-control-label" for="checkboxsmall13"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Horizontal Menu Test on Mobile</a>
										<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
									</td>
									<td>
										<h6 class="mb-0"> Task & DFD in <span class="text-bold-600">ABC Project</span> on <em>22 Dec, 2017</em></h6>
									</td>
									<td><span class="badge badge-info">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"
											 aria-valuenow="30"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-off">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-placement="right"
											 title="Jason Robertson"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop15" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop15" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 5 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall14">
                  <label class="custom-control-label" for="checkboxsmall14"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">UX Design for the Cake Shop</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0"> Task & DFD in <span class="text-bold-600">ABC Project</span> on <em>28 Oct, 2017</em></h6>
									</td>
									<td><span class="badge badge-success">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="100" aria-valuemax="100" class="progress-bar bg-gradient-x-success" role="progressbar"
											 style="width:100%" aria-valuenow="100"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Willie Sanchez"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop16" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop16" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall15">
                  <label class="custom-control-label" for="checkboxsmall15"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Admin PSD to HTML Conversation</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0"> Task & DFD in <span class="text-bold-600">ABC Project</span> on <em>28 Oct, 2017</em></h6>
									</td>
									<td><span class="badge badge-primary">Medium</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="50" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"
											 aria-valuenow="50"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-8.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Mary Salazar"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop17" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop17" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 6 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall16">
                  <label class="custom-control-label" for="checkboxsmall16"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">WordPress Template for eCommerce</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0">UX Task & DFD in <span class="text-bold-600">ABC Project</span> on <em>12 Oct, 2017</em></h6>
									</td>
									<td><span class="badge badge-success">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="100" aria-valuemax="100" class="progress-bar bg-gradient-x-success" role="progressbar"
											 style="width:100%" aria-valuenow="100"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Willie Sanchez"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop18" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop18" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall17">
                  <label class="custom-control-label" for="checkboxsmall17"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Create Extension for Magneto</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0">UX Task & DFD in <span class="text-bold-600">ABC Project</span> on <em>12 Oct, 2017</em></h6>
									</td>
									<td><span class="badge badge-primary">Medium</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="50" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"
											 aria-valuenow="50"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-8.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Mary Salazar"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop19" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop19" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 7 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall18">
                  <label class="custom-control-label" for="checkboxsmall18"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Firefox progress bar issue</a>
										<p class="text-muted">Aliquam finibus tellus magna, eget viverra augue gravida eget.</p>
									</td>
									<td>
										<h6 class="mb-0">Support & DFD in <span class="text-bold-600">ABC Project</span> on <em>18 Oct, 2017</em></h6>
									</td>
									<td><span class="badge badge-primary">Medium</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="35" aria-valuemax="100" class="progress-bar bg-gradient-x-warning" role="progressbar"
											 style="width:35%" aria-valuenow="35"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-9.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Jerry King"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop20" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop20" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall19">
                  <label class="custom-control-label" for="checkboxsmall19"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">IE Support for new buttons</a>
										<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
									</td>
									<td>
										<h6 class="mb-0">Support & DFD in <span class="text-bold-600">ABC Project</span> on <em>18 Oct, 2017</em></h6>
									</td>
									<td><span class="badge badge-info">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"
											 aria-valuenow="30"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-off">
											<img src="app-assets/images/portrait/small/avatar-s-11.png" alt="avatar" data-placement="right"
											 title="Jason Robertson"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop21" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop21" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 8 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall20">
                  <label class="custom-control-label" for="checkboxsmall20"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Complete dashboard page design</a>
										<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
									</td>
									<td>
										<h6 class="mb-0">Task & Support in <span class="text-bold-600">ABC Project</span> on <em>18 Oct, 2017</em></h6>
									</td>
									<td><span class="badge badge-warning">High</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="20" aria-valuemax="100" class="progress-bar bg-gradient-x-danger" role="progressbar"
											 style="width:20%" aria-valuenow="20"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-online">
											<img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar" data-placement="right"
											 title="Nicole Barrett"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop22" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop22" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall21">
                  <label class="custom-control-label" for="checkboxsmall21"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">RTL Support for All Pages</a>
										<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
									</td>
									<td>
										<h6 class="mb-0">Task & Support in <span class="text-bold-600">ABC Project</span> on <em>18 Oct, 2017</em></h6>
									</td>
									<td><span class="badge badge-info">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"
											 aria-valuenow="30"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-off">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-placement="right"
											 title="Jason Robertson"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop23" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop23" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 9 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall22">
                  <label class="custom-control-label" for="checkboxsmall22"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">UI Design for the CA</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0">DFD & Support in <span class="text-bold-600">ABC Project</span> on <em>18 Sept, 2017</em></h6>
									</td>
									<td><span class="badge badge-success">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="100" aria-valuemax="100" class="progress-bar bg-gradient-x-success" role="progressbar"
											 style="width:100%" aria-valuenow="100"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Willie Sanchez"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop24" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop24" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall23">
                  <label class="custom-control-label" for="checkboxsmall23"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">PSD to WordPress Conversation</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0">DFD & Support in <span class="text-bold-600">ABC Project</span> on <em>18 Sept, 2017</em></h6>
									</td>
									<td><span class="badge badge-primary">Medium</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="50" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"
											 aria-valuenow="50"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-8.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Mary Salazar"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop25" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop25" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 10 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall24">
                  <label class="custom-control-label" for="checkboxsmall24"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Complete Support page design</a>
										<p class="text-muted"> Curabitur tempor, quam vel pulvinar finibus.</p>
									</td>
									<td>
										<h6 class="mb-0"> UI Fix & Support in <span class="text-bold-600">ABC Project</span> on <em>25 Sept, 2017</em></h6>
									</td>
									<td><span class="badge badge-warning">High</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="20" aria-valuemax="100" class="progress-bar bg-gradient-x-danger" role="progressbar"
											 style="width:20%" aria-valuenow="20"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-online">
											<img src="app-assets/images/portrait/small/avatar-s-6.png" alt="avatar" data-placement="right"
											 title="Nicole Barrett"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop26" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop26" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall25">
                  <label class="custom-control-label" for="checkboxsmall25"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">Create App Landing page</a>
										<p class="text-muted"> Donec pulvinar nisi ac convallis porta.</p>
									</td>
									<td>
										<h6 class="mb-0"> UI Fix & Support in <span class="text-bold-600">ABC Project</span> on <em>25 Sept, 2017</em></h6>
									</td>
									<td><span class="badge badge-info">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="30" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:30%"
											 aria-valuenow="30"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-off">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-placement="right"
											 title="Jason Robertson"><i></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop27" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop27" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<!-- 11 Days Ago -->
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall26">
                  <label class="custom-control-label" for="checkboxsmall26"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">UI Design for the CCC</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0"> UI/UX Task & Support in <span class="text-bold-600">ABC Project</span> on <em>05 Sept, 2017</em></h6>
									</td>
									<td><span class="badge badge-success">Low</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="100" aria-valuemax="100" class="progress-bar bg-gradient-x-success" role="progressbar"
											 style="width:100%" aria-valuenow="100"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-7.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Willie Sanchez"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop28" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop28" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall27">
                  <label class="custom-control-label" for="checkboxsmall27"></label>
                </div></td>
									<td>
										<a href="#" class="text-bold-600">PSD to Magento Conversation</a>
										<p class="text-muted">Phasellus vel elit volutpat, egestas urna a, pharetra nibh.</p>
									</td>
									<td>
										<h6 class="mb-0"> UI/UX Task & Support in <span class="text-bold-600">ABC Project</span> on <em>05 Sept, 2017</em></h6>
									</td>
									<td><span class="badge badge-primary">Medium</span></td>
									<td>
										<div class="progress progress-sm">
											<div aria-valuemin="50" aria-valuemax="100" class="progress-bar bg-gradient-x-info" role="progressbar" style="width:50%"
											 aria-valuenow="50"></div>
										</div>
									</td>

									<td class="text-center">
										<span class="avatar avatar-busy">
											<img src="app-assets/images/portrait/small/avatar-s-8.png" alt="avatar" data-toggle="tooltip"
											 data-placement="right" title="Mary Salazar"><i class=""></i>
										</span>
									</td>
									<td>
										<div class="dropdown">
											<button id="btnSearchDrop29" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
											 class="btn btn-info dropdown-toggle"><i class="la la-cog align-middle"></i></button>
											<div aria-labelledby="btnSearchDrop29" class="dropdown-menu mt-1 dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="ft-eye"></i> Open Task</a>
												<a href="#" class="dropdown-item"><i class="ft-edit-2"></i> Edit Task</a>
												<a href="#" class="dropdown-item"><i class="ft-check"></i> Complete Task</a>
												<a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="ft-trash"></i> Delete Task</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th><div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="checkboxsmall28">
                  <label class="custom-control-label" for="checkboxsmall28"></label>
                </div></th>
									<th>Task</th>
									<th>Dates</th>
									<th>Priority</th>
									<th>Progress</th>
									<th>Owner</th>
									<th>Actions</th>
								</tr>
							</tfoot>
						</table>
					</div>
					<!--/ Task List table -->
				</div>
			</div>
		</div>
	</div>
</section>
        </div>
      </div>
    </div>
    <!-- END: Content-->


	<!-- BEGIN: Customizer-->
	<?php include_once("includes/customizer.php"); ?>
    <!-- End: Customizer-->


    <!-- BEGIN: Footer-->
    <?php include_once("includes/footer.php"); ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/tables/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="app-assets/js/core/libraries/jquery_ui/jquery-ui.min.js"></script>
    <script src="app-assets/js/scripts/ui/jquery-ui/date-pickers.min.js"></script>
    <script src="app-assets/vendors/js/forms/select/select2.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/project-task-list.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>