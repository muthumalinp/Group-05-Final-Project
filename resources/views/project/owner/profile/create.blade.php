@extends('layouts.owner_nav')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Salon Yaraa owner-profile</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <link rel="stylesheet" href="{{ asset('css/Owner/profile.css') }}">

      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>


   @section('cont')
   <body>

      <script src="{{asset('js/bootstrap.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      

       <!-- @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif-->

      <div class="main_container">
         <div class="container">
            <div class="Header"><h3>Profile</h3></div>
            <div class="info">
               @if(session('flash_message'))
                    <h6 class="alert alert-success">{{session('flash_message')}}</h6>
                @endif
               <div class="container rounded bg-white mt-5 mb-5">
               <form method="post" action="/storeownerdata" enctype="multipart/form-data">
               @csrf
                  <div class="row">
                     <div class="col-md-9 border-right">
                        <div class="p-3 py-5">
                           <div class="d-flex justify-content-between align-items-center mb-3">
                              <h4 class="text-right">Profile Settings</h4>
                           </div>
                           <div class="row mt-2">
                              <div class="col-md-6"><label class="labels">First Name</label><input type="text" name="owner_fname" class="form-control" value=""></div>
                              <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="owner_lname" class="form-control" value=""></div>
                           </div>
                           <div class="row mt-3">
                              <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="owner_phone" class="form-control" value=""></div>
                              <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" name="owner_address" class="form-control" value=""></div>
                              <div class="col-md-12"><label class="labels">Email</label><input type="text" name="owner_email" class="form-control" value=""></div>
                           </div>
                           <div class="row mt-3">
                              <div class="col-md-12"><label class="labels">Bio</label><input type="text" name="owner_bio" class="form-control" value=""></div>
                           </div>
                           <div class="row mt-3">
                              <label class="labels">Images</label><br/>
                              <input type="file" name="owner_photo" class="form-control-file" id="exampleFormControlFile1"><br/><br/>
                           </div>
                           <div class="raw mt-3">
                              <div class="col-md-12"><span>Edit Experience</span></div><br>
                              <div class="col-md-12"><label class="labels">Rewards</label><input type="text" name="owner_rewards" class="form-control" value=""></div> <br>
                              <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" name="owner_addetails" class="form-control" value=""></div>
                           </div>
                           <div class="p-3 py-5">
                              <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="bsubmit">Save Profile</button></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        
                     </div>
                  </div>
               </form>
               </div>
            </div>
         </div>
               
      </div>
   </div> 
</div>
      
      
   </body>
@endsection
</html>