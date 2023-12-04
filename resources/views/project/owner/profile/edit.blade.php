<!--
@extends('layouts.owner_nav')

@section('content')
    <h1>Edit Profile</h1>

    <form action="{{ route('profile.update') }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="fname">Name:</label>
            <input type="text" id="fname" name="fname" value="{{ $user->fname }}">
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}">
        </div>

        <div>
            <button type="submit">Save Changes</button>
        </div>
    </form>
@endsection
-->
