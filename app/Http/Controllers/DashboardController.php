<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $list_data_per_bulan = array();
        for ($i=0; $i < 12; $i++) { 
            $list_data_per_bulan[$i] = array(
                'month' => Carbon::now()->subMonths($i)->format('M'),
            );
        }

        return view('pages.dashboard.index',[
            'list_data_per_bulan' => $list_data_per_bulan
        ]);
    }
}
