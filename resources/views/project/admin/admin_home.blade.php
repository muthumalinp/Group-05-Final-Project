<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
   <!-- <link rel="stylesheet" href="{{ asset('js/admin/admin.js') }}">  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
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
                    width:1px
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
                        <h2>Total Customers</h2>
                        <p><b>Total Customers: {{ $totalCustomers }}</b><p>
                        <img src="{{ asset('css/admin/customer.jpeg') }}" alt="Admin" width="150px" height="60px" class="mx-auto d-block img-fluid">
                    </div>
                    <div class="card">
                        <div>
                            <h2>To Do List</h2>
                            
                        </div>

                        <div class="d-flex mb-2">
                            <input  type="text" id="input-box" placeholder="Enter task">
                            <button type="button" class="btn btn-primary ms-2" onclick="addTask()">Add</button>
                        </div>
                        
                        <ul id="taskList">
                         <!--   <li>Task 1</li>
                            <li>Task 2</li>
                            <li>Task 3</li>
                        </ul>
                        -->
                        
                        

                        
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

        <script src="/js/admin/admin.js"></script>
    
    </body>
</html>