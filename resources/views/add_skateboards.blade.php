@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">

    <form action="/skateboards/add/" method="POST">
        @csrf
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" name="name" type="text" placeholder="Name" value="">
        </div>
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="image" class="form-label">Image</label>
            <input name="image" type="file" class="form-control" id="exampleFormControlFile1">
        </div>
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="name" class="form-label">Description</label>
            <textarea class="form-control" name="description" type="text" placeholder="Description" value=""></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Create</button>
    </form>
</div>
@endsection
