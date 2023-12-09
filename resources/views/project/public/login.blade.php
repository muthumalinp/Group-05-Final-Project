@extends('layouts.main')
@extends('layouts.layouts_login')
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
            <input type="password" name="password" class="form-control" id="m" />
            <span toggle="#password" class="eye toggle-password"></span>
        </div>

        <input type="hidden" name="user_type" value="customer">
        
        <input type="submit" class="btn btn-success" value="Log In" /><br />
    </form>
</div>

<script>
    document.querySelector('.toggle-password').addEventListener('click', function () {
        const passwordInput = document.querySelector(this.getAttribute('toggle'));
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('active');
    });
</script>

@endsection
