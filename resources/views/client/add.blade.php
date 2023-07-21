@extends('website.master')

@section('title')
Techno Link | Customer Form
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

<!-- Start Customer form Area -->

<section class="contact-area ptb-100">
    <div class="container">
        <section class="mb-4">
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
        
                </div>
            </div>
        </section>
        <div class="section-title">
            <h2>Drop Customer's Information Here</h2>
        </div>

        @if (Session::get('msg'))
            <div class="col-md-10 mx-auto alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{Session::get('msg')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            
        <form class="col-md-10 mx-auto" action="{{route('client.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputuname3" class="col-md-6 control-label">Customer Name<span
                            class="text-danger">*</span> </label>
                        <input type="text" class="form-control" placeholder="Customer Name" name="name" value="{{old('name')}}" id="name" required data-error="Please enter Customer name">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputuname3" class="col-md-6 control-label">Customer User ID<span
                            class="text-danger">*</span> </label>
                        <input type="text" class="form-control" placeholder="Customer User ID" name="user_id" value="{{old('user_id')}}" id="email" required data-error="Please enter Customer User ID">
                        @error('user_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputuname3" class="col-md-6 control-label">Customer Phone Number<span
                            class="text-danger">*</span> </label>                                 
                            <input type="text" class="form-control" name="phone_number" value="{{old('phone_number')}}" placeholder="Phone Number" id="phone_number" required data-error="Please enter your number">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputuname3" class="col-md-6 control-label">Connection Date<span
                            class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="connection_month" value="{{old('connection_month')}}" placeholder="Connection Date" id="customDate" onchange="customDate()" data-error="Connection Date">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputuname3" class="col-md-6 control-label">Package<span
                            class="text-danger">*</span> </label>                                 
                            <input type="text" class="form-control" name="package" value="{{old('package')}}" placeholder="Package" id="phone_number" required data-error="Please enter your Package">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputuname3" class="col-md-6 control-label">Package Rate<span
                            class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="package_rate" value="{{old('package_rate')}}" placeholder="Package Rate" id="customDate" onchange="customDate()" required data-error="Package Rate">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputuname3" class="col-md-6 control-label">Submit NID Front Side<span
                            class="text-danger">*</span></label>
                        <input type="file" class="form-control" name="nid_front_side" accept="image/*" placeholder="Submit NID Front Side" id="msg_subject" data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <label for="exampleInputuname3" class="col-md-6 control-label">Submit NID Back Side</label>
                        <input type="file" class="form-control" name="nid_back_side" accept="image/*" placeholder="Submit NID Back Side" id="msg_subject" data-error="Please enter your subject">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <label for="exampleInputuname3" class="col-md-6 control-label">Customer Address</label>
                        <textarea style="height: 80px" name="address" class="form-control" id="message" placeholder="Customer Address" data-error="Your Address">{{old('address')}}</textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Create New Customer</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- Start Customer form Area -->
@endsection

