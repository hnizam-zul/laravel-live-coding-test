<!-- edit.blade.php -->
@extends('layout')

@section('content')

<div class="card">
    <div class="card-header">
        Edit Event
    </div>
    <div class="card-body">

        @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />

        @endif

        <form method="post" action="{{ route('events.update', $event->id ) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Event Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $event->name }}"/>
            </div>
            <div class="form-group">
                <label for="slug">Slug :</label>
                <input type="text" class="form-control" name="slug" value="{{ $event->slug }}"/>
            </div>
            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>

    </div>
</div>

@endsection
