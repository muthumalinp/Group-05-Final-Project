@extends('layouts.owner_nav') 

@section('content')
    <h1>Salary Management Page</h1>

    <div class="employee-list">
        @foreach ($employees as $employee)
            <div class="employee-card">
                <img src="{{ asset('path/to/employee/photos/' . $employee->photo) }}" alt="{{ $employee->name }}">
                <p>{{ $employee->name }}</p>
            </div>
        @endforeach
    </div>
@endsection


@push('css')
<style>

    .employee-list {
        display: flex;
        flex-wrap: wrap;
    }

    .employee-card {
        margin: 10px;
        text-align: center;
    }

    .employee-card img {
        width: 100px; 
        height: 100px; 
        border-radius: 50%;
        object-fit: cover;
    }

    .employee-card p {
        margin-top: 5px;
    }

</style>
@endpush