<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>


    <body>
        <table border="2" cellpadding="40">
            <tr>
                <td>Id</td>
                <td>Fnamme</td>
                <td>Lname</td>
                <td>Email</td>
                <td>PhoneNumber</td>
            </tr>

            @foreach($data as $data)

            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->fname}}</td>
                <td>{{$data->lname}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone_number}}</td>
            </tr>

            @endforeach
        </table>


        <script src="script.js"></script>
    </body>
</html>