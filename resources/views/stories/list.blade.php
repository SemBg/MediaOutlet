<x-layout>
  <div class="grid grid-cols-2 gap-4 space-y-0 mx-4">
    @unless(count($stories) == 0)
      @foreach($stories AS $story)
        <x-story-card :story="$story" />
      @endforeach
    @else
      <p>No stories available</p>
    @endunless
  </div>
</x-layout>