<?php

namespace App\Enums;

enum StoryStatus:string {
  case draft = 'draft';
  case submitted = 'submitted';
  case processing = 'processing';
  case rejected = 'rejected';
  case approved = 'approved';
  case closed = 'closed';
}