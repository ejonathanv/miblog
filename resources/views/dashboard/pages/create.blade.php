<x-app-layout title="Nueva página">
    <div class="w-8/12">
        <form action="{{ route('pages.store') }}" method="post" id="pageForm" enctype="multipart/form-data">
            @csrf
            <x-page-form />
        </form>

        <button type="submit" form="pageForm" class="bg-gray-300 rounded py-2 px-4" type="submit">
            Publicar
        </button>
    </div>

</x-app-layout>
