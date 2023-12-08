<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Customer Details
                        
                        </h4>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Fnamme</td>
                                    <td>Lname</td>
                                    <td>Email</td>
                                    <td>PhoneNumber</td>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>{{$data->fname}}</td>
                                    <td>{{$data->lname}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->phone_number}}</td>

                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
