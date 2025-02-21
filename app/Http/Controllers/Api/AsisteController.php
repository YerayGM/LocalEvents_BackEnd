<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Asiste;
use Orion\Concerns\DisableAuthorization;

class AsisteController extends Controller
{
    use DisableAuthorization;
    protected $model = Asiste::class;
}
