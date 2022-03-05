<x-app-layout title="Nueva publicación">
    <div class="w-8/12">
        <form action="{{ route('posts.store') }}" method="post" id="postForm" enctype="multipart/form-data">
            @csrf
            <x-post-form />
        </form>
        <button type="submit" form="postForm" class="bg-gray-300 rounded py-2 px-4" type="submit">
            Publicar
        </button>
    </div>
</x-app-layout>