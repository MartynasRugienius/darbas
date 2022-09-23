@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">
    <div class="text-center">
        <h1>Let's create a new airline!</h1>
    </div>
    <hr>
    <form action method="POST">
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" placeholder="Name">
            <select class="form-select" aria-label="Select country">
                <option selected>Select country</option>
                <option value="1">Lithuania</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Create</button>
    </form>
</div>
@endsection