<?php

namespace App\Http\Controllers;

use App\Models\Reservation;

class CoreController extends Controller
{
    public function index_view()
    {
        return view('core.index');
    }

    public function search_action()
    {
        $data = Reservation::all()->map(function ($carry) {
            return [
                'title' => ucfirst($carry->excursion) . __(' for ') . strtoupper($carry->last_name) . ' ' . ucfirst($carry->first_name),
                'start' => $carry->date . 'T00:00',
                'end' => $carry->date . 'T23:59',
                'color' => 'rgb(var(--acent))'
            ];
        });

        return response()->json($data);
    }
}
