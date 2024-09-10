<header class="container">
    <!-- logo -->
    <div id="box-image">
        <a href="#">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" class="">
        </a>
    </div>
    <!-- inserimento dinamico in DOM del menu di navigazione -->
    <nav>
        <ul>
            <li>
                <a href="{{ route('home') }}" class="">Home</a>
                <a href="{{ route('comics') }}" class="">Comics</a>
                <a href="{{ route('contacts') }}" class="">Contatti</a>
            </li>

        </ul>
    </nav>

</header>
