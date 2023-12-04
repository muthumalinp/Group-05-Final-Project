<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>

    <!--<style>
        .form-section{
            display: none;
        }

        .form-section.current{
            display: inline;
        }

        .parsley-error-list{
            color: red;
        }
    </style>-->

</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-9">
                <div class="card px-5 py-3 mt-5 shadow">
                    <h1 class="text-denger text-center mt-3 mb-4">Leave Form</h1>

                    <!--<div class="nav nav-fill my-3">
                        <label class="nav-link shadow-sm step0 border ml-2 ">Step One</label>
                        <label class="nav-link shadow-sm step1 border ml-2 ">Step Two</label>
                        <label class="nav-link shadow-sm step2 border ml-2 ">Step Three</label>
                    </div>-->

                    <form action="/post" method="post" class="employee-form">
                        @csrf
                        <div class="form-section">
                            <label for="">Employee Name</label>
                            <input type="text" class="form-control mb-3" name="name" required>
                            <label for="">Employee ID</label>
                            <input type="text" class="form-control mb-3" name="last_name" required>
                            <label for="">Phone</label>
                            <input type="tel" class="form-control mb-3" name="phone" required>
                        

                            <label for="">Position</label>
                            <input type="text" class="form-control mb-3" name="position" required>
                            <label for="">How many working days are you applying for leave</label>
                            <input type="text" class="form-control mb-3" name="workDays" required>

                            <label for="">Reason for Sickness Leave</label>
                            <textarea name="adress" class="form-control mb-3" cols="30" rows="5" required></textarea>
                        </div>

                        <div class="form-navigation mt-3">
                            <!--<button type="button" class="previous btn btn-primary float-left"> &lt; Previous</button>
                            <button type="button" class="next btn btn-primary float-right">Next &gt; </button>-->
                            <button type="submit" class="btn btn-success float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   


</body>
</html>