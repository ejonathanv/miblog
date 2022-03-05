<x-app-layout title="Detalles de publicación">
    <div class="w-8/12">
        <form action="{{ route('posts.update', $post) }}" method="post" id="postForm" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <x-post-form :post="$post" />
        </form>
        <div class="flex space-x-5">
            <button type="submit" form="postForm" class="bg-gray-300 rounded py-2 px-4" type="submit">Guardar cambios</button>
            <form action="{{ route('posts.destroy', $post) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white rounded py-2 px-4" onclick="return confirm('Se eliminará esta publicación permanentemente ¿deseas continuar?')">
                    Eliminar publicación
                </button>
            </form>
        </div>
    </div>
</x-app-layout>