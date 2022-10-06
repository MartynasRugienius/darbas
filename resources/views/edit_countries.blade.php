@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">
    <div class="text-center">
        <h1>Let's edit Lithuania country!</h1>
    </div>
    <hr>
    <form action method="POST">
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" placeholder="{{$country->name}}">
            <label for="name" class="form-label">ISO Code</label>
            <input class="form-control" type="text" placeholder="{{$country->ISO}}">
        </div>
        <button type="submit" class="btn btn-success mt-3">Edit</button>
    </form>
</div>
@endsection