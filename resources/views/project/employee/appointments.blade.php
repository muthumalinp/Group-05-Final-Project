<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="{{ asset('employee_assets/css/employee_style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">
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
                            <a class="nav-link" href="/employee-leaves">
                                <i class="bi bi-bookmarks"></i> My Leaves
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/employee-appointments">
                                <i class="bi bi-bookmarks"></i> Appoinments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/employee-holidays">
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
        @if (session()->has('flash_message'))
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    iconColor: 'white',
                    customClass: {
                        popup: 'colored-toast',
                    },
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                })
                Toast.fire({
                    icon: 'success',
                    title: 'Success',
                })
            </script>
        @endif

        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <header class=" pt-6">
                <div class="container-fluid">
                    <div class="row g-6">
                        <div class="col-sm-12 col-12 mb-4 mb-sm-0">
                            <h1 class="secondary-font-color" style="text-transform: capitalize;">
                                Appoinments</h1>
                            <p>Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Suscipit nobis minus libero nihil odio quisquam
                                reprehenderit, deleniti consequatur? Totam ipsa error velit dolore ut amet
                                aspernatur ab
                                voluptatibus
                                ad. Fuga?</p>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6">
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
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                        </tr>
                                    </thead>
                                    <tbody div class="leaves" id="holidaysList">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
        <!-- Main content -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('employee_assets/js/employee_appointments_calendar.js') }}"></script>
    <script src="{{ asset('employee_assets/js/employee_logout.js') }}"></script>
    @if ($bookedAppointments)
        <script>
            var bookedAppointments = @json($bookedAppointments);
            var formattedAppointments = bookedAppointments.map(function(appointment) {
                return {
                    date: appointment.booking_date,
                    start_time: appointment.start_time,
                    end_time: appointment.end_time,
                };
            });

            window.specialDays = formattedAppointments;
        </script>
    @endif
    <script>
        $(document).ready(function() {
            beginCalendar()
            var currentYear = new Date().getFullYear();

            $('#startingDate').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                startDate: new Date(),
            }).on('changeDate', function(selected) {
                var minDate = new Date(selected.date.valueOf());
                $('#endingDate').datepicker('setStartDate', minDate);
            });

            $('#endingDate').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                startDate: new Date(currentYear, 0, 1),
            }).on('changeDate', function(selected) {
                var maxDate = new Date(selected.date.valueOf());
                $('#startingDate').datepicker('setEndDate', maxDate);
            });
        });
    </script>

</body>

</html>
