<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Dashboard Admin</title>

    	<!-- Bootstrap CSS -->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"/>
		
		<!-- Javascript -->
    	<script src="https://kit.fontawesome.com/c940159a86.js" crossorigin="anonymous"></script>  
		<script src="<?=base_url('assets/js/jquery/jquery.min.js')?>"></script>
		<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
		<!-- <script src="<?=base_url('assets/sweetalert/sweetalert.min.js')?>"></script> -->
	
		<!-- my CSS -->
		<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
	
	</head>
  <body>
    <div class="main-container d-flex" style="background-color: #EEF1F3;">
      <div class="sidebar shadow " id="side_nav">
        <div class="header-box px-3 pb-4 pt-4 d-flex justify-content-between">
          <h2 class="fs-4">
					<a href="<?= base_url('index.php/admin') ?>" class="text-decoration-none">
            <span class="text-white rounded px-2 mx-2" style="background-color: #2196f3;">A</span>
            <span class="" style="color: #5D7285;"> Admin</span></h2>
					</a>
          <button class="btn d-md-none d-block px-1 py-0  text-white close-btn">
          <i class="fas fa-bars" style="color: #5D7285;"></i>
          </button>
        </div>
        <ul class="list-unstyled px-3 fw-normal">
          <li class=""><a href="<?= base_url('index.php/welcome') ?>" class="text-decoration-none px-3 py-3 d-block d-flex"><i class="fas fa-lg fa-home me-3" style="position: relative; display: block; min-width: 25px;"></i>Dashboard</a></li>
          <li class=""><a href="<?= base_url('index.php/admin/data_pegawai') ?>" class="text-decoration-none px-3 py-3 d-block d-flex"><i class="fas fa-lg fa-user me-3" style="position: relative; display: block; min-width: 25px;"></i></i>Data Pegawai</a></li>
          <li class=""><a href="<?= base_url('index.php/admin/data_kontrak') ?>" class="text-decoration-none px-3 py-3 d-block d-flex"><i class="fas fa-lg fa-file me-3" style="position: relative; display: block; min-width: 25px;"></i></i>Data Kontrak</a></li>
          <li class=""><a href="<?= base_url('index.php/admin/data_jabatan') ?>" class="text-decoration-none px-3 py-3 d-block d-flex"><i class="fas fa-lg fa-list me-3" style="position: relative; display: block; min-width: 25px;"></i></i>Data Jabatan</a></li>
        </ul>
      </div>

      <!-- Content -->
      <div class="content">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light p-3" style="background: #2196f3;">
          <div class="container-fluid">
            <div class="d-flex justify-content-between d-md-none d-block">
              <button class="btn d-md-none d-block px-1 py-0  text-white open-btn">
                <i class="fas fa-bars" style="color: #fff;"></i>
                </button>
              <a class="navbar-brand fs-4 ms-2" href="<?= base_url('index.php/admin') ?>"><span class="" style="color: #fff;"> AppTend</span></a>
            </div>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-ellipsis-v" style="color: white;"></i>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
						
            <ul class="navbar-nav ms-auto">
			  		<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="<?= base_url('index.php/admin/profile') ?>">Profile</a>
                           <div class="dropdown-divider"></div>
                           <a class="dropdown-item text-danger" style="font-weight: 600;" href="<?= base_url('index.php/auth/logout') ?>">Log Out</a>
                        </div>
                     </li>
              </ul>
            </div>
          </nav>
          <!-- akhir navbar -->
