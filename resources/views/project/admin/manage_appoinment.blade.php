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
                <td>Email</td>
                <td>Phone</td>
                <td>Contact</td>
                <td>Message</td>
            </tr>

        @foreach($appointment as $appointment)

            <tr>
                <td>{{$appointment->id}}</td>
                <td>{{$appointment->fuName}}</td>
                <td>{{$appointment->eMail}}</td>
                <td>{{$appointment->phone}}</td>
                <td>{{$appointment->contact}}</td>
                <td>{{$appointment->massage}}</td>
            </tr>

        @endforeach
        </table>


        <script src="script.js"></script>
    </body>
</html>