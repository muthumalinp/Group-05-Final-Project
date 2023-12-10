@extends('layouts.admin_navbar')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
   <!-- <link rel="stylesheet" href="{{ asset('js/admin/admin.js') }}">  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">
    <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
    
    
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
            <button id="sidebar-toggle"><h3>Salon</h3></button>
                <nav>
                    <ul>
                        <li><a href="/Home" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Home</a>
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
                        <div class="content rounded col-md-12">
                                 <div class="border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                       <h3 style="color:#633030; font-weight:bold">PROFILE</h3>
                                       <img class="rounded-circle mt-0" width="118px" src="css/Owner/owner_profile_image.jpeg">
                                       <span> ...</span>
                                       <span class="font-weight-bold">Yaraa De Silva</span>
                                       <span class="text-black-50">salonyaraa@gmail.com</span>
                                       <span class="text-black-50">+94 702 016 166</span>
                                       <span class="text-black-50">No.45, Highlevel Road, Maharagama</span>
                                       <span> </span>
                                    </div>
                                 </div>
                        </div>
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
                        <h2>Total Customers</h2>
                        <p><b>Total Customers: {{ $totalCustomers }}</b><p>
                        <img src="{{ asset('css/admin/customer.jpeg') }}" alt="Admin" width="150px" height="60px" class="mx-auto d-block img-fluid">
                        
                        <h2>Available Rent Items</h2>
                        <a href="{{url('/rentitems')}}" class="btn btn-secondary float-end">Check</a>
                        <h2>Available Products</h2>
                        <a href="{{url('/Index1')}}" class="btn btn-secondary float-end">Check</a>

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