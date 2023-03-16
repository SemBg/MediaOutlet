@php
  use App\Enums\StoryStatus;
@endphp

@props(['story'])

<x-card>
  <div class="flex">
    <div>
      <h3 class="text-2xl">
        @if($story->state == StoryStatus::submitted)
          <a href="/submitted-story/{{ $story->id }}">{{ $story->title }}</a>
        @endif
        @if($story->state == StoryStatus::rejected)
          <a href="/rejected-story/{{ $story->id }}">{{ $story->title }}</a>
        @endif
      </h3>
    </div>
  </div>
</x-card>
