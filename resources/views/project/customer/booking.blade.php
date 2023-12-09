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
                        @if(isset($serviceCategories))
                            @foreach($serviceCategories as $serviceCategory)
                                <button type="button" class="btn btn-custom" onclick="toggleContent('{{ $serviceCategory->id }}')">
                                    {{ $serviceCategory->name }}
                                </button><br/>
                            @endforeach
                        @else
                            <p>No service categories found.</p>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="servicesContainer" class="hidden-content"></div>
                    <div id="hairContent" class="hidden-content">
                        <!-- ... existing content ... -->
                    </div>
                    <div id="bridalContent" class="hidden-content">
                        <!-- ... existing content ... -->
                    </div>
                    <div id="nailContent" class="hidden-content">
                        Content for Finish & Treats goes here.
                    </div>
                    <div id="otherContent" class="hidden-content">
                        Content for Keratin Treatment goes here.
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleContent(categoryId) {
            var allContent = document.querySelectorAll('.hidden-content');
            allContent.forEach(function(content) {
                content.style.display = 'none';
            });

            // Show the services container
            const servicesContainer = document.getElementById('servicesContainer');
            servicesContainer.style.display = 'block';

            // Load services when a category is clicked
            loadServices(categoryId);
        }

        function loadServices(categoryId) {
            // Make an asynchronous request to fetch services for the selected category
            // Replace the URL with the actual endpoint to fetch services
            fetch(`/api/services/${categoryId}`)
                .then(response => response.json())
                .then(services => {
                    // Update the services container with the fetched services
                    const servicesContainer = document.getElementById('servicesContainer');
                    servicesContainer.innerHTML = '';

                    if (services.length > 0) {
                        // Display each service
                        services.forEach(service => {
                            const serviceElement = document.createElement('div');
                            serviceElement.textContent = service.name;
                            servicesContainer.appendChild(serviceElement);
                        });
                    } else {
                        // Display a message if no services are available
                        servicesContainer.textContent = 'No services found for this category.';
                    }
                })
                .catch(error => {
                    console.error('Error fetching services:', error);
                });
        }
    </script>
</body>
</html>
