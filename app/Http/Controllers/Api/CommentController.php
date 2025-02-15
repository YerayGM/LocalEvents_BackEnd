<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
    protected $model = Comment::class;
}
