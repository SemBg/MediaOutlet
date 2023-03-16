<x-layout>
	<x-card class="mx-auto mt-24 max-w-lg bg-gray-50 p-10">
		<header class="text-center">
			<h2 class="mb-1 text-2xl font-bold uppercase">
				Resubmit a Story
			</h2>
			<p class="mb-4">Resubmit a story rejected story!</p>
		</header>

		<form method="POST" action="/resubmit-story/{{$story->id}}" enctype="multipart/form-data">
			@csrf
			<div class="mb-6">
				<label for="title" class="mb-2 inline-block text-lg">Story Title</label>
				<input type="text" class="w-full rounded border border-gray-200 p-2" name="title"
					placeholder="Example: Ongeluk a9" value="{{ $story->title }}" />

				@error('title')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<label for="description" class="mb-2 inline-block text-lg">
					Story Description
				</label>
				<textarea class="w-full rounded border border-gray-200 p-2" name="description" rows="10"
				placeholder="Example: Zwaar ongeluk gebeurd op de a9 richting Alkmaar">{{ $story->description }}</textarea>

				@error('description')
					<p class="mt-1 text-xs text-red-500">{{ $message }}</p>
				@enderror
			</div>

			<div class="mb-6">
				<button class="rounded py-2 px-4 text-white bg-black hover:bg-gray-800">
					Submit Story
				</button>

				<a href="{{ url()->previous() }}" class="ml-4 text-black"> Back </a>
			</div>
		</form>
	</x-card>
</x-layout>
