@extends("layout.app")

@section("content")
    <section class="container py-4">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold text-center"> {{  $videogame["name"] }} Show Page </h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 card m-3">
                <ul>
                    <li>
                        Nome: {{ $videogame["name"] }}
                    </li>
                    <li>
                        Genere: {{ $videogame["genre"] }}
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
