<!-- create.blade.php -->
@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        Show Event
    </div>
    <div class="card-body">

        <form>
            <div class="form-group">
                @csrf
                <label for="name">Event Name:</label>
                <p class="form-control-static">{{ $event->name }}</p>
            </div>
            <div class="form-group">
                <label for="slug">Slug :</label>
                <p class="form-control-static">{{ $event->slug }}</p>
            </div>
            <button type="button" class="btn btn-primary">Close</button>
        </form>

    </div>
</div>

@endsection
