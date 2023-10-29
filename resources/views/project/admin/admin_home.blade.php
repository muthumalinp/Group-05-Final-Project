<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>


    <body>
        <header>

        </header>

        <aside>
            <button id="sidebar-toggle"><h1>Salon</h1></button>
                <nav>
                    <ul>
                        <li><a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Dashboard</a>
                        <li><a href="/manage_product" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Product</a>
                        <li><a href="/view_profile" class="nav-item nav-link"><i class="fa fa-th me-2"></i>View Profile</a>
                        <li><a href="/customer_details" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Customer Details</a>
                        <li><a href="/manage_appointment" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Appoinment</a>
                        <li><a href="/manage_rented_item" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Manage Rented Item</a>
                        <li><a href="/setting" class="nav-item nav-link"><i class="fa fa-th me-2"></i>setting</a>
                    </ul>
                </nav>
        </aside>
        
       
        

        <main>
            <h1>Admin Dashboard</h1>
                <div class="cards">
                    <div class="card">
                        <h2>Card 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="card">
                        <h2>Card 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="card">
                        <h2>Card 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <div class="card">
                        <h2>Card 4</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
        </main>

        <footer>

        </footer>

        <script src="script.js"></script>
    </body>
</html>