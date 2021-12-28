<x-app-layout title="Detalles de página">
    <div class="w-8/12">
        <form action="{{ route('pages.update', $page) }}" method="post" id="pageForm" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-page-form :page="$page" />
        </form>

        <button type="submit" form="pageForm" class="bg-gray-300 rounded py-2 px-4" type="submit">Guardar cambios</button>
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
