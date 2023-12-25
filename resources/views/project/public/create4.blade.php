@extends('layouts1.main')
@section('title', 'Rent')

@extends('layouts1.app')


@section('content')

<div class="container" style = font-size: 50px;>
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h6 class = "alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Upload Party Wears with images
                    

                    </h4>
                        

                </div>
                    <div class="card-body">

                        <form action="{{url('add-pwr')}}" method = "POST" enctype="multipart/form-data">

                            @csrf
                        <div class="form-group mb-3">
                                <label for="">Partywear ID</label>
                                <input type="text" name="id" class="form-control">
                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Title</label>
                                <input type="text" name="title" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Description</label>
                                <input type="text" name="desc" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Price</label>
                                <input type="text" name="price" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear quantity</label>
                                <input type="text" name="quantity" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Picture 1</label>
                                <input type="file" name="pwrsimg1" class="form-control">

                            </div>

                            <div class="form-group mb3">
                                <label for="">Partywear Picture 2</label>
                                <input type="file" name="pwrsimg2" class="form-control">

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

                        <a href="{{url('pwindex')}}">
                        <button style = "background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s;" onmouseover="this.style.backgroundColor='#004080'" onmouseout="this.style.backgroundColor='blue'">View Added Products</button>
                        </a>

</div>



@endsection
