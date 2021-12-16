<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="">
            <img src="<?php echo base_url() ?>assets/images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html">
            <img src="<?php echo base_url() ?>assets/images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Welcome, <span class="text-black fw-bold"><?php echo $this->session->userdata('nama') ?></span></h1>
            <h3 class="welcome-sub-text">Anda Login Sebagai <span class="text-black fw-bold"><?php echo $this->session->userdata('role') ?></span> </h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-link">
            <a class="btn btn-primary position-relative" href="<?php echo base_url('users/keranjang') ?>">
              <i class="mdi mdi-cart"></i>
              Keranjang
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                1
              </span>
            </a>
          </li>
          
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" href="#">
              <img class="img-xs rounded-circle" src="<?php echo  base_url('assets/foto_user/') . $this->session->userdata('foto_user') ?>" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" style="width: 30px;" src="<?php echo  base_url('assets/foto_user/') . $this->session->userdata('foto_user') ?>" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold"><?php echo $this->session->userdata('nama') ?></p>
                <p class="fw-light text-muted mb-0"><?php echo $this->session->userdata('username') ?></p>
              </div>
              <a class="dropdown-item" href="<?php echo base_url('userProfil') ?>"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile </a>
              <a class="dropdown-item" href="<?php echo base_url('welcome/logout') ?>"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Log Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('users/dashboard') ?>">
              <i class="mdi mdi-grid-large menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item nav-category">Setting</li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('users/userProfil') ?>">
              <i class="menu-icon mdi mdi-account-circle-outline"></i>
              <span class="menu-title">User</span>
            </a>

          </li>
        </ul>
      </nav>