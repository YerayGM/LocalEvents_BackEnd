<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Comment;
use Orion\Concerns\DisableAuthorization;

class CommentController extends Controller
{
    use DisableAuthorization;
    protected $model = Comment::class;
}
