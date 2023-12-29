<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="{{ asset('employee_assets/css/employee_style.css') }}">
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
                            <a class="nav-link" href="/employee-leaves">
                                <i class="bi bi-bookmarks"></i> My Leaves
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/employee-appointments">
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
                            <a class="nav-link" href="/employee-logout" onclick="confirmLogout(event)">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto dashboard-wrapper">
            <!-- Header -->
            <header class=" pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight secondary-font-color" style="text-transform: capitalize">
                                    Hello, {{ $user->fname . ' ' . $user->lname }}</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0 secondary-bg">
                                <div class="card-body ">
                                    <div class="row ">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Leaves
                                                Count</span>
                                            <span
                                                class="h3 font-bold mb-0">5</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0 secondary-bg">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Used Leaves
                                                Count</span>
                                            <span
                                                class="h3 font-bold mb-0">{{ $employee_leave->used_leaves ?? 0 }}</span>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0 secondary-bg">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Leaves
                                                Balance</span>
                                            <span
                                                class="h3 font-bold mb-0">{{ $employee_leave->remaining_leaves ?? 0 }}</span>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0 secondary-bg">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Appoinments
                                                Counts</span>
                                            <span
                                                class="h3 font-bold mb-0">{{ $bookedAppointments->count() ?? 0 }}</span>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                    <div class="mt-2 mb-0 text-sm">
                                        <span class="text-nowrap text-xs text-muted">Since last month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow border-0 mb-7 secondary-bg">
                        <div class="card-header border-0">
                            <h5 class="mb-0">Appoinment Details</h5>
                        </div>
                        <div class="table-responsive border-0">
                            <table class="table table-hover table-nowrap">
                                <thead style="background-color: #C1A0A0" class="border-0">
                                    <tr>
                                        <th scope="col" class="border-0">Appoinment Date</th>
                                        <th scope="col" class="border-0">Appoinment Start Time</th>
                                        <th scope="col" class="border-0">Appoinment End End Time</th>
                                        <th scope="col" class="border-0">Appoinment Duration</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($bookedAppointments->isNotEmpty())
                                        @foreach ($bookedAppointments as $appointment)
                                            <tr>
                                                <td class="border-0">
                                                    {{ $appointment->booking_date }}
                                                </td>
                                                <td class="border-0">
                                                    {{ $appointment->start_time }}
                                                </td>
                                                <td class="border-0">
                                                    {{ $appointment->end_time }}
                                                </td>
                                                <td class="border-0">
                                                    {{ \Carbon\Carbon::parse($appointment->start_time)->diff(\Carbon\Carbon::parse($appointment->end_time))->format('%H:%I') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="border-0">
                                                null
                                            </td>
                                            <td class="border-0">
                                                null
                                            </td>
                                            <td class="border-0">
                                                null
                                            </td>
                                            <td class="border-0">
                                                null
                                            </td>
                                        </tr>
                                    @endif


                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="card-footer border-0 py-5">
                            <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link disabled" href="#">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link bg-info text-white"
                                            href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div> --}}
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('employee_assets/js/employee_logout.js') }}"></script>
</body>

</html>
