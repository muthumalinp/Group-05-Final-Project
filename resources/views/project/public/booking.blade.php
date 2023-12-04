<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Online Booking</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <div class="container mt-5">
            <!-- Step 1: Service Selection -->
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center mb-4">Schedule Your Salon Appointment</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="form-group">
                        <label for="service">Select A Service:</label>
                        <select class="form-control" name="service" id="serviceSelect" required>
                            <!-- Options for services here -->
                            <option value="haircut">Hair Services</option>
                            <option value="bridal">Bridal Services</option>
                            <option value="nail">Nail Services</option>
                            <option value="other">Other Services</option>
                        </select>
                    </div>

                    <!-- Step 2: Hairstylist Selection -->
                    <!-- ... (other HTML code) -->

<div class="form-group">
    <label for="stylist">Select a Stylist:</label>
    <select class="form-control" name="stylist" id="stylistSelect" required>
        @foreach($employees as $employee)
            <option value="{{ $employee }}">{{ $employee }}</option>
        @endforeach
    </select>
</div>

<!-- ... (other HTML code) -->


                                // Generate the initial options
                                foreach ($hairstylists['haircut'] as $hairstylist) {
                                    echo '<option value="' . $hairstylist . '">' . $hairstylist . '</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <!-- ... Other service-related HTML elements ... -->
                </div>
            </div>

            <!-- Step 3: Personal Information -->
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <!-- ... Other form fields ... -->

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit Appointment</button>
                    </div>
                </div>
            </div>

        </div>
    </form>

    <!-- Bootstrap JS and Popper.js (for Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- JavaScript for dynamically updating hairstylist options -->
    <script>
        $(document).ready(function () {
            // Update hairstylist options when the service selection changes
            $('#serviceSelect').change(function () {
                var selectedService = $(this).val();
                var hairstylistOptions = <?php echo json_encode($hairstylists[$selectedService]); ?> || [];

                // Clear and update the hairstylist dropdown
                $('#stylistSelect').empty();
                $.each(hairstylistOptions, function (index, hairstylist) {
                    $('#stylistSelect').append($('<option>', {
                        value: hairstylist,
                        text: hairstylist
                    }));
                });
            });

            // Trigger the change event on page load to populate initial hairstylist options
            $('#serviceSelect').trigger('change');
        });
    </script>
</body>
</html>

