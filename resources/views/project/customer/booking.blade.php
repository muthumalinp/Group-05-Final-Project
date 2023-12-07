@extends('project.customer.layouts.main')
@section('title', 'Book Now')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .body1 {
            padding-top: 200px;
        }
        .btn-custom:active, .btn-custom:focus {
            background-color: #fff;
            border-color: #ffff;
            color: black;
            width: 200px;
            text-align: left;
        }
        .hidden-content {
            display: none;
        }
    </style>
</head>
<body class="body1">
    <div class="container">
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
        <div class="row" id="contentToHide">
            <div class="col-md-3">
                <div class="col-12">
                    <button type="button" class="btn btn-custom" onclick="toggleContent('hairContent')">Hair Services</button><br/>
                    <button type="button" class="btn btn-custom" onclick="toggleContent('bridalContent')">Bridal Services</button><br/>
                    <button type="button" class="btn btn-custom" onclick="toggleContent('nailContent')">Nail Services</button><br/>
                    <button type="button" class="btn btn-custom" onclick="toggleContent('otherContent')">Other Services</button><br/>
                </div>
            </div>

            <div class="col-md-6">
                <div id="hairContent" class="hidden-content">
                    <div class="row">
                        <div class="col-6">
                            <label>
                                <input type="radio" name="hairCutType" class="btn-check" id="hcl01" onclick="showContent('hairCutLadies')">
                                <span class="btn btn-custom" id="hideContentButton">Hair Cut - Ladies - Rs. 5000</span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#hairCutLModel">Hair Cut - Gents - Rs. 4000</button>
                        </div>
                    </div>
                </div>
                
                <div id="bridalContent" class="hidden-content">
                    <div class="row">
                        <div class="col-8">
                            <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#hairCutLModel"></button>
                        </div>
                    </div>
                </div>
                
                <div id="nailContent" class="hidden-content">
                    Content for Finish & Treats goes here.
                </div>
                
                <div id="otherContent" class="hidden-content">
                    Content for Keratin Treatment goes here.
                </div>
            </div>
        </div>
    </div>

    <div id="hairCutLadies" class="hidden-content">
        <h1>You Select Hair Cut - Ladies - Rs. 5000</h1>
        <div class="col-4">
            <div class="form-group">
                <label for="stylist">Select a Stylist:</label>
                <select class="form-control" name="stylist" id="stylistSelect" required>
                    @foreach($hairstylists as $hairstylist)
                        <option>Any</option>
                        <option value="{{ $hairstylist->emp_fname }}">{{ $hairstylist->emp_fname }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>


    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleContent(contentId) {
            var allContent = document.querySelectorAll('.hidden-content');
            allContent.forEach(function(content) {
                content.style.display = 'none';
            });
            var content = document.getElementById(contentId);
            content.style.display = 'block';
        }

        function showContent(contentId) {
            var allContent = document.querySelectorAll('.hidden-content');
            allContent.forEach(function(content) {
                content.style.display = 'none';
            });
            var content = document.getElementById(contentId);
            content.style.display = 'block';
        }
    </script>
</body>
</html>
