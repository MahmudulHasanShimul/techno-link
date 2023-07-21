@extends('website.master')

@section('title')
Techo Link - Re-Seller Dashboard
@endsection

@section('content')

<!-- Start Page Title Area -->
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">

        </div>
    </div>
</div>
<!-- End Page Title Area -->
    
<section class="m-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="{{route('reseller.dashboard',['id' => Session::get('reSeller_id')])}}" class="list-group-item list-group-item-action">Dashboard</a>
                    <a href="{{route('client.create')}}" class="list-group-item list-group-item-action">Customer Subscription Form</a>
                    <a href="{{route('client.list')}}" class="list-group-item list-group-item-action">Customers List</a>
                    <a href="{{route('reseller.logout')}}" class="list-group-item list-group-item-action">Logout</a>
                </div>
            </div>

            <div class="col-md-8 mx-auto mt-4">
                <div class="card">
                    <center>
                        <img src="{{asset($reSeller->image)}}" class="mt-4" alt="Re-seller Image" height="300px" width="250px">
                    </center>
                    <div class="card-body text-center">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <td><h2 class="card-title fw-bolder" style="color: #C97817">{{$reSeller->owner_name}}</h2></td>
                            </tr>
                            <tr>
                                <td><h4 class="card-title">{{$reSeller->company_name }}</h4></td>
                            </tr>
                            <tr>
                                <td><p class="card-text">Mobile: {{$reSeller->mobile }}</p></td>
                            </tr>
                            <tr>
                                <td><p class="card-text">Email: {{$reSeller->email  }}</p></td>
                            </tr>
                            <tr>
                                <td><p class="card-text">Address: {{$reSeller->address }}</p></td>
                            </tr>
                            <tr>
                                <td>
                                    @if ($reSeller->status == 1)
                                        <p class="card-text">Active Status : <span style="color: green; font-weight:bold">Active</span></p>
                                    @else
                                        <p class="card-text">Active Status : <span style="color: red; font-weight:bold">Inactive</span></p> 
                                    @endif
                                </td>
                            </tr>
                        </table>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection