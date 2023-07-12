<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>AUTOPROHUB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">AUTOPROHUB</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

   

        <!-- <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="../login-form-02/index.html" data-bs-toggle="dropdown">
          
            <span class="d-none d-md-block dropdown-toggle ps-2">LOGOUT</span>
          </a> -->
          
          <!-- End Profile Iamge Icon -->

          <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

        </li> -->
        <!-- End Profile Nav -->

      <!-- </ul> -->
    </nav>
    <!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>ADMIN</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span> Approval</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="aph_approval_user.html">
              <i class="bi bi-circle"></i><span>User</span>
            </a>
          </li>
          <li>
            <a href="aph_approval_serviceprovider.html">
              <i class="bi bi-circle"></i><span>Service Provider</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>View Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="aph_view_cust_user.html">
              <i class="bi bi-journal-text"></i><span>User</span>
            </a>
          </li>
          <li>
            <a href="aph_view_cust_serviceprovider.html">
              <i class="bi bi-journal-text"></i><span>Service Provider</span>
            </a>
          </li>
    
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="aph_view_userservice_history_cab.html">
              <i class="bi bi-circle"></i><span>Cab Services</span>
            </a>
          </li>

          <li>
            <a href="aph_view_userservice_history_rental.html">
              <i class="bi bi-circle"></i><span>Rental Services</span>
            </a>
          </li>
          <li>
            <a href="aph_view_userservice_history_workshop.html">
              <i class="bi bi-circle"></i><span>Workshop Services</span>
            </a>
          </li>
          <li>
            <a href="aph_view_userservice_history_accesory.html">
              <i class="bi bi-circle"></i><span>Accesory Service</span>
            </a>
          </li>
          <!-- <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span> View </span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Tables Nav -->

    </ul>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#comp-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span> Complaint</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="comp-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="aph_view_complaint.html">
            <i class="bi bi-circle"></i><span>View Complaint</span>
          </a>
        </li>
        <li>
          <a href="aph_view_reply.html">
            <i class="bi bi-circle"></i><span>View Reply</span>
          </a>
        </li>
  
      </ul>
    </li>
    <!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#pay-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span> Payment</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="pay-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="aph_view_payment_details.html">
            <i class="bi bi-circle"></i><span>View Payment</span>
          </a>
        </li>
      </ul>
    </li>

    <a class="nav-link collapsed" data-bs-target="#feedback-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span> FeedBack</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="feedback-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="aph_view_feedback.html">
          <i class="bi bi-circle"></i><span>View FeedBack</span>
        </a>
      </li>
    </ul>
  </li>

  <a class="nav-link collapsed" data-bs-target="#rating-nav" data-bs-toggle="collapse" href="#">
    <i class="bi bi-menu-button-wide"></i><span> Rating</span><i class="bi bi-chevron-down ms-auto"></i>
  </a>
  <ul id="rating-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
      <a href="aph_view_rating.html">
        <i class="bi bi-circle"></i><span>View Rating</span>
      </a>
    </li>
  </ul>
</li>
  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
      
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">APH APPROVE USERS</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">SLno</th>
                    <th scope="col">UserId</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No</th>

                    <th scope="col"> </th>
                    <th scope="col"></th>

            
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>usr101</td>
                    <td>Jacob</td>
                    <td>SUDAS MANJERI</td>
                    <td>JA22@gmail.com</td>
                    <td>7896576547</td>

                    <td><button type="button" class="btn btn-primary">Approve</button>

                    </td>
                    <td><button type="button" class="btn btn-danger">Reject</button>
                    </td>

                  </tr>
       
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

       
        </div>
      </div>
    </section>

  

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      All the links in the footer should remain intact.
      You can delete the links only if you purchased the pro version.
      Licensing information: https://bootstrapmade.com/license/
      <!- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    <!-- </div>
  </footer> -->
   
  
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>