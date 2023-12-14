<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Owner side bar</title>
        <!--<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">-->
        <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
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

         <div class="top_navbar">
            <div class="logo">Salon <span>Yaraa</span></div>
            <div class="menu">
                <div class="humberger">
                  
               </div>
               <div class="profile_wrap">
                  <div class="profile">
                     <img class="rounded-circle" src="css/Owner/owner_profile_image.jpeg" alt="profile_pic">
                     <span class="name">Yaara</span>
                     <span class="icon"><i class="fas fa-caret-down"></i></span>
                  </div>
               </div>
            </div>
         </div>

        <aside>
                <nav>
                    <ul>

                        <li><a href="/owner" class="nav-item nav-link"><i class="fas fa-gauge"><span class="text">Dashboard</span></a></i>
                        <li><a href="/Leave-Request" class="nav-item nav-link"><i class="fa-solid fa-clipboard"><span class="text">Leave Requests</span></a></i>
                        <li><a href="/Manage-Salary" class="nav-item nav-link"><i class="fas fa-hand-holding-dollar"><span class="text">Manage Salary</span></a></i>
                        <li><a href="/Feedbacks" class="nav-item nav-link"><i class="fas fa-comments"><span class="text">Feedbacks</span></a></i>
                        <li><a href="/Profile" class="nav-item nav-link"><i class="fas fa-user"><span class="text">Profile</span></a></i>
                        <li><a href="/Full-Report" class="nav-item nav-link"><i class="fas fa-chart-pie"><span class="text">Report</span></a></i>
                        <li><a href="/Settings" class="nav-item nav-link"><i class="fas fa-gears"><span class="text">Web Setting</span></a></i>
                        <li><a href="/Home" class="nav-item nav-link"><i class="fa-solid fa-right-from-bracket"><span class="text">Log Out</span></a></i>
                        <!--<li><a href="/test" class="nav-item nav-link"><i class="fas fa-gears"><span class="text">Test</span></a></i>-->
                    </ul>
                </nav>
        </aside>

        <main>
            @yield('cont')
        </main>
        
    </body>
</html>