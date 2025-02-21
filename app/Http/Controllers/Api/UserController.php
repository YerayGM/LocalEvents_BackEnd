<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\User;
use Orion\Concerns\DisableAuthorization;

class UserController extends Controller
{
    use DisableAuthorization;
    protected $model = User::class;

    // public function __construct()
    // {
    //     $this->middleware(function ($request, $next) {
    //         if (!auth()->user() || !auth()->user()->admin) {
    //             abort(403, 'Acceso no autorizado.');
    //         }
    //         return $next($request);
    //     });
    // }
}
