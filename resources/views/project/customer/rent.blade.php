@extends('project.customer.layouts.main')
@section('title', 'Rent')

<!DOCTYPE html>
<html>
    <head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  
        <style>
            .frame{

                width: 1440px;
                height: 1024px;
                background:linear-gradient(208deg, #FEF6F6 -8.2%, #000 78.59%);
                margin: 0 auto;
                border: 1px solid #252020;

            }
            .box1{
            width: 1440px;
            height: 80px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color:#d9d9d9;
            
            }
            .text1{
                width: 236px;
                height: 69px;
                border-radius: 15px;
                background: black;
                margin-left: 602px;
                margin-right:602px;
                text-align : center;  
            }
            .rect3{
                width: 1401px;
                height: 403px;
                flex-shrink: 0;
                background: #C5C2C2;
                margin-left: 20px;
                margin-right: 19px;
                margin-top: 32px;
                margin-bottom: 56px;
            }
            .btn1{   
                width: 301px;
                height: 60px;
                flex-shrink: 0;
                margin-left: 1138px;
                margin-right: 12px;
                margin-top: 300px;
                margin-bottom: 56px;
            }
            .btn-outline-dark{
                width: 201px;
                height: 60px;
                flex-shrink: 0;
                border-radius: 30px;
                border: 3px solid #836436;
                background: #FEF6F6;
            }
            .rect5{
                width: 320px;
                height: 65px;
                flex-shrink: 0;
                border-radius: 0px 0px 50px 0px;
                background: rgba(0, 0, 0, 0.75);
                margin-left: 11px;
            }
            .line1{
                width: 1px;             
                height: 300px;           
                background-color: #000; 
                position: absolute;     
                left: 50%;             
                transform: translateX(-50%); 
                margin-bottom: 52px;
            }
            .rect4{
                width: 1401px;
                height: 403px;
                background: #C5C2C2;
                margin-left: 20px;
                margin-right: 19px;
            }
            .h2{
                color:#eab54b;
                font-family: Inter;
                font-size: 50px;
                font-style: italic;
                font-weight: 800;
                line-height: normal;
            }
            .rect6{
                width: 320px;
                height: 65px;
                flex-shrink: 0;
                border-radius: 0px 0px 50px 0px;
                background: rgba(0, 0, 0, 0.75);
                margin-left: 11px;
            }
            .line2{
                width: 1px;            
                height: 300px;          
                background-color: #000; 
                position: absolute;     
                left: 50%;              
                transform: translateX(-50%); 
                margin-bottom: 52px;
            }
            .slideshow{
                margin: 0;
                padding: 0;
             }
            .pic1, .pic2{
                display: block;
                position:absolute;
                width: 100%;
                height: 100%;

            }
            .pic1{
                animation: fade1 10s infinite;
            }
            .pic2{
                animation: fade2 10s infinite;
            }

            @keyframes fade1 {
                0%{opacity: 1;}
                25%{opacity: 1;}
                50%{opacity: 1;}
                75%{opacity: 0;}
                100%{opacity: 0;}

            }

            @keyframes fade2 {
                 0%{opacity: 0;}
                25%{opacity:0;}
                50%{opacity: 0;}
                75%{opacity: 1;}
               100%{opacity: 1;}

            }


            .btn2{
                width: 301px;
                height: 60px;
                flex-shrink: 0;
                margin-left: 1090px;
                margin-right: 12px;
                margin-top: 300px;
                margin-bottom: 56px;
            }

        </style>
</head>

<body>
    <div class = "frame">
    
    <div class = "box1">

        <div class = "text1">
        <h1 style="color: #eab54b;font-family: Inter;font-size: 40px;font-style: italic;font-weight: 800;line-height: normal;text-align: center;"> Renting </h1>
        
        </div>
        

    </div>

    <div class = "rect3">
    <div class="row" style = "height:81px;">
    <div class="rect5">
        <h2 style="color:#eab54b; font-family: Inter; font-size: 40px; font-style: italic; font-weight: 800; line-height: normal;">Bridal Wear</h2>
    </div>

    </div>
    <div class ="line2"></div>

    
        <div class="row" style = "margin-left:36px;">
        <div class="col-md-3">
        
            <div class="slideshow">
            <img src="{{ asset('css\Customer\Rent\3P5A0160-copy.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <img src="{{ asset('css/Customer/Rent/7d15f3e549e1a59cd715f2c765df93e4.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">
            </div>

            </div>

            <div class="col-3">
            <img src="{{ asset('css/Customer/Rent/0028c3681fab9a3a3639291e7b6262b6.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <img src="{{ asset('css/Customer/Rent/54277e9720f896c253c761540539dfd8.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">


            </div>

            <div class="col-3">
            <img src="{{ asset('css/Customer/Rent/7e83685cd9cd6fcc1306006c80e2d4eb.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <img src="{{ asset('css/Customer/Rent/479d01ba303b0e3c45a4dbc19ad5bd48.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">


            </div>
            
            <div class="col-3">
            <img src="{{ asset('css/Customer/Rent/b391506b54d762510b520de3e869486e.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <img src="{{ asset('css/Customer/Rent/b07e48062167ced1733d7ae6a17a13d1.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">

            </div>

        </div>

        
   <div class="btn1">
   <img src="{{ asset('css/Customer/Rent/hnda.jpg') }}" alt="Salon" class="hnda1" style="width: 60px;height: 60px; flex-shrink: 0; border-radius: 90px;">
   <button type="button" class="btn btn-outline-dark"><h3>Please Rent</h3></button>
   </div>

 </div>

    <div class = "rect4">

    <div class="row" style = "height:81px;">
    <div class="rect6">
        <h2 style="color:#eab54b; font-family: Inter; font-size: 40px; font-style: italic; font-weight: 800; line-height: normal;">Party Wear</h2>
    </div>

    </div>
    <div class ="line2"></div>
    <div class="row" style = "margin-left:36px;">

    
            <div class="col-md-3">
            <img src="{{ asset('css/Customer/Rent/p1.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <img src="{{ asset('css/Customer/Rent/p2.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">


            </div>

            <div class="col-3">
            <img src="{{ asset('css/Customer/Rent/p3.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <img src="{{ asset('css/Customer/Rent/p4.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">

            </div>

            <div class="col-3">
            <img src="{{ asset('css/Customer/Rent/p5.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <img src="{{ asset('css/Customer/Rent/p6.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">

            </div>
            
            <div class="col-3">
            <img src="{{ asset('css/Customer/Rent/p7.jpg') }}" alt="Salon" class="pic1" style="width: 284px;height: 290px;border-radius: 30px;">
            <img src="{{ asset('css/Customer/Rent/p8.jpg') }}" alt="Salon" class="pic2" style="width: 284px;height: 290px;border-radius: 30px;">

            </div>

    <div class="btn2">
    <img src="{{ asset('css/Customer/Rent/hnda.jpg') }}" alt="Salon" class="hnda1" style="width: 60px;height: 60px; flex-shrink: 0; border-radius: 90px;">
    <button type="button" class="btn btn-outline-dark"><h3>Please Rent</h3></button>
    </div>
   

    

    </div>
    
        </div>

        
</body>

</html>
