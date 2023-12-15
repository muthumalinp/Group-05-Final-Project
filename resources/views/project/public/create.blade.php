@extends('layouts1.main')
@section('title', 'Rent')

@extends('layouts1.app')


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
                                <label for="">BridalJwellary ID</label>
                                <input type="text" name="id" class="form-control">
                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Title</label>
                                <input type="text" name="bjwtitle" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Description</label>
                                <input type="text" name="bjwdesc" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary price</label>
                                <input type="text" name="price" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary quantity</label>
                                <input type="text" name="quantity" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Picture 1</label>
                                <input type="file" name="bjwimg1" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Picture 2</label>
                                <input type="file" name="bjwimg2" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Picture 3</label>
                                <input type="file" name="bjwimg3" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Picture 4</label>
                                <input type="file" name="bjwimg4" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Picture 5</label>
                                <input type="file" name="bjwimg5" class="form-control">

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
