@extends('layouts.main')
@section('title', 'Booking')
<!DOCTYPE html>
<html>
<head>
    <title>Gallery - Our Beauty Transformations</title>
    <link rel="stylesheet" href="{{ asset('css/gallery/hair.css') }}">
</head>
<body>
    <div class="a4_10">
        <div class="e4_10">
            <span class="e5_12"><strong>See Our Work!</strong></span>
            <span class="e5_13">Here’s a quick look at the beauty transformations that we have worked on. Whether it is a temporary makeup or a complete makeover, you can trust us.</span>
                <img src="{{ asset('css/gallery/images/1.png') }}" alt="hair" class="e5_28">
                <img src="{{ asset('css/gallery/images/2.png') }}" alt="hair" class="e5_29">
                <img src="{{ asset('css/gallery/images/3.png') }}" alt="hair" class="pic_3">
                <img src="{{ asset('css/gallery/images/4.png') }}" alt="hair" class="e5_31">
                <img src="{{ asset('css/gallery/images/5.png') }}" alt="hair" class="e5_32">
                <img src="{{ asset('css/gallery/images/6.png') }}" alt="hair" class="e5_33">
  
            <p class="e12_11">Life is too short to have boring hair...</p>
        </div>
    </div>
</body>
</html>
