<!-- index.blade.php -->
@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            Events List
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('events.create') }}">Create Event</a>
        </div>
    </div>
</div>

@if(session()->get('success'))

<div class="alert alert-success">
    {{ session()->get('success') }}  
</div><br />

@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Slug</td>
            <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $key => $event)

        <tr>
            <td>{{ ++$i }}</td>
            <td>
                <a href="{{ route('posts.show', $value->id) }}">
                    {{$event->name}}
                </a>
            </td>
            <td>{{$event->slug}}</td>
            <td><a href="{{ route('events.edit', $event->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('events.destroy', $event->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>
{!! $data->links() !!}

@endsection
