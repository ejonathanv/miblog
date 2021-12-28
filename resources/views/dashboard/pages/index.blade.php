<x-app-layout title="Páginas">

    <a href="{{ route('pages.create') }}" class="underline">Nueva página</a>

    @if(count($pages))
    <table class="w-full text-left mt-7">
    	<thead>
    		<tr>
    			<th>Título</th>
    			<th>Detalles</th>
    		</tr>
    	</thead>

    	<tbody>
    		@foreach($pages as $page)
    		<tr class="border-b-2 border-gray-300">
    			<td><a href="{{ route('pages.show', $page) }}">{{ $page->title }}</a></td>
    			<td><a href="{{ route('pages.show', $page) }}">Detalles</a></td>
    		</tr>
    		@endforeach
    	</tbody>
    </table>
    @else
        <p class="mt-5 text-gray-500">No se han agregado páginas aún.</p>
    @endif
</x-app-layout>
