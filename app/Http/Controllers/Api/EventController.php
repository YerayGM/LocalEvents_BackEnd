<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Event;
use Orion\Concerns\DisableAuthorization;

class EventController extends Controller
{
    use DisableAuthorization;
    protected $model = Event::class;
}
