@extends('layouts.main')
@section('title', 'Rent')

@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h6 class = "alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Upload Bridal Jewelleries with image
                    

                    </h4>
                        

                </div>
                    <div class="card-body">

                        <form action="{{url('add-bjwel')}}" method = "POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group mb-3">
                                <label for="">BridalJwellaryID</label>
                                <input type="text" name="id" class="form-control">
                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellaryprice</label>
                                <input type="text" name="price" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellaryquantity</label>
                                <input type="text" name="quantity" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Picture</label>
                                <input type="file" name="image" class="form-control">

                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Product</button>
                            </div>
                            

                            
                            
                        </form>

                    </div>
            </div>

        </div>
    </div>
</div>



@endsection
