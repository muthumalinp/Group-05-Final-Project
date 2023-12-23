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
                    <h4>Edit Party Wears with images
                    

                    </h4>
                        

                </div>
                    <div class="card-body">

                        <form action="{{url('update-pwrs/' .$product->id)}}" method = "POST" enctype="multipart/form-data">

                            @csrf
                        <div class="form-group mb-3">
                                <label for="">Partywear ID</label>
                                <input type="text" name="id" value ="{{$product->pwrsid}}" class="form-control">
                            </div>

                           

                            <div class="form-group mb3">
                                <label for="">Partywear price</label>
                                <input type="text" name="price" value ="{{$product->pwrsprice}}" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear quantity</label>
                                <input type="text" name="quantity" value ="{{$product->pwrsquantity}}" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Picture 1</label>
                                <input type="file" name="pwrsimg1" value ="{{$product->pwrsimg1}}" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Picture 2</label>
                                <input type="file" name="pwrsimg2" value ="{{$product->pwrsimg2}}" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Picture 3</label>
                                <input type="file" name="pwrsimg3" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Picture 4</label>
                                <input type="file" name="pwrsimg4" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Picture 5</label>
                                <input type="file" name="pwrsimg5" class="form-control">

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
