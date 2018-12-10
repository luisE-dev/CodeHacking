@extends('layouts.admin')


@section('content')

<h1>Media</h1>

<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created</th>
        </tr>
    </thead> 
    <tbody>
    @foreach ($photos as $photo)
        <tr>
            <td>{{ $photo->id }}</td>
            <td><img height="50" src="{{ $photo->file }}"></td>
            <td>{{ $photo->created_at ? $photo->created_at : 'No date' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

@stop