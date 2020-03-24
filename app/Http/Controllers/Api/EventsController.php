<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Organizer;
use Carbon\Carbon;
use App\Event;

class EventsController extends Controller
{
    public function index(){
    	$event = Event::where('date','>=',Carbon::now())->orderBy('date','asc')->with('organizer')->get();
    	return response()->json($event);
    }
    public function show($organizerSlug,$eventSlug){
    	$organizer = Organizer::where('slug',$organizerSlug)->first();
    	if(!$organizer){
    		return response()->json(['message'=>'organizer not found'],404);
    	}
    	$event = Event::where('slug',$eventSlug)->with(['tickets','channels','channels.rooms', 'channels.rooms.sessions'])->first();
    	if(!$event || $event->organizer_id != $organizer->id){
    		return response()->json(['message'=>'Event not found'],404);
    	}
    	return $event;
    }
}
