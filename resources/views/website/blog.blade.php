<x-guest-layout title="Publicaciones">
	<section class="py-12">
		<div class="w-10/12 mx-auto">
			
			@if(count($posts))
			@foreach($posts as $post)

				<div class="flex items-center space-x-24 @if(!$loop->last) mb-20 @endif">
					<div class="w-1/2">
						<a href="{{ route('post', $post->slug) }}">
							<img src="{{ $post->cover_img }}" class="w-full h-auto shadow-xl" alt="{{ $post->title }}">
						</a>
					</div>
					<div class="w-1/2">
						<p class="mb-7">{{ $post->created_at->format('d/m/Y') }}</p>
						<a href="{{ route('post', $post->slug) }}" class="text-5xl font-bold">{{ $post->title }}</a>
						<p class="text-xl my-7">{{ $post->description }}</p>
						<a href="{{ route('post', $post->slug) }}" class="underline font-bold">Continuar leyendo</a>
					</div>
				</div>

			@endforeach
			@else
				<p class="text-gray-500">No se encontrarón publicaciones.</p>
			@endif


		</div>
	</section>
</x-guest-layout>