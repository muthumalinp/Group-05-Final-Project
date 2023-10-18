@extends('layouts.main')
@section('title', 'Product')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{asset('css/product/product.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body id="conta">
    <div class="container">
        <div class="row">
            <div id="con" class="col-12">
                <h1 id="a text-center">
                    Products
                </h1>
            </div>
        </div><!--//row header-->

        <div class="row">
            <div class="col-12">
                <h2 class="c text-center font-weight-bold">
                    Hair Straightening
                </h2>
            </div>
        </div><!--//sub header-->

        <div class="row">
            <div class="e col-3">
                <img src="css/hairstr1.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="e col-3">
                <img src="css/hairstr2.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="e col-3">
                <img src="css/hairstr3.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="e col-3">
                <img src="css/hairstr4.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
        </div><!--//photos of hairstr-->

        <div class="row">
            <div class="d col-3 text-center lead">
                Dreamdron
            </div>
            <div class="d col-3 text-center lead">
                Bellose
            </div>
            <div class="d col-3 text-center lead">
                Xtenso
            </div>
            <div class="d col-3 text-center lead">
                Evon
            </div>
        </div><!--//text hairt-->

        <div class="row">
            <h2 class="c text-center mt-3 font-weight-bold">
                Hair Coloring & Highlighting
            </h2>
        </div><!--//sub header-->

        <div class="row">
            <div class="col-4">
                <img src="css/color1.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="col-4">
                <img src="css/color2.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="col-4">
                <img src="css/color3.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
        </div><!--//photos of color-->

        <div class="row">
            <div class="d col-4 text-center lead">
                Revlon
            </div>
            <div class="d col-4 text-center lead">
                Loreal
            </div>
            <div class="d col-4 text-center lead">
                Streax
            </div>
        </div><!--//text color-->

        <div class="row">
            <h2 class="c text-center mt-3 font-weight-bold">
                Hair Treatments
            </h2>
        </div><!--//sub header-->

        <div class="row">
            <div class="col-3">
                <img src="css/hairt1.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="col-3">
                <img src="css/hairt2.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="col-3">
                <img src="css/hairt3.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="col-3">
                <img src="css/hairt4.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
        </div><!--//photos of hairt-->

        <div class="row">
            <div class="d col-3 text-center lead">
                Tresemme<br>
                Shampoo and Conditioner
            </div>
            <div class="d col-3 text-center lead">
                Bellose<br>
                Shampoo and Conditioner
            </div>
            <div class="d col-3 text-center lead">
                Bellose<br>
                Keratin hair therapy
            </div>
            <div class="d col-3 text-center lead">
                Tresemme<br>
                Deep Smoothing Mask
            </div>
        </div><!--//text hairt-->

        <div class="row">
            <h2 class="c text-center mt-3 font-weight-bold">
                Facial & Cleanup
            </h2>
        </div><!--//sub header-->

        <div class="row">
            <div class="col-3">
                <img src="css/facial1.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="col-3">
                <img src="css/facial2.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="col-3">
                <img src="css/facial3.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
            <div class="col-3">
                <img src="css/facial4.jpg" class="mx-auto d-block" alt="" style="width: 250px; height:250px; border-radius: 30px;">
            </div>
        </div><!--//photos of facial-->

        <div class="row">
            <div class="d col-3 text-center lead">
                Himalaya
            </div>
            <div class="d col-3 text-center lead">
                Clean & Clear
            </div>
            <div class="d col-3 text-center lead">
                Nivea
            </div>
            <div class="d col-3 text-center lead">
                Lakme Scrub
            </div>
        </div><!--//text facial-->
    </div><!--//container-->

    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
