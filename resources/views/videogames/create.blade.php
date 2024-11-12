@extends('layouts.app')

@section('content')
    <section class="container py-4">
        <div class="row">
            <form class="col m-3" method="POST">
                @csrf
                <h1 class="mb-3">
                    Aggiungi un nuovo videogame:
                </h1>
                <div class="mb-3">
                    <label for="projet-name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="project-name" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="projet-name" class="form-label">Genre:</label>
                    <input type="text" class="form-control" id="project-name" name="name" value="{{ old('genre') }}">
                </div>
                <div class="mb-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-success me-3">
                        Aggiungi nuovo videogame
                    </button>
                    <button type="reset" class="btn btn-danger me-3">
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection
