<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Ticket;

class DashboardController extends Controller
{
    public function index()
    {
        $list_data_per_bulan = array();
        for ($i=0; $i < 12; $i++) { 
            $data = Ticket::whereMonth('created_at', Carbon::now()->subMonths($i)->format('m'));
            $panjang = $data->count();
            
            $jumlah_sla_gangguan = 0;

            foreach ($data as $item ){
                // $waktu_pengerjaan = $item->tanggal_proses->diff($item->tanggal_selesai);
                $waktu_pengerjaan = 3;
                $sla_gangguan = $waktu_pengerjaan / 5 / 160;
                $jumlah_sla_gangguan += $sla_gangguan;
            }

            $rata_rata_sla_gangguan = $panjang != 0 ? $jumlah_sla_gangguan / $panjang : 0;
            $sla_akhir = 100 - $rata_rata_sla_gangguan;
            
            $list_data_per_bulan[$i] = array(
                'month' => Carbon::now()->subMonths($i)->format('M'),
                'sla_akhir' => $sla_akhir
            );
        }

        return view('pages.dashboard.index',[
            'list_data_per_bulan' => $list_data_per_bulan
        ]);
    }
}
