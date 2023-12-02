<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
   <!-- <link rel="stylesheet" href="{{ asset('js/admin/admin.js') }}">  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="main_container">
            <div class="container">
                <div class="Header">Profile</div>
                <div class="info">

                    <div class="container rounded bg-white mt-5 mb-5">
                    <form method="POST" action="{{ route('project.owner.profile.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                    <img class="rounded-circle mt-5" width="150px" src="css/Owner/owner_profile_image.jpeg">
                                    <span class="font-weight-bold">Yaraa De Silva</span>
                                    <span class="text-black-50">salonyaraa@gmail.com</span>
                                    <span class="text-black-50">+94 702 016 166</span>
                                    <span class="text-black-50">No.45, Highlevel Road, Maharagama</span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-md-5 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Profile Settings</h4>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6"><label class="labels">First Name</label><input type="text" name="owner_fname" class="form-control" placeholder="first name" value=""></div>
                                        <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="owner_lname" class="form-control" value="" placeholder="last name"></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" name="owner_phone" class="form-control" placeholder="phone number" value=""></div>
                                        <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" name="owner_address" class="form-control" placeholder="address line 1" value=""></div>
                                        <div class="col-md-12"><label class="labels">Email</label><input type="text" name="owner_email" class="form-control" placeholder="email" value=""></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6"><label class="labels">Bio</label><input type="text" name="owner_bio" class="form-control" value=""></div>
                                    </div>
                                    <div class="row mt-3">
                                        <label class="labels">Images</label><br/>
                                        <input type="file" name="owner_photo" class="form-control-file" id="exampleFormControlFile1"><br/><br/>
                                    </div>
                                    <div class="raw mt-3">
                                        <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                                        <div class="col-md-12"><label class="labels">Rewards</label><input type="text" name="owner_rewards" class="form-control" placeholder="rewards" value=""></div> <br>
                                        <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" name="owner_addetails" class="form-control" placeholder="additional details" value=""></div>
                                    </div>
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
    </body>
</html>