@extends('admin.master')


@section('body')
<div class="row mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Resellers List</h4>
            <hr>

            @if (Session::get('noti'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('noti') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


            @if (Session::get('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('msg') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-striped border table-hover">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Owner Name</th>
                            <th>Mobile Number</th>
                            <th>Active Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($reSellers as $reSeller)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$reSeller->owner_name}}</td>
                                <td>{{$reSeller->mobile}}</td>
                                <td>
                                    @if ($reSeller->status == 1)
                                        <p class="card-text" style="color: green; font-weight:bold">Active</span></p>
                                    @else
                                        <p class="card-text" style="color: red; font-weight:bold">Inactive</p> 
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('reselller.details',['id'=>$reSeller->id])}}" class="btn btn-info"> <i class="fa-solid fa-circle-info"></i> </a>
                                    <a href="{{route('reselller.edit',['id'=>$reSeller->id])}}" class="btn btn-success"> <i class="fa fa-edit"></i> </a>
                                    <a href="{{route('reselller.delete',['id'=>$reSeller->id])}}" class="btn btn-danger"> <i class="fa fa-trash"> </i> </a>
                                </td>
                            </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

