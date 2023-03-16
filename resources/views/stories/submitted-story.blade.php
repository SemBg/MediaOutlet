<x-layout>
  <a href="{{url()->previous()}}" class="ml-4 mb-4 inline-block text-black"><i class="fa-solid fa-arrow-left"></i> Back </a>
  <div class="mx-4">
    <x-card>
      <div class="flex flex-col items-center justify-center text-center">
        <div>
          <h3 class="mb-2 text-3xl font-bold">Story Title</h3>
          <h3 class="mb-4 text-2xl">{{ $story->title }}</h3>
          <h3 class="mb-2 text-3xl font-bold">
            Story Description
          </h3>
          <div class="space-y-6 text-lg">
            {{ $story->description }}
          </div>
        </div>
      </div>
      <a class="bg-green-500 p-2 rounded-lg m-2" href="/submitted-story/{{$story->id}}/approve">Approve</a>
      <a class="bg-red-500 p-2 rounded-lg m-2" href="/submitted-story/{{$story->id}}/deny">Deny</a>
    </x-card>
  </div>
</x-layout>