@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">
    <div class="text-center">
        <h1>Let's create a new airport!</h1>
    </div>
    <hr>
    <form action method="POST">
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="name" class="form-label">Name</label>
            <input class="form-control" type="text" placeholder="Name">
        </div>
        <div class="d-grid gap-2 mx-auto mt-2">
            <select class="form-select" aria-label="Select country">
                <option selected>Select country</option>
                <option value="1">Lithuania</option>
            </select>
        </div>
        <div class="d-grid gap-2 mx-auto mt-2">
            <label for="map" class="form-label">Map</label>
            <input class="form-control" type="text" style="background-color: rgb(231, 231, 231)" readonly>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d36698.85251817294!2d23.93765535!3d54.90856874999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2slt!4v1663948509708!5m2!1sen!2slt" style="width:100%;height:500px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <button type="submit" class="btn btn-success mt-3">Create</button>
    </form>
</div>
@endsection