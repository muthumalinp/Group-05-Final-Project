<!--
@extends('layouts.owner_nav')

@section('content')
    <h1>User Profile</h1>

    <div>
        <p>Name: {{ $user->fname }}</p>
        <p>Email: {{ $user->email }}</p>
        
        <a href="{{ route('profile.edit') }}">Edit Profile</a>
    </div>
@endsection
-->