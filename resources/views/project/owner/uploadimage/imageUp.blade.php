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
            <div class=".col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>IMAGE CRUD
                            <a href="{{ url('add-uploadimage') }}" class="btn btn-primary float-end">Add Image</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Page Name</th>
                                    <th>Image Name</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($uploadimage as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->pName }}</td>
                                    <td>{{ $item->Iname }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/uploadimages/'.$item->profile_image) }}" width="70px" height="70px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
@endsection
</html>