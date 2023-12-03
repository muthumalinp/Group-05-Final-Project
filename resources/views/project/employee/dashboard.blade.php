
<!DOCTYPE html>
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
                        <li><a href="#" class="nav-item nav-link"><i class="fa fa-th me-2"></i>WORK</a>
                        <li><a href="/manage_product" class="nav-item nav-link"><i class="fa fa-th me-2"></i>LEAVE</a>
                        <li><a href="/view_profile" class="nav-item nav-link"><i class="fa fa-th me-2"></i>HOLIDAY</a>
                        <li><a href="/customer_details" class="nav-item nav-link"><i class="fa fa-th me-2"></i>MEETING</a>
                    </ul>
                </nav>
        </aside>

        <div class="Full2">
            <div class="Full21-Left">
                <img src="public\css\employ\img\Attendance_1.jpg">
            </div>
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

        <div class="Full3 clearfix">
            <div class="Full3-Left">
                <img src="public\css\employ\img\rectangle_12.png">
            </div>
            <div class="Full3-Right">
                <img src="public\css\employ\img\Attendance_1.jpg">
            </div>
        </div>
        
    </div>
</body>
</html>