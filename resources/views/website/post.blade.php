<x-guest-layout 
	title="{{ $post->title }}"
	metadescription="{{ $post->meta_description }}" 
	metakeywords="{{ $post->meta_keywords }}">
	<section class="py-10 md:py-12">
		<div class="w-10/12 mx-auto flex items-start">
			<div class="w-full md:w-7/12">
				<h2 class="text-3xl md:text-6xl mb-7 md:mb-16 font-bold">{{ $post->title }}</h2>
				<p class="mb-7">{{ $post->created_at->format('d/m/Y') }}</p>
				<img src="{{ $post->cover_img }}" class="w-full h-auto shadow-xl mb-7 md:mb-16 block md:hidden" alt="{{ $post->title }}">
				<p class="text-base md:text-2xl mb-10">
					{{ $post->description }}
				</p>
				{!! $post->body !!}
			</div>
			<div class="w-full md:w-4/12 ml-auto hidden md:block">
				<img src="{{ $post->cover_img }}" class="w-full h-auto shadow-xl mb-7 md:mb-16" alt="{{ $post->title }}">
			</div>
		</div>
	</section>
</x-guest-layout>