@extends('admin.master')


@section('body')
    <div class="row">
        <div class="col-lg-12 mt-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Edit ReSeller Information</h4>
                    <hr>
                    @if (Session::get('msg'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('msg') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form class="form-horizontal p-t-20" action="{{route('reselller.update',['id' => $reSeller->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Company Name<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="company_name" id="exampleInputuname3" value="{{$reSeller->company_name}}" placeholder="Company Name">
                                @error('company_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Owner Name<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="owner_name" id="exampleInputuname3" value="{{$reSeller->owner_name}}" placeholder="Owner Name">
                                @error('owner_name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Mobile Number<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="mobile" id="exampleInputuname3" value="{{$reSeller->mobile}}" placeholder="Mobile Number">
                                @error('mobile')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Email<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="exampleInputuname3" value="{{$reSeller->email}}" placeholder="Email">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Password<span
                                    class="text-danger">*</span> </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="exampleInputuname3" value="{{$reSeller->password}}" placeholder="Password">
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="address" id="exampleInputuname3"  placeholder="Address">{{$reSeller->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Owner Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="input-file-now" class="dropify" value="{{('image')}}" accept="image/*">
                                <img src="{{asset($reSeller->image)}}" alt="" height="50px" width="70px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Line Activation Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="activation_date" id="exampleInputuname3" value="{{$reSeller->activation_date}}" placeholder="Line Activation Date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-3 control-label">Active Status</label>
                            <div class="col-sm-9">
                                <label class="me-3"><input type="radio" class="me-1" name="status" value="1" {{$reSeller->status == 1 ? 'Checked' : ''}}>Active</label>
                                <label><input type="radio" class="me-1" name="status" value="2" {{$reSeller->status == 2 ? 'Checked' : ''}}>Inactive</label>
                            </div>
                        </div>
                        <div class="form-group row m-b-0">
                            <div class="offset-sm-3 col-sm-9">
                                <button type="submit" class="btn btn-success waves-effect waves-light text-white">Update ReSelller</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
