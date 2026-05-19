<?php

namespace App\Models;

enum Role: string {
    case Admin = 'admin';
    case Editor = 'editor';
    case Viewer = 'viewer';
}