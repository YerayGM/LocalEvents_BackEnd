<?php

namespace App\Http\Controllers\Api;

use Orion\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    protected $model = Event::class;
}
