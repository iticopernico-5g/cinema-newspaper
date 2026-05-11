<?php

namespace App\Models;

enum Category: string {
    case PressReview = 'press_review';
    case Meeting = 'meeting';
    case Video = 'video';
}