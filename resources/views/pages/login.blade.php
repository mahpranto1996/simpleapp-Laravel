@extends('layouts.structure')
@section('title', 'Add User')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="row mt-5">
            <form action="{{url('/auth')}}" method="post"  style="border: 1px solid deepskyblue; padding: 20px 20px;">
                {{csrf_field()}}
                @if (Session::has('msg'))
                <div class="alert alert-danger mt-3" id="msg" role="alert">
                {{ Session::get('msg') }}
                </div>
                @endif
                <h4>Login</h4>
                <label>Phone</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">+880</span>
                  </div>
                  <input type="text" class="form-control" name="phone" value="{{old('phone')}}" placeholder="16XXXXXXXX" aria-describedby="basic-addon1">
                </div>
                @error('phone')
                    <p class="text-danger errorMessage">{{ $message }}</p>
                @enderror
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                @error('password')
                    <p class="text-danger errorMessage">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-sm btn-success">Login</button>
            </form>
        </div>
    </div>           
@endsection