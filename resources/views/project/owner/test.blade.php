@extends('layouts1.owner_nav')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Salon Yaraa Admin Page</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>


   @section('cont')
   <body>
      <div class="main_container">
         <div class="container">
            <div class="Header">Dashboard</div>
            <div class="info">
               <div class="topMainTail clearfix">
                  <div class="col-md-10">
                     <div class="row">
                        <div class="col-md-3">
                           <div class="BtnLink_Left">
                              <ul>
                                 <li><a href="{{ route('project.owner.Employee.index') }}">Employee</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="BtnLink_Center">
                              <ul>
                                 <li> <a href="{{url('Index1')}}">Products</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="BtnLink_Center">
                              <ul>
                                 <li><a href="{{ route('project.owner.Employee.index') }}">Rent Product</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="BtnLink_Right">
                              <ul>
                                 <li><a href="{{ route('project.owner.service.index') }}">Service</a></li>   
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10">
                     <div class="row">

                           <div class="content rounded col-md-4">
                                 <div class="border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                       <h3 style="color:#633030; font-weight:bold">PROFILE</h3>
                                       <img class="rounded-circle mt-0" width="150px" src="css/Owner/owner_profile_image.jpeg">
                                      <!-- @if(isset($owner))
                                       <img class="rounded-circle mt-0" width="150px" src="{{ $owner->owner_photo}}">
                                       <span> ...</span>
                                       <span class="font-weight-bold">{{ $owner->owner_fname }} {{ $owner->owner_lname }}</span>
                                       <span class="text-black-50">{{ $owner->owner_email }}</span>
                                       <span class="text-black-50">{{ $owner->owner_phone }}</span>
                                       <span class="text-black-50">{{ $owner->owner_address }}</span>
                                       @endif-->
                                       
                                       <span> ...</span>
                                       <span class="font-weight-bold">Yaraa De Silva</span>
                                       <span class="text-black-50">salonyaraa@gmail.com</span>
                                       <span class="text-black-50">+94 702 016 166</span>
                                       <span class="text-black-50">No.45, Highlevel Road, Maharagama</span>
                                       <span> </span>
                                    </div>
                                 </div>
                           </div>
                           <!--<div class="col-md-4">
                                 <div class="border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                       <h3 style="color:#633030; font-weight:bold">CALENDER</h3>
                                       <img class="mt-0" width="250px" src="css/Owner/classic-calendar.png">
                                    </div>
                                 </div>
                           </div>-->
                     </div>
                     <div class="row">
                        <div class="content">A good example of a paragraph contains a topic sentence,
                        details and a conclusion. 'There are many different kinds of animals that live in China. 
                        Tigers and leopards are animals that live in China's forests in the north.
                        </div>
                     </div>
                     <div class="row">
                        <div class="content">A good example of a paragraph contains a topic sentence,
                        details and a conclusion. 'There are many different kinds of animals that live in China. 
                        Tigers and leopards are animals that live in China's forests in the north.
                        </div>
                     </div>
                  </div>
                     
                     
                  </div>
               </div>
         </div> 
      </div>
   </body>
</html>