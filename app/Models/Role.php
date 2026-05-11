<?php

namespace App\Models;

enum Role: string {
    case ADMIN = 'admin';
    case EDITOR = 'editor';
    case VIEWER = 'viewer';
}