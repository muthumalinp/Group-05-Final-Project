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
                            <a class="nav-link active" href="/employee-leaves">
                                <i class="bi bi-bookmarks"></i> My Leaves
                            </a>
                        </li>
                        <li class="nav-item">

                            <a class="nav-link" href="/employee-appointments">

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


        @if (session()->has('error'))
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
                    icon: 'error',
                    title: 'Error',
                })
            </script>
        @endif

        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <header class=" pt-6">
                <div class="container-fluid">
                    <div class="row g-6">
                        <div class="col-sm-12 col-12 mb-4 mb-sm-0">
                            <h1 class="secondary-font-color" style="text-transform: capitalize;">
                                My Leaves</h1>
                            <!-- <p>Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Suscipit nobis minus libero nihil odio quisquam
                                reprehenderit, deleniti consequatur? Totam ipsa error velit dolore ut amet
                                aspernatur ab
                                voluptatibus
                                ad. Fuga?</p> -->
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
                            <div class="leaves" id="holidaysList">

                                <table>
                                    <tr>
                                        <td>Total Leaves for This Month</td>
                                        <td>{{ $employee_leave->available_leaves ?? 0 }}</td>
                                    </tr>
                                    <tr>
                                        <td>Leaves Used</td>
                                        <td>{{ $employee_leave->used_leaves ?? 0 }}</td>
                                    </tr>
                                    <tr>
                                        <td>Leaves Balance</td>
                                        <td>{{ $employee_leave->remaining_leaves ?? 0 }}</td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=" shadow mb-7">

                        <div class="table-responsive">
                            <div class="col-md-8 secondary-bg">
                                <div class=" px-5 py-3 mt-5 shadow secondary-bg">
                                    <h1 class="text-denger text-center mt-3 mb-4">Request Leave</h1>

                                    <form method="POST" action="{{ route('employee.leave.request.form') }}">
                                        @csrf
                                        <div class="form-row row g-3">
                                            <div class="col-md-6 mb-3">
                                                <label for="input1">Employee ID</label>
                                                <input type="text" class="form-control" id="input1"
                                                    name="employee_id" value="{{ $employee->id }}"
                                                    onfocus="this.blur()">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="input2">Employee Name</label>
                                                <input type="text" class="form-control" id="input2"
                                                    name="leave_emp_name"
                                                    value="{{ $employee->emp_fname . ' ' . $employee->emp_lname }}"
                                                    onfocus="this.blur()">
                                            </div>
                                        </div>


                                        <div class="form-row row g-3">
                                            <div class="col-md-6 mb-3">
                                                <label for="input3">Position</label>
                                                <input type="text" class="form-control" id="input3"
                                                    name="leave_emp_position"
                                                    value="{{ is_array($employee->emp_jobtitles) ? implode(', ', $employee->emp_jobtitles) : $employee->emp_jobtitles }}"
                                                    onfocus="this.blur()">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="input4">Mobile Number</label>
                                                <input type="text" class="form-control" id="input4"
                                                    name="leave_emp_phone" value="{{ $employee->emp_phone }}"
                                                    placeholder="Enter Mobile Numbe">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <label for="input5">How many working days are you applying for
                                                leaven</label>
                                            <div class="input-group input-daterange col-md-4 mb-3">
                                                <input type="text" class="start-date form-control"
                                                    id="startingDate" value="<?php echo date('Y-m-d'); ?>"
                                                    name="leave_start_date">
                                                <span class="input-group-addon mx-3">to</span>
                                                <input type="text" class="end-date form-control" id="endingDate"
                                                    value="<?php echo date('Y-m-d'); ?>" name="leave_end_date">
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12 mb-3">

                                                <label for="textArea">Reason for Leave</label>

                                                <textarea class="form-control" id="textArea" rows="3" name="leave_reason"
                                                    placeholder="Reason for Sickness Leave..."></textarea>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <button class="btn btn-primary" type="submit">Request</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
    <script src="{{ asset('employee_assets/js/eployee_leave.js') }}"></script>
    <script src="{{ asset('employee_assets/js/employee_logout.js') }}"></script>
    <script>
        $(document).ready(function() {
            var currentYear = new Date().getFullYear();

            $('#startingDate').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                startDate: new Date(),
            }).on('changeDate', function(selected) {
                var minDate = new Date(selected.date.valueOf());
                $('#endingDate').datepicker('setStartDate', minDate);


                if (selected.date) {
                    $('#endingDate').prop('disabled', false);
                } else {
                    $('#endingDate').prop('disabled', true);
                }

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


            $('#endingDate').prop('disabled', true);
        });
    </script>


</body>

</html>

