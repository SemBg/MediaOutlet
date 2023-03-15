<?php

namespace App\Models;

use App\Enums\StoryStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['state', 'title', 'description'];

    protected $casts = [
      'state' => StoryStatus::class
    ];

}
