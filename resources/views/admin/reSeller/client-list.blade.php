@extends('admin.master')


@section('body')
<!-- Start Customer list Area -->

<div class="row mt-5  col-md-111 mx-auto mb-5">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><b>{{$reSellers->company_name}}</b> ({{$reSellers->owner_name}}) Clients List</h4>
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
                            <th>Client Name</th>
                            <th>User Id</th>
                            <th>Phone Number</th>
                            <th>Package</th>
                            <th>Package Rate</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                       @foreach ($clients as $client)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$client->name}}</td>
                                <td>{{$client->user_id }}</td>
                                <td>{{$client->phone_number}}</td>
                                <td>{{$client->package}} MB</td>
                                <td>{{$client->package_rate}}</td>

                                @php
                                    $total = $total + $client->package_rate;
                                @endphp

                                <td>
                                    @if ($client->status == 'Active')
                                        <p class="card-text" style="color: green; font-weight:bold">Active</span></p>
                                    @else
                                        <p class="card-text" style="color: red; font-weight:bold">Inactive</p> 
                                    @endif
                                </td>

                                <td>
                                    <a href="{{route('resellerWiseClient.details',['id'=>$client->id])}}" class="btn btn-primary" title="Details">
                                        Details
                                    </a>
                                </td>
                            </tr>
                       @endforeach
                       <tr>
                            <th><b>TOTAL</b></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><b>{{$total}}</b></th>
                            <?php
                                Session::put('total_amount', $total);
                            ?>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Start Customer list Area -->
@endsection

