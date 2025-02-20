<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Association;
use Orion\Concerns\DisableAuthorization;

class AssociationController extends Controller
{
    use DisableAuthorization;
    protected $model = Association::class;
}
