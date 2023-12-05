@extends('layouts.owner_sidebar')
<html>
    <head>
        <meta charset="utf-8">
        <title>Salon Yaraa DashBoard Page</title>
        <!--<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">-->
        <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
    </head>

    
    <body>
    @section('cont')
        <h2>Dashboard</h2>
        <div class="cards">
            <div class="card row">
                <div class="topMainTail clearfix">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="BtnLink_Left">
                                    <ul>
                                        <li><a href="{{ route('project.owner.Employee.index') }}">Employee</a></li>
                                    </ul>
                                </div>
                                <div class="BtnLink_Left">
                                    <ul>
                                        <li><a href="{{ route('project.owner.service.index') }}">Service</a></li>   
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="BtnLink_Right">
                                    <ul>
                                        <li> <a href="{{url('Index1')}}">Products</a></li>  
                                    </ul>
                                </div>
                                <div class="BtnLink_Right">
                                    <ul>
                                        <li><a href="{{ route('project.owner.Employee.index') }}">Rent Product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                            <div class="content rounded col-md-12">
                                 <div class="border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                       <h3 style="color:#633030; font-weight:bold">PROFILE</h3>
                                       <img class="rounded-circle mt-0" width="150px" src="css/Owner/owner_profile_image.jpeg">
                                       <span> ...</span>
                                       <span class="font-weight-bold">Yaraa De Silva</span>
                                       <span class="text-black-50">salonyaraa@gmail.com</span>
                                       <span class="text-black-50">+94 702 016 166</span>
                                       <span class="text-black-50">No.45, Highlevel Road, Maharagama</span>
                                       <span> </span>
                                    </div>
                                 </div>
                           </div>
            </div>
        </div>
    @endsection
    </body>
</html>

