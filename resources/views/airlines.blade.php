@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">
    <div class="text-center">
        <a class="btn btn-danger" href="airlines/new" role="button">New airline</a>
    </div>
    <hr>
    <div class="d-grid gap-2 mx-auto mt-2">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Vilius airlines</th>
                    <td>Lithuania</td>
                    <td>
                        <a class="btn btn-warning" href="airlines/edit" role="button">Edit</a>
                        <a class="btn btn-danger" href="airlines/delete" role="button">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection