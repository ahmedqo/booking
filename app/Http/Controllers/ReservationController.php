<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index_view()
    {
        return view('reservation.index');
    }

    public function scene_view($id)
    {
        $data = Reservation::findorfail($id);
        return view('reservation.scene', compact('data'));
    }

    public function search_action(Request $Request)
    {
        $data = Reservation::orderBy('id', 'DESC');
        if ($Request->search) {
            $data = $data->search(urldecode($Request->search));
        }
        $data = $data->cursorPaginate(50);
        return response()->json($data);
    }

    public function clear_action($id)
    {
        Reservation::findorfail($id)->delete();

        return Redirect::route('views.reservations.index')->with([
            'message' => __('Deleted successfully'),
            'type' => 'success'
        ]);
    }
}
