@extends('layouts.structure')
@section('title', 'Add User')
@section('content')
@if(count($users) > 0)
<table class="table table-bordered table-hover mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Member Since</th>
    </tr>
  </thead>
  <tbody>
     @foreach($users  as $key => $row)
    <tr>
      <th>{{$users->firstItem() + $key }}</th>
      <td>{{$row->full_name}}</td>
      <td>{{$row->email}}</td>
      <td>0{{$row->phone}}</td>
      <td>{{$row->created_at->format('d-m-Y')}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$users->links()}}
@else
    <h4 class="mt-3">No Guest User Found!</h4>
@endif       
@endsection