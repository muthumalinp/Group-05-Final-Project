@extends('layouts1.main')
@extends('layouts1.layouts_login')
@section('title', 'Login')
@section('content')

<div class="container">
    <div class="mt-5">
        @if($errors->any())
        <div class="col-12">
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
        @endif

        @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
    </div>
    <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
        @csrf
        <h2>Log In</h2>
        <p>Don't have an account yet? <a href="/Register">Sign Up</a></p>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" id="m" /><br />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" id="m" /><br />
        </div>

        <input type="hidden" name="user_type" value="customer">
        
        <input type="submit" class="btn btn-success" value="Log In" /><br />

        <!-- <div class="form-check">
            <input type="checkbox" class="form-check-input" checked="checked" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>

        <button type="button" class="btn btn-danger">Cancel</button>
        <a href="#" class="btn btn-link">Forgot password?</a> -->
</div>
</div>
</form>
</div>

@endsection
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <Use the correct Bootstrap version (check for the latest version) -->

<!-- <style>
        /* Your custom styles here */
        #a {
            width: 350px;
            height: 350px;
            flex-shrink: 0;
            border-radius: 350px;
            background: #F9DB9F;
            margin:30%
        }

        #b {
            padding-left:20%;
            padding-top: 20%;
            display: flex;
            width: 245px;
            height: 284px;
            flex-direction: column;
            justify-content: center;
            align-items: center; /* Center horizontally */
            flex-shrink: 0;
            color: #000;
            text-align: center;
            font-family: Inria Serif;
            font-size: 36px;
            font-style: italic;
            font-weight: 700;
            line-height: normal;
        }

        #l {
            width: 600px;
            height: 500px;
            flex-shrink: 0;
            background: #E1A954;
            margin: 10px;
            padding: 15px;
        }

        #m {
            width: 500px;
            height: 50px;
            flex-shrink: 0;
            background: #F7E19F;
            margin:auto;
        }
    </style> -->