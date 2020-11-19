@extends('layouts.structure')
@section('title', 'Add User')
@section('content')
@if (Session::has('msg'))
<div class="alert alert-success mt-3" id="msg" role="alert">
{{ Session::get('msg') }}
</div>
@endif
<div class="row d-flex justify-content-center mt-5">
    <div class="col-md-3">
        <h4>Add User</h4>
            <form action="{{url('/saveUser')}}" class="justify-content-center" method="post">
            	{{csrf_field()}}
                <div class="form-group">
                    <label class="sr-only">Full Name</label>
                	<input type="text" class="form-control" name="full_name" value="{{old('full_name')}}" placeholder="Full Name">
                	@error('full_name')
                        <p class="text-danger errorMessage">{{ $message }}</p>
                	@enderror
                 </div>
                <div class="form-group">
                	<label class="sr-only">Email</label>
                	<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="example@gmail.com">
                </div>
                @error('email')
                    <p class="text-danger errorMessage">{{ $message }}</p>
                @enderror
                <label class="sr-only">Phone</label>
                <div class="input-group mb-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="basic-addon1">+880</span>
				  </div>
				  <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="16XXXXXXXX" aria-describedby="basic-addon1">
				</div>
				@error('phone')
                    <p class="text-danger errorMessage">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-success btn-sm pr-3 pl-3">Save</button>
            </form>
    </div>
</div>
@endsection