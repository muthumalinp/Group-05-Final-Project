<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="{{ asset('assets/css/employee_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
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
                            <a class="nav-link " href="/employee-dashboard">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/employee-meetings">
                                <i class="bi bi-bar-chart"></i> Meetings
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/employee-leaves">
                                <i class="bi bi-bookmarks"></i> My Leaves
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/employee-apoinments">
                                <i class="bi bi-bookmarks"></i> Appoinments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/employee-holidays">
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
                            <a class="nav-link" href="#"
                                onclick="return confirm('Are you sure you want to logout?')">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <h1 class="secondary-font-color topic" style="text-transform: capitalize; margin: 20px 20px">
                Holidays</h1>
            <p class="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit nobis minus libero nihil odio quisquam
                reprehenderit, deleniti consequatur? Totam ipsa error velit dolore ut amet aspernatur ab voluptatibus
                ad. Fuga?</p>
            <div class="calander-container">
                <div id="calendar">
                    <div class="month">
                        <div class="nav" id="prevMonth">
                            <span class="bi bi-caret-left"></span>
                        </div>
                        <h2 id="monthYear"></h2>
                        <div class="nav" id="nextMonth">
                            <span class="bi bi-caret-right"></span>
                        </div>
                    </div>
                    <ul class="weekdays" id="weekdaysList">
                        <!-- Days of the week -->
                    </ul>
                    <ul class="days" id="daysList">
                        <!-- Days will be dynamically populated here -->
                    </ul>
                </div>
                <div class="holidays-list" id="holidaysList">
                </div>


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/employee_clander.js') }}"></script>
</body>

</html>
