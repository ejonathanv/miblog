<x-guest-layout>
	<section class="py-20">
		<div class="w-10/12 mx-auto">
			<div class="w-9/12">
				<div class="text-8xl font-bold leading-tight">
					@if($coverPage)
					{!! $coverPage->body !!}
					@endif
				</div>
			</div>
		</div>
	</section>
</x-guest-layout>