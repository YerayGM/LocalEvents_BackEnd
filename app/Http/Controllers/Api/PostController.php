<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    protected $model = Post::class;
}
