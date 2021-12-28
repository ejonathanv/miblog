<x-app-layout title="Escritorio">

    <a href="{{ route('posts.create') }}" class="underline">Nueva publicación</a>

    @if(count($posts))
    <table class="w-full text-left mt-7">
    	<thead>
    		<tr>
    			<th>Fecha</th>
    			<th>Título</th>
    			<th>Detalles</th>
    		</tr>
    	</thead>

    	<tbody>
    		@foreach($posts as $post)
    		<tr class="border-b-2 border-gray-300">
    			<td>{{ $post->created_at->format('d M, Y') }}</td>
    			<td>{{ $post->title }}</td>
    			<td><a href="{{ route('posts.show', $post) }}">Detalles</a></td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
    @else
        <p class="mt-5 text-gray-500">No se han agregado publicaciones aún.</p>
    @endif
</x-app-layout>
