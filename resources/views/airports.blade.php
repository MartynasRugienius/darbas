@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">
  <div class="d-grid gap-2 col-2 mx-auto mt-3">
    <a class="btn btn-danger" href="/airports/add" role="button">New airport</a>
  </div>
  <hr>
  <form action="" method="GET"></form>
    <div class="d-grid gap-2 col-6 mx-auto mt-2">
      <select class="form-select" aria-label="Search by country">
        <option selected>Search by country</option>
        <option value="1">Lithuania</option>
      </select>
    </div>
  <div class="d-grid gap-2 col-1 mx-auto mt-2">
    <button class="btn btn-success" type="button">Search</button>
  </div>
  <hr>
  <div class="d-grid gap-2 mx-auto mt-2">
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Country</th>
          <th scope="col">Location</th>
          <th scope="col">Airlines</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($airports as $airport)
        <tr>
          <th scope="row">{{$airport->name}}</th>
          <td>{{$airport->country->name}}</td>
          <td>{{$airport->coords}}</td>
          <td>
            Vilius airlines
          </td>
          <td>
            <a class="btn btn-success" href="/airports/newAirline" role="button">Add airline</a>
            <a class="btn btn-danger" href="/airports/removeAirline" role="button">Remove airline</a>
            <a class="btn btn-warning" href="/airports/edit/{{$airport->id}}" role="button">Edit</a>
            <a class="btn btn-danger" href="/airports/delete/{{$airport->id}}" role="button">Delete</a>
          </td>
        @endforeach
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection