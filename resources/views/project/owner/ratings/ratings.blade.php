@extends('layouts1.owner_sidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Salon Yaraa owner-profile</title>
    <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Owner/profile.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>
</head>

<body>
    @section('cont')
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class=".col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ratings</h4>

                            @if(Session::has('success_message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success: </strong>{{ Session::get('success_message') }}
                                <button type="button" class="close" data_dismiss="alert" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                            <div class="table-responsive pt-3">
                                <table id="ratings" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User ID</th>
                                            <th>Product ID</th>
                                            
                                            <th>Review Status</th>
                                            <th>Ratings</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ratings as $rating)
                                        <tr>
                                            <td>{{ $rating->id }}</td>
                                            <td>{{ $rating->user_id }}</td>
                                            <td>{{ $rating->product_ID }}</td>
                                            <td>{{ $rating->review }}</td>
                                            <td>{{ $rating->rating }}</td>
                                            <td>
                                                @if ($rating->status == 1)
                                                <a class="updateRatingStatus" id="rating-{{ $rating->id }}"
                                                    rating_id="{{ $rating->id }}" href="javascript:void(0)">
                                                    <i style="font-size: 25px;" class="mdi mdi-bookmark-check"
                                                        status="Active"></i>
                                                </a>
                                                @else
                                                <!-- Your code for inactive status -->
                                                @endif
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
    </div>
    @endsection
</body>

</html>
