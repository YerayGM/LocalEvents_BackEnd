<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Inscribe;
use Orion\Concerns\DisableAuthorization;

class InscribeController extends Controller
{
    protected $model = Inscribe::class;
}
