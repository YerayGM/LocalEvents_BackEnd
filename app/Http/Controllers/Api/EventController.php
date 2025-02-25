<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Event;
use Orion\Concerns\DisableAuthorization;

class EventController extends Controller
{
    protected $model = Event::class;

    public function includes(): array
    {
        return ['association'];
    }
}
