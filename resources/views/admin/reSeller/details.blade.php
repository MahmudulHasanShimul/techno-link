@extends('admin.master')


@section('body')
<div class="row mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Reseller Details</h4>
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
                    <tr>
                        <th>Re-seller Id</th>
                        <td>{{$reSeller->id}}</td>
                    </tr>
                    <tr>
                        <th>Company Name</th>
                        <td>{{$reSeller->company_name}}</td>
                    </tr>
                    <tr>
                        <th>Owner Name</th>
                        <td>{{$reSeller->owner_name}}</td>
                    </tr>
                    <tr>
                        <th>Mobile Number</th>
                        <td>{{$reSeller->mobile}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$reSeller->email}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{$reSeller->address}}</td>
                    </tr>
                    <tr>
                        <th>Owner Image</th>
                        <td>
                            <img src="{{asset($reSeller->image)}}" alt="" height="80px" width="110px">
                        </td>
                    </tr>
                    <tr>
                        <th>Line Activation Date</th>
                        <td>{{$reSeller->activation_date}}</td>
                    </tr>
                    <tr>
                        <th>Active Status</th>
                        <td>
                            @if ($reSeller->status == 1)
                                <p class="card-text" style="color: green; font-weight:bold">Active</span></p>
                            @else
                                <p class="card-text" style="color: red; font-weight:bold">Inactive</p> 
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Action</th>
                        <td style ="width:"80px">
                            <a href="{{route('reselller.edit',['id'=>$reSeller->id])}}" class="btn btn-success" title="Edit">Edit</a>
                            <a href="{{route('reselller.manage')}}" class="btn btn-primary" title="Edit">Back</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

