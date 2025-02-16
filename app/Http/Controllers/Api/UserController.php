<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    protected $model = User::class;
}