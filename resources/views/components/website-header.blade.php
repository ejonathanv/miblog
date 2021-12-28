<header class="py-16">
    <div class="w-10/12 mx-auto flex items-center">
        <div>
            <a href="{{ route('home') }}" class="text-3xl font-bold">Jonathan Velazquez</a>
        </div>

        <nav class="ml-auto text-xl flex items-center space-x-12">
            <a class="hover:underline @if(request()->routeIs('home')) underline font-bold @endif" href="{{ route('home') }}">Inicio</a>
            <a class="hover:underline @if(request()->routeIs('about')) underline font-bold @endif" href="{{ route('about') }}">Acerca de mí</a>
            <a class="hover:underline @if(request()->routeIs('blog') || request()->routeIs('post')) underline font-bold @endif" href="{{ route('blog') }}">
                Blog
            </a>
        </nav>
    </div>
</header>