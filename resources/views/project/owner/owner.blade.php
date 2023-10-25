
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sidebar Menu with sub-menu | CodingNepal</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
     <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>  -->
   </head>
   <body>
   <p>{{ $message }}</p>
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            Salon
         </div>
         <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Manage Salary</a></li>
            <li><a href="#">Feedback</a></li>
            <li class="active"><a href="#">Profile</a></li>
            <li><a href="#">Full Report</a></li>
            <li><a href="#">Settings</a></li>
	    <li><a href="#">Logout</a></li>
         </ul>
      </nav>
      <div class="content">
         <div class="header">
            Owner Profile
         </div>
         <p>
            Details
         </p>
      </div>
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
   </body>
</html>