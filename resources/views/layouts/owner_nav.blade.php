<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Owner side navigation bar</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>



   <body>
      <div class="wrapper hover_collapse">

         <div class="top_navbar">
            <div class="logo">Salon <span>Yaraa</span></div>
            <div class="menu">
               <div class="humberger">
                  <i class="fas fa-bars"></i>
               </div>
               <div class="profile_wrap">
                  <div class="profile">
                     <img src="css/Owner/ownerprofile.jpg" alt="profile_pic">
                     <span class="name">Yaara</span>
                     <span class="icon"><i class="fas fa-caret-down"></i></span>
                  </div>
               </div>
            </div>
         </div>

         <div class="sidebar">
            <div class="sidebar_inner">
               <ul>
                  <li><a href="/Home"><i class="fas fa-house"></i><span class="text">  Home</span></a></li>
                  <li class="active"><a href="/owner"><i class="fas fa-gauge"></i><span class="text">  Dashboard</span></a></li>
                  <li><a href="/Manage-Salary"><i class="fas fa-hand-holding-dollar"></i><span class="text">  Manage Salary</span></a></li>
                  <li><a href="/Feedbacks"><i class="fas fa-comments"></i><span class="text">  Feedback</span></a></li>
                  <li><a href="/Profile"><i class="fas fa-user"></i><span class="text">  Profile</span></a></li>
                  <li><a href="/Full-Report"><i class="fas fa-chart-pie"></i><span class="text">  Full Report</span></a></li>
                  <li><a href="/Settings"><i class="fas fa-gears"></i><span class="text">  Setting</span></a></li>
               </ul>

               <div class="social_media">
                  <a href="#"><i class="fab fa-square-facebook"></i></a>
                  <a href="#"><i class="fab fa-square-instagram"></i></a>
                  <a href="#"><i class="fab fa-square-twitter"></i></a>
               </div>
            </div>
         </div>

         <div class="main_content">
             @yield('cont')
        </div>
      </div>
      
      <script src="{{ asset('js/Owner/nav_scripts.js') }}"></script>
      
   </body>
</html>