<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\Customer\Rent\rentcss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    @extends('layouts1.main')
@section('title', 'Rent')
    
    <title>Document</title>
</head>


<body>
    <div class = "container">
        <div class = "centered-text">
            <h1>Renting</h1>
        </div>
        <div class = "top1">
            <div class ="btn1">
            <a href ="{{url('bdlwrs')}}">   
            <button type="button" class="btn btn-outline-dark"><h3>Bridal Wear</h3></button>
            </a>
            </div>

            <div class = "btn2">
            <a href ="{{url('pwr')}}"> 
            <button type="button" class="btn btn-outline-dark"><h3>Party wear</h3></button>
            </a>
            </div>
        </div>

        <div class= "top2">
            <div class ="btn3">
            <a href ="{{url('bjwel')}}"> 
            <button type="button" class="btn btn-outline-dark"><h3>Bridal Jewelleries</h3></button>
        </a>
            </div>

            <div class = "btn4">
            <a href ="{{url('pjwel')}}"> 
            <button type="button" class="btn btn-outline-dark"><h3>Party Jewelleries</h3></button>
        </a>
            </div>
        </div>

        <div class = "hline">
        <hr class = "h">
        </div>


        

            
        


    </div>

    
</body>
</html>