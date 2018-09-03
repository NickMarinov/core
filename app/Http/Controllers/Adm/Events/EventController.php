<?php

namespace App\Http\Controllers\Adm\Events;

use App\Models\Events\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class EventController extends BaseController
{
    public function create()
    {
        return view('adm.events.create');
    }

    public function store(Request $request)
    {
        Events::create($request->all());

        return redirect()->route('events.calendar');
    }
}
