<x-guest-layout title="Acerca de mí">
	<section class="py-10 md:py-12">
		<div class="w-10/12 mx-auto flex flex-col md:flex-row space-y-10 md:space-y-0 items-start md:items-start">
			<div class="w-full md:w-7/12">
				<h2 class="text-3xl md:text-6xl mb-7 font-bold">Acerca de mí</h2>
				<div class="text-base md:text-xl">
					@if($aboutPage)
					{!! $aboutPage->body !!}
					@endif
				</div>
			</div>
			<div class="w-full md:w-3/12 ml-auto flex items-center justify-end">
				<img src="{{ asset('img/jonathan_velazquez.JPG') }}" class="w-full h-auto shadow-xl" alt="">
			</div>
		</div>
	</section>
</x-guest-layout>