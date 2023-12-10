@extends('layouts.owner_sidebar')
<html>
    <head>
        <meta charset="utf-8">
        <title>Salon Yaraa DashBoard Page</title>
        <!--<link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">-->
        <link rel="stylesheet" href="{{ asset('css/owner/layouts.css') }}">
        <link rel="stylesheet" href="{{ asset('css/Owner/owner.css') }}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <script src="https://kit.fontawesome.com/cff257cc3a.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('css/owner/calendar.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" ref="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
        
        <style>
        /* Add this CSS to create a smooth transition effect for numbers */
        .fc-day-number {
            transition: transform 0.3s ease-out; /* Smooth transition effect */
        }

        /* Move away on hover */
        .fc-day-number:hover {
            transform: translateX(10px); /* Adjust the horizontal distance as needed */
        }
    </style>
    </head>

    
    <body>
    @section('cont')

        

        <h2>Dashboard</h2>
        <div class="cards">
           
            <div class="card">
                            <div class="content rounded col-md-12">
                                 <div class="border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        

                                        <h3 style="color:#633030; font-weight:bold">PROFILE</h3>
                                        <img class="rounded-circle mt-0" width="175px" src="css/Owner/owner_profile_image.jpeg">
                                        <span> ...</span>
                                        <span class="font-weight-bold">Yaraa De Silva</span>
                                        <span class="text-black-50">salonyaraa@gmail.com</span>
                                        <span class="text-black-50">+94 702 016 166</span>
                                        <span class="text-black-50">No.45, Highlevel Road, Maharagama</span>
                                        <span> </span>
                                    </div>
                                 </div>
                           </div>
            </div>

            

            <div class="card row">
                <div class="topMainTail clearfix">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="BtnLink_Left">
                                    <ul>
                                        <li><a href="{{ route('project.owner.Employee.index') }}">Employee</a></li>
                                    </ul>
                                </div>
                                <div class="BtnLink_Left">
                                    <ul>
                                        <li><a href="{{ route('project.owner.service.index') }}">Service</a></li>   
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="BtnLink_Right">
                                    <ul>
                                        <li> <a href="{{url('Index1')}}">Products</a></li>  
                                    </ul>
                                </div>
                                <div class="BtnLink_Right">
                                    <ul>
                                        <li><a href="{{url('/rentitems')}}">Rent Product</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <!--<div class="panel panel-primary">-->
                    <div class="panel-heading">
                        <h5>Calendar</h5>
                    </div>
                    <div class="panel-body" >
                        <div id='calendar'></div>
                    </div>
                <!--</div>-->
                <!--<script>
                    $(document).ready(function () {
                        var calendar = $('#calendar').fullCalendar({
                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'month,basicWeek,basicDay'
                            },
                            navLinks: true,
                            editable: true,
                            events: "getevent",           
                            displayEventTime: false,
                            eventRender: function (event, element, view) {
                                if (event.allDay === 'true') {
                                    event.allDay = true;
                                } else {
                                    event.allDay = false;
                                }
                            },
                            selectable: true,
                            selectHelper: true,
                            select: function (start, end, allDay) {
                                var title = prompt('Event Title:');
                                if (title) {
                                    var start = moment(start, 'DD.MM.YYYY').format('YYYY-MM-DD');
                                    var end = moment(end, 'DD.MM.YYYY').format('YYYY-MM-DD');

                                    $.ajax({
                                        url: 'createevent',
                                        data: 'title=' + title + '&start=' + start + '&end=' + end +'&_token=' +"{{ csrf_token() }}",
                                        type: "post",
                                        success: function (data) {
                                            alert("Added Successfully");
                                        }
                                    });
                                    calendar.fullCalendar('renderEvent',
                                    {
                                        title: title,
                                        start: start,
                                        end: end,
                                        allDay: allDay
                                    },
                                    true
                                    );
                                }
                                calendar.fullCalendar('unselect');
                            },
                            eventClick: function (event) {

                                var deleteMsg = confirm("Do you really want to delete?");
                                if (deleteMsg) {
                                    $.ajax({
                                        type: "POST",
                                        url: "delete",
                                        data: "&id=" + event.id+'&_token=' +"{{ csrf_token() }}",
                                        success: function (response) {
                                            if(parseInt(response) > 0) {
                                                $('#calendar').fullCalendar('removeEvents', event.id);
                                                alert("Deleted Successfully");
                                            }
                                        }
                                    });
                                }
                            }
                        });
                    });
                </script>-->
            </div>

            <div class="card">
                        <div>
                            <h2>To Do List</h2>
                            
                        </div>

                        <div class="d-flex mb-2">
                            <input  type="text" id="input-box" placeholder="Enter task">
                            <button type="button" class="btn btn-primary ms-2" onclick="addTask()">Add</button>
                        </div>
                        
                        <ul id="taskList">
                         <!--   <li>Task 1</li>
                            <li>Task 2</li>
                            <li>Task 3</li>
                        </ul>
                        -->      
            </div>


        <script src="/js/Owner/owner.js"></script>
    @endsection
        
    </body>
</html>





