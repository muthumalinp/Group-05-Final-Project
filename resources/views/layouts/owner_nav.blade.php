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
                  <i class="fa-solid fa-bars"></i>
               </div>
               <div class="profile_wrap">
                  <div class="profile">
                     <img src="css/Owner/ownerprofile.jpg" alt="profile_pic">
                     <span class="name">Yaara</span>
                     <span class="icon"><i class="fa-solid fa-caret-down"></i></span>
                  </div>
               </div>
            </div>
         </div>

         <div class="sidebar">
            <div class="sidebar_inner">
               <ul>
                  <li><a href="#"><i class="fa-solid fa-house"></i><span class="text">  Home</span></a></li>
                  <li class="active"><a href="#"><i class="fa-solid fa-gauge"></i><span class="text">  Dashboard</span></a></li>
                  <li><a href="#"><i class="fa-solid fa-hand-holding-dollar"></i><span class="text">  Manage Salary</span></a></li>
                  <li><a href="#"><i class="fa-solid fa-comments"></i><span class="text">  Feedback</span></a></li>
                  <li><a href="#"><i class="fa-solid fa-user"></i><span class="text">  Profile</span></a></li>
                  <li><a href="#"><i class="fa-solid fa-chart-pie"></i><span class="text">  Full Report</span></a></li>
                  <li><a href="#"><i class="fa-solid fa-gears"></i><span class="text">  Setting</span></a></li>
               </ul>

               <div class="social_media">
                  <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
                  <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-square-twitter"></i></a>
               </div>
            </div>
         </div>

         <div class="main_content">
             @yield('cont')
        </div>
      </div>
      
      <script src="js/Owner/nav_scripts.js"></script>
      
   </body>
</html>