{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
        <section class="section-color">

        <!-- contenitore del jumbotron -->
        <div id="jumbotron"></div>

        <!-- contenitore delle cards -->
        <div id="content" class="container">

            <div class="box-blue">
                <h3>CURRENT SERIES</h3>
            </div>

            <div id="box-cards">
                <!-- inserimento dinamico in DOM delle cards -->
                <div class="card-items">
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
                    <h3>item</h3>
                    <h4>item</h4>
                    <h4>item</h4>
                </div>

                <div class="card-items">
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
                    <h3>item</h3>
                    <h4>item</h4>
                    <h4>item</h4>
                </div>

                <div class="card-items">
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
                    <h3>item</h3>
                    <h4>item</h4>
                    <h4>item</h4>
                </div>

                <div class="card-items">
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
                    <h3>item</h3>
                    <h4>item</h4>
                    <h4>item</h4>
                </div>

                <div class="card-items">
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
                    <h3>item</h3>
                    <h4>item</h4>
                    <h4>item</h4>
                </div>

                <div class="card-items">
                    <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="">
                    <h3>item</h3>
                    <h4>item</h4>
                    <h4>item</h4>
                </div>

            </div>

            <!-- pulsante load more -->
             <div id="btn-load">
                <button class="box-blue">
                    <span>LOAD MORE</span>
                </button>
             </div>

        </div>


    </section>


@endsection


@section('titlePage')
    home
@endsection
