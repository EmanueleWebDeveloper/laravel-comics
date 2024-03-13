</header>
<nav>
    <figure>
        <img width="100" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </figure>

    <ul>
        @foreach ($navbar as $element)
            <li>{{ $element['name'] }}</li>
        @endforeach
    </ul>

    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
    </ul>
</nav>
</header>
