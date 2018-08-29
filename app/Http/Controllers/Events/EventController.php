<?php

namespace App\Http\Controllers\Events;

use App\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class EventController extends BaseController
{
    public function showCalendar() {
        return view('events.calendar');
    }

    public function showRoster() {
        return view('events.roster');
    }
    /*public function addATCInterest() {
        return view('events.atc.interest');
    }*/

    public function addATCInterest()
    {
        //Form Select Options => should be event names gathered from a db
        $currentEvents = [''];

        return view('events.atc.interest',[ 'currentEvents' => $currentEvents]);
    }


//    /*/**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        //
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Events  $events
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Events $events)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Events  $events
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Events $events)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Events  $events
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Events $events)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Events  $events
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Events $events)
//    {
//        //
//    }
}
