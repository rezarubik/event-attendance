<?php

namespace App\Http\Controllers;

use App\Event;
use App\PendaftaranEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Penyelenggara membuat event
     */
    public function createEvent(Request $request)
    {
        // dd($request->all());
        $event = new Event();
        $data = [
            [
                'name_event' => $request->name_event,
                'description_event' => $request->description_event,
            ]
        ];
        // dd($data);
        $event->name_event = $request->name_event;
        $event->description_event = $request->description_event;
        $event->save();
        // Event::create($data);
        echo 'Event berhasil dibuat';
    }
    /**
     * Pendaftaran event
     */
    public function pendaftaranEvent(Request $request)
    {
        $pendaftaranEvent = new PendaftaranEvent();
        $pendaftaranEvent->id_event = $request->id_event;
        $pendaftaranEvent->id_user = $request->id_user;
        $pendaftaranEvent->tanggal_daftar = $request->tanggal_daftar;
        $pendaftaranEvent->status_daftar = $request->status_daftar;
        $pendaftaranEvent->save();
        echo 'Pendaftaran Event Berhasil. Terima Kasih.';
    }
}
