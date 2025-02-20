<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Post;
use Orion\Concerns\DisableAuthorization;

class PostController extends Controller
{
    use DisableAuthorization;
    protected $model = Post::class;
}
