<x-guest-layout>
	<section class="py-7 md:py-20">
		<div class="w-10/12 mx-auto">
			<div class="w-full md:w-9/12">
				<div class="text-4xl md:text-8xl font-bold leading-tight">
					@if($coverPage)
					{!! $coverPage->body !!}
					@endif
				</div>
			</div>
		</div>
	</section>
</x-guest-layout>