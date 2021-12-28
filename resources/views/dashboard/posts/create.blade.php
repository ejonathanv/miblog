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

    <x-slot name="scripts">
        <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor.create(document.querySelector( '#editor' ))
                .catch( error => {
                    console.error( error );
                });
        </script>   
    </x-slot>

</x-app-layout>
