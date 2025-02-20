<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Attribute;
use Orion\Concerns\DisableAuthorization;

class AttributeController extends Controller
{
    use DisableAuthorization;
    protected $model = Attribute::class;
}
