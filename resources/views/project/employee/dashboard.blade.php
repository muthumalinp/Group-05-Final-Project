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
                            <a class="nav-link" href="/logout"
                                 onclick="confirmLogout(event)">
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
            {{-- <main class="py-6">
                <div class="container-fluid">
                    <!-- Card stats -->
                    <div class="row g-6 mb-6">
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="card shadow border-0 secondary-bg">
                                <div class="card-body ">
                                    <div class="row ">
                                        <div class="col">
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span>
                                            <span class="h3 font-bold mb-0">$11590.90</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape  text-white text-lg rounded-circle">
                                                <i class="bi bi-credit-card"></i>
                                            </div>
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
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">New
                                                projects</span>
                                            <span class="h3 font-bold mb-0">320</span>
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
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total
                                                hours</span>
                                            <span class="h3 font-bold mb-0">4.100</span>
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
                                            <span class="h6 font-semibold text-muted text-sm d-block mb-2">Work
                                                load</span>
                                            <span class="h3 font-bold mb-0">88%</span>
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
                            <h5 class="mb-0">Applications</h5>
                        </div>
                        <div class="table-responsive border-0">
                            <table class="table table-hover table-nowrap">
                                <thead style="background-color: #C1A0A0" class="border-0">
                                    <tr>
                                        <th scope="col" class="border-0">Date</th>
                                        <th scope="col" class="border-0">Name</th>
                                        <th scope="col" class="border-0">Company</th>
                                        <th scope="col" class="border-0">Offer</th>
                                        <th scope="col" class="border-0">Meeting</th>
                                        <th class="border-0"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Jason Martinez
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Feb 15, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..." src="https://bytewebster.com/img/logo.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                                Bytewebster
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $3.500
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-success"></i>Scheduled
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Ashley Williams
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Apr 15, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://preview.webpixels.io/web/img/other/logos/logo-2.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Netguru
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $2.750
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-warning"></i>Postponed
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Melissa Chen
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Mar 20, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://preview.webpixels.io/web/img/other/logos/logo-3.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Figma
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $4.200
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-success"></i>Scheduled
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Emily Davis
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Feb 15, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://preview.webpixels.io/web/img/other/logos/logo-4.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Mailchimp
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $3.500
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-dark"></i>Not discussed
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Thomas Nguyen
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Apr 10, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://preview.webpixels.io/web/img/other/logos/logo-5.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Webpixels
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $1.500
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-danger"></i>Canceled
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Jason Martinez
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Feb 15, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..." src="https://bytewebster.com/img/logo.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                                Bytewebster
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $3.500
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-success"></i>Scheduled
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Ashley Williams
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Apr 15, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://preview.webpixels.io/web/img/other/logos/logo-2.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Netguru
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $2.750
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-warning"></i>Postponed
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Melissa Chen
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Mar 20, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://preview.webpixels.io/web/img/other/logos/logo-3.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Figma
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $4.200
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-success"></i>Scheduled
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Emily Davis
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Feb 15, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://preview.webpixels.io/web/img/other/logos/logo-4.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Mailchimp
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $3.500
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-dark"></i>Not discussed
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                class="avatar avatar-sm rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Thomas Nguyen
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            Apr 10, 2023
                                        </td>
                                        <td class="border-0">
                                            <img alt="..."
                                                src="https://preview.webpixels.io/web/img/other/logos/logo-5.png"
                                                class="avatar avatar-xs rounded-circle me-2">
                                            <a class="text-heading font-semibold" href="#">
                                                Webpixels
                                            </a>
                                        </td>
                                        <td class="border-0">
                                            $1.500
                                        </td>
                                        <td class="border-0">
                                            <span class="badge badge-lg badge-dot">
                                                <i class="bg-danger"></i>Canceled
                                            </span>
                                        </td>
                                        <td class="text-end border-0">
                                            <a href="#" class="btn btn-sm btn-neutral">View</a>
                                            <button type="button" onclick="showSweetAlert()"
                                                class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer border-0 py-5">
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
                        </div>
                    </div>
                </div>
            </main> --}}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('employee_assets/js/employee_logout.js') }}"></script>
</body>

</html>
