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
</head>

<body class="primary-bg">
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full primary-bg">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 " id="navbarVertical"
            style="position: fixed">
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
                            <a class="nav-link" href="/employee-dashboard">
                                <i class="bi bi-house"></i> Dashboard
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
                            <a class="nav-link" href="/employee-holidays">
                                <i class="bi bi-bookmarks"></i> Holidays
                            </a>
                        </li>
                    </ul>

                    <!-- Push content down -->
                    <div class="mt-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="/employee-profile">
                                <i class="bi bi-person-square"></i> Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout-employee"
                                onclick="confirmLogout(event)">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="form-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Page title -->
                        <div class="my-5">
                            <h3>My Profile</h3>
                        </div>

                        @if (session()->has('success'))
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
                        <!-- Form START -->
                        <form class="file-upload" method="POST"
                            action="{{ route('update-profile') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-5 gx-5">

                                <div class="col-xxl-4">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <h4 class="mb-4 mt-0">Upload your profile photo</h4>
                                            <div class="text-center">
                                                <div class="square position-relative display-2 mb-3"
                                                    style="max-height: 300px">
                                                    <img id="showProfileImage"
                                                        src="{{ !empty($employee->owner_photo) ? url('employee_assets/uploads/' . $employee->owner_photo) : url('employee_assets/uploads/nodp.png') }}"
                                                        srcset="" alt="Profile Image" style="max-height: 250px">
                                                </div>
                                                <input type="hidden" id="currentProfileImage"
                                                    name="currentProfileImage"
                                                    value="{{ $employee->owner_photo ?? '' }}">
                                                <input type="file" id="profileImage" name="profileImage"
                                                    hidden="" value="Hello">
                                                <label class="btn btn-success-soft btn-block"
                                                    for="profileImage">Upload</label>
                                                <button type="button" class="btn btn-danger-soft"
                                                    id="removeButton">Remove</button>
                                                <div class="mt-5">
                                                    <h2 style="text-transform: capitalize">
                                                        {{ $user->fname . ' ' . $user->lname }}</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-8 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 pt-10 pb-3 rounded mb-5">
                                        <div class="row g-3">
                                            <h4 class="mb-4 mt-0">Employee ID: {{ $employee->id }}</h4>
                                            <h4 class="mb-4 mt-0">Join Date: {{ $employee->created_at }}</h4>
                                            <h4 class="mb-4 mt-0">Role: Develper{{ $employee->emp_jobtitle }}</h4>
                                            <h4 class="mb-4 mt-0">Salary: {{ $employee->emp_bsalary }}</h4>
                                        </div>
                                    </div>
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <h4 class="mb-4 mt-0">Contact detail</h4>
                                            <div class="col-md-6">
                                                <label class="form-label">First Name *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="First name" name="fname"
                                                    value="{{ $user->fname }}">
                                                @error('fname')
                                                    <span class="text-danger">*{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Last Name *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Last name" name="lname"
                                                    value="{{ $user->lname }}">
                                                @error('lname')
                                                    <span class="text-danger">*{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Mobile number *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Phone number" name="phone_number"
                                                    value="{{ $user->phone_number }}">
                                                @error('phone_number')
                                                    <span class="text-danger">*{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email *</label>
                                                <input type="email" class="form-control" id="inputEmail4"
                                                    name="email" value="{{ $user->email }}">
                                                @error('email')
                                                    <span class="text-danger">*{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="row mb-5 gx-5">
                                <div class="col-xxl-6 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <h4 class="mb-4 mt-0">Personal Informations</h4>
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-pinterest text-pinterest"></i>Birthday
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="birth_date" aria-label="Pinterest"
                                                    value="{{ $employee_details->birth_date }}" onfocus="this.blur()">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-facebook me-2 text-facebook"></i>NIC
                                                    No.
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="nic_no" aria-label="Facebook"
                                                    value="{{ $employee_details->nic_no }}" onfocus="this.blur()">
                                                @error('nic_no')
                                                    <span class="text-danger">*{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-twitter text-twitter me-2"></i>Address
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="address" aria-label="Twitter"
                                                    value="{{ $employee_details->address }}">
                                                @error('address')
                                                    <span class="text-danger">*{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-linkedin-in text-linkedin me-2"></i>Nationality
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="nationality" aria-label="Linkedin"
                                                    value="{{ $employee_details->nationality }}">
                                                @error('nationality')
                                                    <span class="text-danger">*{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-instagram text-instagram me-2"></i>Religion
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="religion" aria-label="Instragram"
                                                    value="{{ $employee_details->religion }}">
                                                @error('religion')
                                                    <span class="text-danger">*{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fas fa-fw fa-basketball-ball text-dribbble me-2"></i>Marital
                                                    Status
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    name="marital_status" aria-label="Dribble"
                                                    value="{{ $employee_details->marital_status }}">
                                                @error('marital_status')
                                                    <span class="text-danger">*{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-6 mb-5 mb-xxl-0">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <h4 class="mb-4 mt-0">Emergency Contact</h4>
                                            <!-- Facebook -->
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-facebook me-2 text-facebook"></i>Name
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Facebook" value="{{ $employee_details->name }}"
                                                    onfocus="this.disabled=true;" disabled>
                                            </div>
                                            <!-- Twitter -->
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-twitter text-twitter me-2"></i>Relationship
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Twitter"
                                                    value="{{ $employee_details->relationship }}"
                                                    onfocus="this.disabled=true;" disabled>
                                            </div>
                                            <!-- Linkedin -->
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-linkedin-in text-linkedin me-2"></i>Mobile
                                                    Number 1
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Linkedin"
                                                    value="{{ $employee_details->mobile_number_primary }}"
                                                    onfocus="this.disabled=true;" disabled>
                                            </div>
                                            <!-- Instragram -->
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-instagram text-instagram me-2"></i>Mobile
                                                    Number 2
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Instragram"
                                                    value="{{ $employee_details->mobile_number_secondary }}"
                                                    onfocus="this.disabled=true;" disabled>
                                            </div>
                                            <!-- Dribble -->
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fas fa-fw fa-basketball-ball text-dribbble me-2"></i>Address
                                                    1
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Dribble"
                                                    value="{{ $employee_details->address_primary }}"
                                                    onfocus="this.disabled=true;" disabled>
                                            </div>
                                            <!-- Pinterest -->
                                            <div class="col-md-6">
                                                <label class="form-label"><i
                                                        class="fab fa-fw fa-pinterest text-pinterest"></i>Address 2
                                                    *</label>
                                                <input type="text" class="form-control" placeholder=""
                                                    aria-label="Pinterest"
                                                    value="{{ $employee_details->address_secondary }}"
                                                    onfocus="this.disabled=true;" disabled>
                                            </div>
                                        </div> <!-- Row END -->
                                    </div>
                                </div>

                            </div> <!-- Row END -->

                            <div class="row mb-5 gx-5">

                                <!-- change password -->
                                <div class="col-xxl-6">
                                    <div class="bg-secondary-soft px-4 py-5 rounded">
                                        <div class="row g-3">
                                            <h4 class="my-4">Change Password</h4>
                                            <!-- Old password -->
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword1" class="form-label">Old password
                                                    *</label>
                                                <input type="password" class="form-control" name="old_password"
                                                    id="exampleInputPassword1">
                                            </div>
                                            <!-- New password -->
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword2" class="form-label">New password
                                                    *</label>
                                                <input type="password" class="form-control" name="password"
                                                    id="exampleInputPassword2">
                                            </div>
                                            <!-- Confirm password -->
                                            <div class="col-md-12">
                                                <label for="exampleInputPassword3" class="form-label">Confirm Password
                                                    *</label>
                                                <input type="password" class="form-control" name="confirm_password"
                                                    id="exampleInputPassword3">
                                            </div>
                                            @error('password')
                                                <span class="text-danger">*{{ $message }}</span>
                                            @enderror
                                            @error('confirm_password')
                                                <span class="text-danger">*{{ $message }}</span>
                                            @enderror
                                            @error('old_password')
                                                <span class="text-danger">*{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- button -->
                            <div class="gap-3 d-md-flex justify-content-md-end text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Update profile</button>
                            </div>
                        </form> <!-- Form END -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('employee_assets/js/employee_logout.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#profileImage').change(function(e) {
                var reader = new FileReader()
                reader.onload = function(e) {
                    $('#showProfileImage').attr('src', e.target.result)
                    $('#profileImage').attr('value', e.target.result)
                    $('#currentProfileImage').attr('value', e.target.result)
                }
                reader.readAsDataURL(e.target.files[0])
            })

            $('#removeButton').click(function(e) {
                $('#profileImage').val(null);
                $('#showProfileImage').attr('src', '');
                $('#currentProfileImage').attr('value', '')
            })
        })
    </script>

</body>

</html>
