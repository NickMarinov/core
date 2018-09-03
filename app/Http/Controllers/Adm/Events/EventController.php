<?php

namespace App\Http\Controllers\Adm\Events;

use App\Http\Controllers\Adm\AdmController;
use App\Models\Events\Events;
use Illuminate\Http\Request;

class EventController extends AdmController
{
    public function create()
    {
        return $this->viewMake('adm.events.create');
    }

    public function store(Request $request)
    {
        Events::create($request->all());

        return redirect()->route('events.calendar');
    }

    public function roster()
    {
        return $this->viewMake('adm.events.roster');
    }
}
