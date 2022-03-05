<x-app-layout title="Detalles de página">
    <div class="w-8/12">
        <form action="{{ route('pages.update', $page) }}" method="post" id="pageForm" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-page-form :page="$page" />
        </form>

        <button type="submit" form="pageForm" class="bg-gray-300 rounded py-2 px-4" type="submit">Guardar cambios</button>
    </div>
</x-app-layout>
