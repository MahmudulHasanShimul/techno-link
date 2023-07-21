@extends('admin.master')


@section('body')
<div class="row mt-3">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Client List</h4>
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
                <div class="ps-4">
                    <a href="{{route('client.export')}}" class="btn btn-success">Download Clients List</a>
                </div>
                <table id="myTable" class="table table-striped border">
                    <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Re-seller Name</th>
                            <th>User Id</th>
                            <th>Phone Number</th>
                            <th>Package</th>
                            <th>Package Rate</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($clients as $client)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$client->reSeller_owner_name}}</td>
                                <td>{{$client->user_id }}</td>
                                <td>{{$client->phone_number}}</td>
                                <td>{{$client->package}} MB</td>
                                <td>{{$client->package_rate}}</td>
                                <td>
                                    @if ($client->status == 'Active')
                                        <p class="card-text" style="color: green; font-weight:bold">Active</span></p>
                                    @else
                                        <p class="card-text" style="color: red; font-weight:bold">Inactive</p> 
                                    @endif
                                </td>

                                <td style="width: 130px">
                                    <a href="{{route('client.details',['id'=>$client->id])}}" class="btn btn-info" title="Details">
                                        <i class="fa-solid fa-circle-info"></i>
                                    </a>

                                    <a href="{{route('client.edit',['id'=>$client->id])}}" class="btn btn-success">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{route('client.delete',['id'=>$client->id])}}" class="btn btn-danger" onclick="alert('Are you sure to delete?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
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

