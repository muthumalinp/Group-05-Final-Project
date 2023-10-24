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
    <form action="" method="POST"></form>
    <div class="row">
        <div class="col-md-4">
            <div class="col-5">
                <button type="button" class="btn btn-custom" onclick="toggleContent('cutsContent')">Cuts</button><br/>
                <button type="button" class="btn btn-custom" onclick="toggleContent('colorContent')">Color</button><br/>
                <button type="button" class="btn btn-custom" onclick="toggleContent('finishContent')">Finish & Treats</button><br/>
                <button type="button" class="btn btn-custom" onclick="toggleContent('keratinContent')">Keratin Treatment</button><br/>
            </div>
        </div>
    
        <div class="col-md-6">
            <div id="cutsContent" class="hidden-content">
                <div class="col-12">
                    <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#cutBlowDryModal">Cut & Blow Dry</button>
                </div>
                <div class="col-12">
                    <select class="form-select">
                        <option>Yaara</option>
                        <option>Nick</option>
                        <option>Maria</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#cutBlowDryModal">BOOK NOW</button>
                </div>
            </div>
            <div id="colorContent" class="hidden-content">
                Content for Color goes here.
            </div>
            <div id="finishContent" class="hidden-content">
                Content for Finish & Treats goes here.
            </div>
            <div id="keratinContent" class="hidden-content">
                Content for Keratin Treatment goes here.
            </div>
        </div>
    </div>
</div>

<!-- Modal for Cut & Blow Dry -->
<div class="modal fade" id="cutBlowDryModal" tabindex="-1" role="dialog" aria-labelledby="cutBlowDryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cutBlowDryModalLabel">Cut & Blow Dry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Content for the Cut & Blow Dry pop-up goes here -->
                This is the content for Cut & Blow Dry.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function toggleContent(contentId) {
        // Hide all content sections
        var allContent = document.querySelectorAll('.hidden-content');
        allContent.forEach(function(content) {
            content.style.display = 'none';
        });

        // Show the selected content section
        var content = document.getElementById(contentId);
        content.style.display = 'block';
    }
</script>
</body>
</html>
