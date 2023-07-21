@extends('admin.master')


@section('body')
 <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Edit Client Information</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="card card-body">
                <form class="col-md-10 mx-auto" action="{{route('client.update',['id'=>$client->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputuname3" class="col-md-6 control-label">Customer Name<span
                                    class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Customer Name" name="name" value="{{$client->name}}" id="name" required data-error="Please enter Customer name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputuname3" class="col-md-6 control-label">Customer User ID<span
                                    class="text-danger">*</span> </label>
                                <input type="text" class="form-control" placeholder="Customer User ID" name="user_id" value="{{$client->user_id}}" id="email" required data-error="Please enter Customer User ID">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputuname3" class="col-md-6 control-label">Customer Phone Number<span
                                    class="text-danger">*</span> </label>                                
                                    <input type="text" class="form-control" name="phone_number" value="{{$client->phone_number}}" placeholder="Phone Number" id="phone_number" required data-error="Please enter Customer number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputuname3" class="col-md-6 control-label">Connection Date</label>
                                <input type="date" class="form-control" name="connection_month" value="{{$client->connection_month}}" placeholder="Connection Date" id="customDate" onchange="customDate()" data-error="Connection Date">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputuname3" class="col-md-6 control-label">Submit NID Front Side</label>
                                <input type="file" class="form-control" name="nid_front_side" accept="image/*" placeholder="Submit NID Front Side" id="msg_subject" data-error="Please enter your subject">
                                <img src="{{asset($client->nid_front_side)}}" alt="" height="50px" width="80px">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputuname3" class="col-md-6 control-label">Submit NID Back Side</label>
                                <input type="file" class="form-control" name="nid_back_side" accept="image/*" placeholder="Submit NID Back Side" id="msg_subject"  data-error="Please enter your subject">
                                <img src="{{asset($client->nid_back_side)}}" alt="" height="50px" width="80px">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputuname3" class="col-md-6 control-label">Package<span
                                    class="text-danger">*</span> </label>                                 
                                    <input type="text" class="form-control" name="package" value="{{$client->package}}" placeholder="Package" id="phone_number" required data-error="Please enter your Package">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputuname3" class="col-md-6 control-label">Package Rate<span
                                    class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="package_rate" value="{{$client->package_rate}}" placeholder="Package Rate" id="customDate" onchange="customDate()" required data-error="Package Rate">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="exampleInputuname3" class="col-md-6 control-label">Customer Address</label>
                                <textarea style="height: 80px" name="address" class="form-control" id="message" placeholder="Customer Address" data-error="Your Address">{{$client->address}}</textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Active Status</label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio" class="me-1" name="status" value="Active" {{$client->status == 'Active' ? 'checked' : ''}}>Active</label>
                                <label><input type="radio" class="me-1" name="status" value="Inactive" {{$client->status == 'Inactive' ? 'checked' : ''}}>Inactive</label>
                            </div>
                        </div>
                
                        <div class="col-lg-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary" onclick="alert('Are you sure to update?')">Update Information</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
