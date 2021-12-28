<x-guest-layout 
	title="{{ $post->title }}"
	metadescription="{{ $post->meta_description }}" 
	metakeywords="{{ $post->meta_keywords }}">
	<section class="py-12">
		<div class="w-10/12 mx-auto">
			<div class="w-7/12">
				<p class="mb-7">{{ $post->created_at->format('d/m/Y') }}</p>
				<h2 class="text-6xl mb-16 font-bold">{{ $post->title }}</h2>
				<p class="text-xl mb-10">
					{{ $post->description }}
				</p>
				{!! $post->body !!}
			</div>
		</div>
	</section>
</x-guest-layout>