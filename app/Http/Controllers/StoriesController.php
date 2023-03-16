<?php

namespace App\Http\Controllers;

use App\Enums\StoryStatus;
use App\Models\Story;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
  //* Show all approved stories

  //* Show all stories waiting for approval
  public function get() 
  {
    return view('stories.list', [
      'stories' => Story::where('state', StoryStatus::submitted)->get()
    ]);
  }

  //* Show story for approval
  public function story(Story $story)
  {
    return view('stories.submitted-story', [
      'story' => $story
    ]);
  }

  //* Approve story
  public function approve(Story $story)
  {
    $formFields['state'] = StoryStatus::approved;

    $story->update($formFields);

    return redirect('/');
  }

  //* Deny story
  public function deny(Story $story)
  {
    $formFields['state'] = StoryStatus::rejected;

    $story->update($formFields);

    return redirect('/');
  }

  //* Show all rejected stories
  public function getRejected()
  {
    return view('stories.list', [
      'stories' => Story::where('state', StoryStatus::rejected)->get()
    ]);
  }

  //* Show re-submit form
  public function rejectedStory(Story $story)
  {
    return view('stories.resubmit', ['story' => $story]);
  }

  //* Store new story, save as draft
  public function draft(Request $request) 
  {
    $formFields = $request->validate([
      'title' => 'required',
      'description' => 'required'
    ]);

    $formFields['state'] = StoryStatus::draft;

    Story::create($formFields);

    return redirect('/');
  }

  //* Store new story, waiting for approval
  public function submit(Request $request)
  {
    $formFields = $request->validate([
      'title' => 'required',
      'description' => 'required'
    ]);

    $formFields['state'] = StoryStatus::submitted;

    Story::create($formFields);

    return redirect('/');
  }

  //* Resubmit story
  public function resubmit(Request $request, Story $story)
  {
    $formFields = $request->validate([
      'title' => 'required',
      'description' => 'required'
    ]);

    $formFields['state'] = StoryStatus::submitted;

    $story->update($formFields);

    return redirect('/');
  }
}
