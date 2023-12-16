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
                    <h4>Upload Party Jewelleries with images


                    </h4>


                </div>
                    <div class="card-body">

                        <form action="{{url('add-pjwel')}}" method = "POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group mb-3">
                                <label for="">Jwellary ID</label>
                                <input type="text" name="id" class="form-control">
                            </div>

                            <div class="form-group mb3">
                                <label for="">Jwellary Title</label>
                                <input type="text" name="pjwtitle" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Jwellary Description</label>
                                <input type="text" name="pjwdesc" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Jwellary price</label>
                                <input type="text" name="price" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Jwellary quantity</label>
                                <input type="text" name="quantity" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Jwellary Picture 1</label>
                                <input type="file" name="pjwimg1" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Jwellary Picture2</label>
                                <input type="file" name="pjwimg2" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Picture 3</label>
                                <input type="file" name="pjwimg3" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Picture 4</label>
                                <input type="file" name="pjwimg4" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">BridalJwellary Picture 5</label>
                                <input type="file" name="pjwimg5" class="form-control">

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