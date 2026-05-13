<?php

namespace App\Models;

enum PriorityLevel: string {
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
}
