
<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Sidebar Menu with sub-menu | CodingNepal</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>

   <style>
      .flex-container {
         display: flex;
      }

      .flex-container > div {
         background-color: #f1f1f1;
         
         padding: 20px;
         font-size: 30px;
      }

      #bg{
         background-color:
      }

   </style>



   <body>
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
      
      <div class="content" id="bg">
         <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
         </nav>
         <div class="header">
            Owner Profile
         </div>
         <p>
            Details
         </p>-->

         <div class="d-flex">
            <div class="p-2 w-100">
	            <h1 class="m-3 pt-3">Profile</h1>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-3">
                           <figure><img src="css/Owner/ownerprofile.jpg" alt="..."></figure>
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-md-3">
                           <h5>Full Name</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                           Example Owner
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-md-3">
                           <h5>Email</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                           owner@example.com
                        </div>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-md-3">
                           <h5>Phone Number</h5>
                        </div>
                        <div class="col-md-9 text-secondary">
                           070-257983135
                        </div>
                     </div>                        
                     <hr>
                  </div>
            </div>
            <div class="p-2 flex-shrink-1">Achievments</div>
         </div>
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