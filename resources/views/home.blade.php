{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <section class="section-color">

        <!-- contenitore del jumbotron -->
        <div id="jumbotron"></div>


    </section>

    <section>
        <h1>{{ $title }}</h1>
        <p>
            {{ $text }}
        </p>

    </section>


@endsection


@section('titlePage')
    home
@endsection
