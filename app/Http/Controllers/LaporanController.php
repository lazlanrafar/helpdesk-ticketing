<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class LaporanController extends Controller
{
    public function index(){

        $items = Ticket::all();
        $items->where('status', 'close');

        $from_date = '';
        $end_date = '';

        return view('pages.laporan.index', [
            'items' => $items,
            'from_date' => $from_date,
            'end_date' => $end_date
        ]);
    }

    public function filter(Request $request){
        $from_date = $request->from_date;
        $end_date = $request->end_date;
        $items = Ticket::whereBetween('created_at', [$from_date, $end_date])->where('status', 'close')->get();

        return view('pages.laporan.index', [
            'items' => $items,
            'from_date' => $from_date,
            'end_date' => $end_date
        ]);
    }
}
