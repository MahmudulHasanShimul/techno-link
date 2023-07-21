@extends('admin.master')


@section('body')
<!-- Start Customer details Area -->

<div class="row mt-5  col-md-10 mx-auto mb-5">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Client Deatils</h4>
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
                <table id="myTable" class="table table-striped border">
                    <tr>
                        <th>Re-seller Name</th>
                        <td>{{$client->reSeller_owner_name}}</td>
                    </tr>
                    <tr>
                        <th>Client Name</th>
                        <td>{{$client->name}}</td>
                    </tr>
                    <tr>
                        <th>User Id</th>
                        <td>{{$client->user_id }}</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>{{$client->phone_number}}</td>
                    </tr>
                    <tr>
                        <th>Date of Connection</th>
                        <td>{{$client->connection_month}}</td>
                    </tr>
                    <tr>
                        <th>Package</th>
                        <td>{{$client->package}} MB</td>
                    </tr>
                    <tr>
                        <th>Package Rate</th>
                        <td>{{$client->package_rate}}</td>
                    </tr>
                    
                    <tr>
                        <th>Address</th>
                        <td>{{$client->address}}</td>
                    </tr>

                    <tr>
                        <th>NID Front Side</th>
                        <td>
                            <img src="{{asset($client->nid_front_side)}}" alt="Not Uploaded" height="50px" width="80px">
                        </td>
                    </tr>
                    <tr>
                        <th>NID Back Side</th>
                        <td>
                            <img src="{{asset($client->nid_back_side)}}" alt="Not Uploaded" height="50px" width="80px">
                        </td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>
                            @if ($client->status == 'Active')
                                <p class="card-text" style="color: green; font-weight:bold">Active</span></p>
                            @else
                                <p class="card-text" style="color: red; font-weight:bold">Inactive</p> 
                            @endif
                        </td>
                    </tr>
                   
                    <tr>
                        <th>Action</th>
                        <td style ="width:"80px">
                            <a href="{{route('resellerWiseClient.list',['id'=>$client->reSeller_id])}}" class="btn btn-primary m-1" title="Back">Back</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Start Customer details Area -->
@endsection

