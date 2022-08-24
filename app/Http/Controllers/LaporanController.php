<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class LaporanController extends Controller
{
    public function index(){

        $items = Ticket::all();
        $items->where('status', 'close');

        return view('pages.laporan.index', [
            'items' => $items
        ]);
    }
}
