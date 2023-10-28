<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for centering the form */
        #s {
            padding-top: 150px;
            background: #e0c2c0;
        }

        /* .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Center vertically in viewport 
        } */


        
/*        #t {

            background-color: #E1A954;
        } */

        #v {
            color: #000;
            text-align: center;
            font-family: Inria Serif;
            font-size: 20px;
            font-style: italic;
            font-weight: 700;
            line-height: normal;
            margin-bottom: 20px;
        }

        .btn_color {
            border-radius: 50px;
            background: #000;
            width: 230px;
            height: 60px;
            flex-shrink: 0;
            color: #FFF;
            text-align: center;
            font-family: Inria Serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }

        #i {
            fill: #F7E19F;
        }
    </style>
  </head>
  <body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>