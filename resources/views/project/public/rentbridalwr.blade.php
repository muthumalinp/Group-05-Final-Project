<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\Customer\Rent\rentcss.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    @extends('layouts.main')
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


        <div class = "centered-text">
            <h1>Select a Dress</h1>
        </div>

        <div class = "row">
            <div class="col-4">
            <img src="{{ asset('css\Customer\Rent\3P5A0160-copy.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <a href ="{{url('rentbridalwrgl')}}">
            <button type="button" class="btn btn-outline-light"><h3>Please Rent</h3></button>
            </a>
            </div>

            
            <div class="col-4">
            <img src="{{ asset('css/Customer/Rent/7d15f3e549e1a59cd715f2c765df93e4.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">
            <a href ="{{url('rentbridalwrgl1')}}">
            <button type="button" class="btn btn-outline-light"><h3>Please Rent</h3></button>
            </a>
            </div>


            <div class="col-4">
            <img src="{{ asset('css/Customer/Rent/7d15f3e549e1a59cd715f2c765df93e4.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">
            <button type="button" class="btn btn-outline-light"><h3>Please Rent</h3></button>
            </div>




        </div>


        <div class = "row">
            <div class="col-4">
            <img src="{{ asset('css\Customer\Rent\3P5A0160-copy.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <button type="button" class="btn btn-outline-light"><h3>Please Rent</h3></button>
            </div>

            
            <div class="col-4">
            <img src="{{ asset('css/Customer/Rent/7d15f3e549e1a59cd715f2c765df93e4.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">
            <button type="button" class="btn btn-outline-light"><h3>Please Rent</h3></button>
            </div>


            <div class="col-4">
            <img src="{{ asset('css/Customer/Rent/7d15f3e549e1a59cd715f2c765df93e4.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">
            <button type="button" class="btn btn-outline-light"><h3>Please Rent</h3></button>
            </div>




        </div>

        <div class = "row">
            <div class="col-4">
            <img src="{{ asset('css\Customer\Rent\3P5A0160-copy.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <button type="button" class="btn btn-outline-light"><h3>Please Rent</h3></button>
            </div>

            
            <div class="col-4">
            <img src="{{ asset('css/Customer/Rent/7d15f3e549e1a59cd715f2c765df93e4.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">
            <button type="button" class="btn btn-outline-light"><h3>Please Rent</h3></button>
            </div>


            <div class="col-4">
            <img src="{{ asset('css/Customer/Rent/7d15f3e549e1a59cd715f2c765df93e4.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">
            <button type="button" class="btn btn-outline-light"><h3>Please Rent</h3></button>
            </div>




        </div>

        <a href ="{{url('create')}}">
            <button type="button" class="btn btn-outline-light"><h3>Upload Bridal Jewelleries</h3></button>
            </a>
            
            <a href ="{{url('create1')}}">
            <button type="button" class="btn btn-outline-light"><h3>Upload Party Jewelleries</h3></button>
            </a>

            <a href ="{{url('create3')}}">
            <button type="button" class="btn btn-outline-light"><h3>Upload Bridal Wears</h3></button>
            </a>

            <a href ="{{url('create4')}}">
            <button type="button" class="btn btn-outline-light"><h3>Upload Party Wears</h3></button>
            </a>

            </div>

            
        


    </div>

    
</body>
</html>