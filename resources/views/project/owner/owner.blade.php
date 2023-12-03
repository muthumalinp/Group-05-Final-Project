@extends('layouts.owner_nav')
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
                        <div class="BtnLink_Left1">
                           <div class="content">A good example of a paragraph contains a topic sentence,
                           details and a conclusion. 'There are many different kinds of animals that live in China. 
                           Tigers and leopards are animals that live in China's forests in the north.
                           </div>
                        </div>
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