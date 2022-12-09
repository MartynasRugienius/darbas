@extends('layouts.default')
@section('content')
<div class="container-fluid mt-3">
  <div class="d-grid gap-2 col-2 mx-auto mt-3">
    <a class="btn btn-danger" href="/skateboards/add" role="button">New skateboard</a>
  </div>
  <hr>
  <div class="py-3">
    <div class="container">
      <div class="row hidden-md-up">
        @foreach ($skateboards as $skateboard)
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $skateboard->image }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $skateboard->name }}</h5>
              <p class="card-text">{{ $skateboard->description }}</p>
              <form action="/skateboards/delete/ {{ $skateboard->id }}" method="POST">
                @csrf
                <a href="/skateboards/edit/{{ $skateboard->id }}" class="btn btn-primary">Update</a>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection
