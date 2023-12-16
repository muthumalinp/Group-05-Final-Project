@extends('layouts1.main')
@section('title', 'Booking')
<!DOCTYPE html>
<html>

<head>
    <title>Gallery - Our Beauty Transformations</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/gallery/hair.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css\boostrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css\boostrap.min.css') }}">
    <style>
        .rectangular-img {
            width: 100%;
            max-height: 450px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container"
        style="margin-top: 100px; background-color: #171616; padding: 20px 20px 20px 20px; border-radius: 5px;">
        <div style="text-align: center; margin: 10px 50px 50px 50px; color: #E0C2C0;">
            <h1>See Our Work!</h1>
            <h4 style="font-weight: 200">Nothing shines out more than a bride in her most natural state</h4>
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <img src="{{ asset('css/gallery/images/13.png') }}" alt="Image 1" class="img-fluid rectangular-img">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('css/gallery/images/14.png') }}" alt="Image 2" class="img-fluid rectangular-img">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('css/gallery/images/15.png') }}" alt="Image 3" class="img-fluid rectangular-img">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('css/gallery/images/16.png') }}" alt="Image 1" class="img-fluid rectangular-img">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('css/gallery/images/17.png') }}" alt="Image 2" class="img-fluid rectangular-img">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('css/gallery/images/18.png') }}" alt="Image 3" class="img-fluid rectangular-img">
            </div>
        </div>
        <div style="text-align: center; margin: 50px 50px 10px 50px; color: #E0C2C0;">
            <h4 style="font-weight: 200">Happiness and confidence are the prettiest things you can wear on your wedding day...</h4>
        </div>
    </div>
</body>

</html>
