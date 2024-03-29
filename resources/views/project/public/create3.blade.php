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
                    <h4>Upload Bridal Wears with images
                    

                    </h4>
                        

                </div>
                    <div class="card-body">

                        <form action="{{url('add-bdlwr')}}" method = "POST" enctype="multipart/form-data">

                            @csrf
                        <div class="form-group mb-3">
                                <label for="">Bridalwear ID</label>
                                <input type="text" name="id" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Bridalwear Title</label>
                                <input type="text" name="bdlwrstitle" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Bridalwear Description</label>
                                <input type="text" name="bdlwrsdesc" class="form-control">
                            </div>

                            <div class="form-group mb3">
                                <label for="">Bridalwear price</label>
                                <input type="text" name="price" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Bridalwear quantity</label>
                                <input type="text" name="quantity" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Bridalwear Picture 1</label>
                                <input type="file" name="bdlwrsimg1" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Bridalwear Picture2</label>
                                <input type="file" name="bdlwrsimg2" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Bridalwear Picture 3</label>
                                <input type="file" name="bdlwrsimg3" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Bridalwear Picture 4</label>
                                <input type="file" name="bdlwrsimg4" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Bridalwear Picture 5</label>
                                <input type="file" name="bdlwrsimg5" class="form-control">

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
