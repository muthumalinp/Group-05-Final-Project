@extends('layouts1.owner_sidebar')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Salon Yaraa owner-profile</title>
      <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
      <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
      <link rel="stylesheet" href="{{ asset('css/Owner/profile.css') }}">

      <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
   </head>

   <body>
   @section('cont')
      <script src="{{asset('js/bootstrap.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script><div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class=".col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                <div class="card" style="margin: 200px 300px 0 100px; width: 1000px;">
                    <div class="card-header">
                        <h4>Add IMAGE
                            <a href="{{ url('guploadimage') }}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('add-guploadimage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group mb-3">
                                <label for="">PAGE NAME</label>
                                <input type="text" name="page_name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">IMAGE NAME</label>
                                <input type="text" name="image_name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">INSERT IMAGE</label>
                                <input type="file" name="profile_image" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Image</button>
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