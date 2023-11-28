@extends('layouts.owner_nav')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Salon Yaraa Admin Page</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>


   @section('cont')
   <body>

      <div class="main_container">
         <div class="container">
            <div class="Header">Dashboard</div>
            <div class="info">
               <div class="dash_btn">
               <button type="button" class="btn btn-light">Employee</button>
               <button type="button" class="btn btn-light">Product</button>
               <button type="button" class="btn btn-light">Service</button>
               </div>
               <div  class="content">A good example of a paragraph contains a topic sentence,
                   details and a conclusion. 'There are many different kinds of animals that live in China. 
                   Tigers and leopards are animals that live in China's forests in the north.
               </div>
               <div class="content">A good example of a paragraph contains a topic sentence,
                   details and a conclusion. 'There are many different kinds of animals that live in China. 
                   Tigers and leopards are animals that live in China's forests in the north.
               </div>
               <div class="content">A good example of a paragraph contains a topic sentence,
                   details and a conclusion. 'There are many different kinds of animals that live in China. 
                   Tigers and leopards are animals that live in China's forests in the north.
               </div>
            </div>
         </div> 
      </div>
      
      
   </body>
</html>