<x-app-layout title="Detalles de publicación">
    <div class="flex items-start space-x-16">
        <div class="w-4/12">
            <img src="{{ $post->cover_img }}" class="w-full h-auto mb-7 shadow-lg" alt="">
        </div>
        <div class="w-8/12">
            <div class="flex items-center mb-7">
                <p>{{ $post->created_at->format('d M, Y') }}</p>
                <a href="{{ route('posts.edit', $post) }}" class="ml-auto underline">Editar publicación</a>
            </div>
            <h1 class="text-2xl font-bold mb-7">{{ $post->title }}</h1>
            <p class="text-lg mb-7">{{ $post->description }}</p>
            {!! $post->body !!}
        </div>
    </div>
</x-app-layout>
