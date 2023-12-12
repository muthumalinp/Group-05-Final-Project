@extends('layouts1.owner_forms')
@section('content')
<div class="container">
    <div style="margin-top:100px">
    <div class="row">
        <div class="col-md-10">
                @if(session('flash_message'))
                    <h6 class="alert alert-success">{{session('flash_message')}}</h6>
                @endif
            <div class="card">
                <div class="card-header">
                    <h2>Services</h2>
                    <a href="{{url('/backtodashboard')}}" class="btn btn-secondary float-end">Back</a>
                </div>
                <div class="card-body">
                    <a href="{{url('/servicecreate')}}" class="btn btn-success btn-sm" title="Add New Service">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <br/>
                    <br/>

                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Service</th>
                                <th>Price(Upto)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $item)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $item->service_name}}</td>
                                <td>{{ $item->service_price}}</td>
                                <td>
                                            <a href="{{ url('/project/owner/service/index' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/project/owner/service/edit' . $item->id . '/project/owner/service/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/service' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete service" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
@endsection

