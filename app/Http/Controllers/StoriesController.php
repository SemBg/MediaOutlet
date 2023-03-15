<?php

namespace App\Http\Controllers;

use App\Enums\StoryStatus;
use App\Models\Story;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
  //* Show all approved stories

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
}
