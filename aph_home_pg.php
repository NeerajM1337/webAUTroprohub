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

   

        <li class="nav-item dropdown pe-3">

          <a  href="../AutoProHub23/login-form-02/loginpg.html" >
            <button type="button" class="btn btn-primary">LOG OUT</button>
          </a>
          
         

 
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

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Bookings <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-bootstrap-fill
                      "></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Service Provideres <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>

                </div>
              </div>

            </div>
            

            <div class="col-xxl-12 col-xl-20">

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">SERVICES PROVIDED HERE</h5>
    
                  <!-- Slides with captions -->
                  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="assets/img/taxytaxy.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>ONLINE TAXI SERVICES</h5>
                          <p>WE PROVIDE ONLINE TAXI SERVICES FOR VEHICLES SUCH AS <br> 
                            (CAB , AUTORIKSHA , TOURISTBUS , GOODSCARRIER).</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="assets/img/istockphoto.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>RENTAL SERVICES</h5>
                          <p>WE PROVIDE RENTAL SERVICES  FOR VEHICLES SUCH AS<br> 
                            (CAR , BIKE , LUXURY VEHICLES ).
                          
                          </p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="assets/img/wrkshp.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>WORKSHOP SERVICES</h5>
                          <p>WE PROVIDE WORKSHOP SERVICES FOR VEHICLES  SUCH AS<br> 
                            (CAR , BIKE ).</p>
                        </div>
                      </div>

                      <div class="carousel-item">
                        <img src="assets/img/accessories.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>ACCESORY SERVICES</h5>
                          <p>WE PROVIDE ACCESORY SERVICES FOR<br> 
                            (CAR , BIKE).</p>
                        </div>
                      </div>
                    </div>
    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
    
                  </div><!-- End Slides with captions -->
    

            </div>
            <!-- End Customers Card -->

 

          </div>
        </div>
        <!-- End Left side columns -->


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