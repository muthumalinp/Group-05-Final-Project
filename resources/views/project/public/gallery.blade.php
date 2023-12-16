@extends('layouts1.main')
@section('title', 'Gellery')
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css\gallery\first\gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('css\boostrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css\boostrap.min.css') }}">
    <style>
        .img-container {
            width: 100%;
            height: 700px;
            overflow: hidden;
            position: relative;
        }

        .img-container img {
            width: 100%;
            height: 700px;
            object-fit: cover;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .centered1 {
            text-transform: uppercase;
            font-weight: bolder;
        }

        .btn {
            top: 40%;
            left: 20%;
            transform: translateX(50%);
        }
    </style>
</head>

<body>
    <!-- Gallery -->
    <div class="container" style="margin-top: 100px; background-color: #171616; padding: 20px; border-radius: 5px;">
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="img-container">
                    <img src="{{ asset('css/gallery/first/7.png') }}" alt="Image 1" class="img-fluid">
                </div>
                <a href="/Gallery/Hair">
                    <button class="btn">MORE PHOTOS</button>
                    <h1 class="centered1">HAIR STYLE</h1>
                </a>
            </div>
            <div class="col-md-4">
                <div class="img-container">
                    <img src="{{ asset('css/gallery/first/8.png') }}" alt="Image 2" class="img-fluid">
                </div>
                <a href="/Gallery/FACE-AND-TREATMENT">
                <button class="btn">MORE PHOTOS</button>
                <h1 class="centered1">FACE AND <br>TREATMENT</h1>
                </a>
            </div>
            <div class="col-md-4">
                <div class="img-container">
                    <img src="{{ asset('css/gallery/first/9.png') }}" alt="Image 3" class="img-fluid">
                </div>
                <a href="/Gallery/Bridal">
                <button class="btn">MORE PHOTOS</button>
                <h1 class="centered1">BRIDAL</h1>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="img-container">
                    <img src="{{ asset('css/gallery/first/10.jpg') }}" alt="Image 1" class="img-fluid">
                </div>
                <a href="/Gallery/Tattoo">
                <button class="btn">MORE PHOTOS</button>
                <h1 class="centered1">NAILS</h1>
                </a>
            </div>
            <div class="col-md-4">
                <div class="img-container">
                    <img src="{{ asset('css/gallery/first/11.png') }}" alt="Image 2" class="img-fluid">
                </div>
                <a href="/Gallery/Jewelry">
                <button class="btn">MORE PHOTOS</button>
                <h1 class="centered1">Jewellery</h1>
                </a>
            </div>
            <div class="col-md-4">
                <div class="img-container">
                    <img src="{{ asset('css/gallery/first/12.png') }}" alt="Image 3" class="img-fluid">
                </div>
                <a href="/Gallery/Party-wear">
                <button class="btn">MORE PHOTOS</button>
                <h1 class="centered1">Party Wear</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Gallery -->
</body>

</html>
