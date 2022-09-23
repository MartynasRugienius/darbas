@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">
    <div class="text-center">
        <h1>Let's remove an airline from Kaunas airport airport!</h1>
    </div>
    <hr>
    <form action method="POST">
        <div class="d-grid gap-2 mx-auto mt-2">
            <select class="form-select" aria-label="Select country">
                <option selected>Select airline</option>
                <option value="1">Vilius airlines</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Unlink</button>
    </form>
@endsection