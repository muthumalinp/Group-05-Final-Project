@extends('project.customer.layouts.main')
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
            <a class="e" href="service.html">Dreamdron</a>
            </div>
            <div class="d col-3 text-center lead">
                Bellose
            </div>
            <div class="d col-3 text-center lead">
                Xtenso
            </div>
            <div class="d col-3 text-center lead">
               Streax-Canvo
            </div>

                <!--//<a class="read_more" href="service.html">Read More</a>-->

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
                Luxury
            </div>
            <div class="d col-4 text-center lead">
                Serioxyl
            </div>
            <div class="d col-4 text-center lead">
               Show
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
               Musk
            </div>
            <div class="d col-3 text-center lead">
               Keracare
            </div>
            <div class="d col-3 text-center lead">
           Christophe Robin
            </div>
            <div class="d col-3 text-center lead">
                Tresemme
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
              Gold Infusion
            </div>
            <div class="d col-3 text-center lead">
              Growme
            </div>
            <div class="d col-3 text-center lead">
              Omni
            </div>
            <div class="d col-3 text-center lead">
                Spa Ceylon
            </div>
        </div><!--//text facial-->
    </div><!--//container-->

    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
