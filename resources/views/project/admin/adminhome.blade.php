<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/MainAdmin/mainadmin.css') }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav class="collapse d-lg-block sidebar collapse">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-area fa-fw me-3"></i><span>Manage Salary</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-lock fa-fw me-3"></i><span>Feedback</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-line fa-fw me-3"></i><span>Profile</span>
                        
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-pie fa-fw me-3"></i><span>Full Report</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-bar fa-fw me-3"></i><span>Settings</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-globe fa-fw me-3"></i><span>Log Out</span>
                    </a>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <h1 id="salonName">Salon</h1>
                </a>
              
                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    <!-- Notification -->
                    <li class="nav-item ">
                        <a class="nav-link me-3 me-lg-0 hidden-arrow" href="#" role="button" aria-expanded="false">
                            <i class="fas fa-bell"></i>
                            <span class="badge rounded-pill badge-notification bg-danger">1</span>
                        </a>
                    </li>

                    <!-- Icon -->
                    <li class="nav-item">
                        <a class="nav-link me-3 me-lg-0" href="#">
                            <i class="fas fa-fill-drip"></i>
                        </a>
                    </li>
                    <!-- Icon -->
                    <li class="nav-item me-3 me-lg-0">
                      <a class="nav-link" href="#">
                        <i class="fab fa-github"></i>
                      </a>
                    </li>

                    <!-- Avatar -->
                    <li class="nav-item">
                      <a class="nav-link hidden-arrow d-flex align-items-center" href="#" role="button" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                      </a>
                    </li>
                  </ul>
              </div>
                <!-- Container wrapper -->
          </nav>
          <!-- Navbar -->
      </header>
      <!--Main Navigation-->

      <!--Main layout-->
      <main style="margin-top: 58px;">
        <div class="container pt-4"></div>
      </main>
      <!--Main layout-->
</body>
</html>