@extends('layouts.app')

<!-- Index -->
@section('content')
    <div class="container-fluid">
        <a href="{{ route('videogames.create') }}" class="btn btn-primary mb-3">Create</a>
        <!-- Table -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Genre</th>
                    <th>Functions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($videogames_list as $videogame)
                    <tr class="align-middle">
                        <td>{{ $videogame->id }}</td>
                        <td>{{ $videogame->name }}</td>
                        <td>{{ $videogame->genre }}</td>
                        <td>
                            <a href="{{ route('videogames.show', $videogame) }}" class="btn btn-success">Show</a>
                            <a href="{{ route('videogames.edit', $videogame) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('videogames.delete', $videogame) }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div>Not Available</div>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
