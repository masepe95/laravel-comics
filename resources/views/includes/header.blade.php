<header>
    <div class="container">
        <nav class="navbar">
            <a href="#">
                <img src="{{ asset('images/dc-logo.png') }}" alt="DC Comics Logo">
            </a>
            <ul>
                <li>Marco</li>
                @foreach ($links as $link)
                    <li>
                        <a href="{{ $link['url'] }}">
                            {{ $link['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>