<x-guest-layout title="Acerca de mí">
	<section class="py-12">
		<div class="w-10/12 mx-auto">
			<div class="w-7/12">
				<h2 class="text-6xl mb-7 font-bold">Acerca de mí</h2>
				<div class="text-xl">
					@if($aboutPage)
					{!! $aboutPage->body !!}
					@endif
				</div>
			</div>
		</div>
	</section>
</x-guest-layout>