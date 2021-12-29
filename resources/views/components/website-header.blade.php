<header class="pt-12 pb-0 md:py-16">
    <div class="w-10/12 mx-auto flex flex-col space-y-5 md:space-y-0 md:flex-row items-start md:items-center">
        <div>
            <a href="{{ route('home') }}" class="text-xl md:text-3xl font-bold">Jonathan Velazquez</a>
        </div>

        <nav class="ml-0 md:ml-auto text-base md:text-xl flex items-center space-x-5 md:space-x-12">
            <a class="hover:underline @if(request()->routeIs('home')) underline font-bold @endif" href="{{ route('home') }}">Inicio</a>
            <a class="hover:underline @if(request()->routeIs('about')) underline font-bold @endif" href="{{ route('about') }}">Acerca de mí</a>
            <a class="hover:underline @if(request()->routeIs('blog') || request()->routeIs('post')) underline font-bold @endif" href="{{ route('blog') }}">
                Blog
            </a>
        </nav>
    </div>
</header>