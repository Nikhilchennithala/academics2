<!--Author:subhana & juna
	Date:07/01/2020-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> dash board</title>
  <!-- Custom fonts for this template-->
  <link  rel="stylesheet" href="fontawesome/css/all.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">


<!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
			<div>
		<img src="img/log.svg" class="img-fluid">
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php" class="text-center">
          <i class="fas fa-user user-font px-4"></i></a></li>

        <!-- Divider -->
	   <li class="nav-item">
        <a class="nav-link collapsed" href="student-leave.php" >
          <i class="fas fa-user-graduate"></i>
          <span>Student leave</span>
        </a>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="assessment.php" >
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Assessments</span>
        </a>

      </li>

      <!-- Attendance Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="attendence_1.php" >
          <i class="fas fa-school"></i>
          <span>Attendance</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-bell"></i>
          <span>Notifications</span>
        </a>
      </li>

      <!-- Nav Item -ptrevious details-->
      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-info-circle"></i>
          <span>Previous details</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-info-circle"></i>
          <span>Course Materials</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="faculty-login.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="faculty-profile.php"  >
                <i class="fas fa-user "><p> Myprofile</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="#">
                <i class="fas fa-info"> <p>Help</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="#"  >
                <i class="fas fa-bell "><p> Notification</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="index.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>

        </nav>
		</div>
</div> 
<!------------------------------------------section start----------------------------------------------->
<section>
	<div class="container">
		
			<h1 class="text-center">STUDENT LEAVE MANAGEMENT</h1>
		<div class="row mt-5">
			<div class="col-md-4">
				<div class="btn-group-md">
				
					<button class="btn bg-info"><a href="student-leave.php" class="nav-link text-white">PENDING<a></button>
				</div></div>
				<div class="col-md-4">
				<div class="btn-group-md">
					<button class="btn bg-info"><a href="leave-forwarded.php" class="nav-link text-white">FORWARDED<a></button>
			</div></div>
			<div class="col-md-4">
				<div class="btn-group-md">
					<button class="btn bg-info"><a href="leave-rejected.php" class="nav-link text-white">REJECTED<a></button>
				</div>	</div>
			</div>
			<div class="card ">
			
			
				<div class="card-title m-4">
					<h2 >Leaves</h2>
				</div>
				
				<div class="card-body">
				<form method="post" action="#">
					<div class="form-row">
						
						<div class="form-group col-md-6">
							<input type="text" placeholder="Student Name" class="form-control" required>
						</div>
						<div class="form-group col-md-6">
							<input type="text" placeholder="Roll No" class="form-control" required>
						</div>
					</div>
					
					<div class="form-row">
						
						<div class="form-group col-md-6">
							Leave From<input type="date" class="form-control" required>
						</div>
						<div class="form-group col-md-6">
							Leave To<input type="date"  class="form-control" required>
						</div>
					</div>
					
					<div class="form-row">
						
						
						<div class="form-group col-md-6">
							
							<select id="leavetype" class="form-control" required>
								<option>Leave type</option>
								<option></option>
								<option></option>
								<option></option>
							</select>
						</div>
						
						
						<div class="form-group col-md-6">
							
							
							<select id="batch" class="form-control" required>
								<option>UI</option>
								<option>JSD1</option>
								<option>JSD2</option>
								<option>ED</option>
								
							</select>
						
						</div>
					</div>
					<div class="text-center py-3">
					<button class="btn btn-info text-white px-5" id="search">Search</button>
					</div>
					</form>
				</div>
				</div>
					
					
				
			
			
			
					<div class="card mt-5" id="student">
				<div class="card-title m-4">
					<h2>Leave Details</h2>
				</div>
				<div class="card-body">
				<div style="overflow-x:auto;">
					<table class="table table-striped">
						<tr>
							<th scope="col">Roll No:</th>
							<th scope="col">Name</th>
							<th scope="col">Leave Type</th>
							<th scope="col">Leave Date</th>
							<th scope="col">Session</th>
							<th scope="col">Status</th>
							<th scope="col">Details</th>
							<th scope="col">Action</th>
							<th scope="col">Reject</th>
						</tr>
					
						
						<tr>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
						</tr>
						<tr>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
						</tr>
						<tr>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
						</tr>
						<tr>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
							<td scope="col"></td>
						</tr>
						
						
						
						
						
						
					</table>
					</div>
					<div class="text-center py-3">
					<button class="btn btn-info text-white px-5" >Submit</button>
					</div>
					
				</div>
			</div>
					
				</div>
			
	
</section>

<!------------------------------------------section end------------------------------------------------->

<!-- Footer -->
      <footer class="">
          <div class="copyright text-center bg-gradient-primary py-2 text-light">
            <span>Copyright &copy; Orisys Academy 2019-2020</span>
        </div>
      </footer>
      <!-- End of Footer -->
</div>
    </div>
    <!-- End of Content Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="css/proper.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>
</body>

</html>
