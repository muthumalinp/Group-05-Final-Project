
<!DOCTYPE html>
<<<<<<< Updated upstream
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
   <!-- <link rel="stylesheet" href="{{ asset('js/admin/admin.js') }}">  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="css\employ\employeeHomeStyle.css">
    </head>


    <body>
    
        
        <header>
            <style>
                body {
                    margin: 0;
                    font-family: Arial, sans-serif;
                    display: flex;
                }

                nav {
                    width:1px;
                    background-color: #333;
                    color: white;
                    padding: 20px;
                }

                main {
                flex: 1;
                padding: 20px;
                }
            </style>






        </header>
        
        <aside>
            <button id="sidebar-toggle"><h1>Salon</h1></button>
                <nav>
                    <ul>
                        <li><a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>WORK</a>
                        <li><a href="{{url('emplLeave')}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>LEAVE</a>
                        <li><a href="/view_profile" class="nav-item nav-link"><i class="fa fa-th me-2"></i>HOLIDAY</a>
                        <li><a href="/customer_details" class="nav-item nav-link"><i class="fa fa-th me-2"></i>MEETING</a>
                    </ul>
                </nav>
        </aside>

        <div class="Full2">
            <!--<div class="Full21-Left">
                <img src="public\css\employ\img\Attendance_1.jpg">
            </div>-->
            <div class="Full21-Right clearfix">
                <div class="Full22-Head clearfix">
                    <div class="work">
                        <h3>Hi ANN,<br> Good Morning,<p>Have a nice day</p></h3>
                    </div>
                    <div class="leave">
                        <button type="button">QUICK STATES</button>
                    </div>
                </div>
            </div>
        </div>

        <!--<div class="Full3 clearfix">
            <div class="Full3-Left">
                <img src="public\css\employ\img\rectangle_12.png">
            </div>
            <div class="Full3-Right">
                <img src="public\css\employ\img\Attendance_1.jpg">
            </div>-->
        </div>
        
=======
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee</title>
<link rel="stylesheet" href="{{asset('assets/css/employee_style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>
<body>
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full primary-bg">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 " id="navbarVertical">
        <div class="container-fluid secondary-bg">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse"
                data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <h3 class=""><img
                        src="https://www.freeiconspng.com/thumbs/profile-icon-png/-avatar-people-person-profile-user-women-icon--icon-search-engine-23.png"
                        width="40">Employee</h3>
            </a>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/employee-dashboard">
                            <i class="bi bi-house"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/employee-meetings">
                            <i class="bi bi-bar-chart"></i> Meetings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/employee-leaves">
                            <i class="bi bi-bookmarks"></i> My Leaves
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/employee-apoinments">
                            <i class="bi bi-bookmarks"></i> Appoinments
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/employee-holidays">
                            <i class="bi bi-bookmarks"></i> Holidays
                        </a>
                    </li>
                </ul>

                <!-- Push content down -->
                <div class="mt-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/employee-profile">
                            <i class="bi bi-person-square"></i> Account
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="return confirm('Are you sure you want to logout?')">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <h1 class="secondary-font-color">
            Hello! Employee Name</h1>
>>>>>>> Stashed changes
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="script.js"></script>
</body>
</html>
