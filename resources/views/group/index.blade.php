@extends('layouts.app')

@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Username</th>
      <th scope="col">Leader</th>
      <th scope="col">Member1</th>
      <th scope="col">Member2</th>
      <th scope="col">Payment_status</th>
      <th scope="col">Payment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($groups as $g)

    <tr>

        <td>{{$loop->iteration}}</td>
        <td>{{$g->name}}</td>
        <td>{{$g->leader->name}}</td>
        <td>{{$g->member1->name}}</td>
        <td>{{$g->member2->name}}</td>
        <td>{{$g->payment_status}}</td>
        <td>{{$g->payment}}</td>
        <td><a href="{{route('group.show', ['id'=> $g->id])}}">Show</a></td>
    
    </tr>

    @endforeach

  </tbody>
</table>


<a href="{{route('group.create')}}" class="btn btn-primary">Add Group</a>

@endsection