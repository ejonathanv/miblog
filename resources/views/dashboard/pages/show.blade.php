<x-app-layout title="Detalles de página">
    <div class="flex items-start">
        <div class="w-8/12">
            <div class="flex items-center mb-7">
                <a href="{{ route('pages.edit', $page) }}" class="underline">Editar página</a>
            </div>
            <h1 class="text-2xl font-bold mb-7">{{ $page->title }}</h1>
            {!! $page->body !!}
        </div>
    </div>
</x-app-layout>
