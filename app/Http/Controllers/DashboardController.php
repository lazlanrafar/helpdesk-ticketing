<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\Ticket;
use App\Models\Kategori;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->level != 'TEKNISI'){
            $total_open = Ticket::where('status', 'open')->where('id_pelapor', auth()->user()->id)->count();
            $total_onprogress = Ticket::where('status', 'on progress')->where('id_pelapor', auth()->user()->id)->count();
            $total_close = Ticket::where('status', 'close')->where('id_pelapor', auth()->user()->id)->count();
        }else{
            $total_open = Ticket::where('status', 'open')->count();
            $total_onprogress = Ticket::where('status', 'on progress')->count();
            $total_close = Ticket::where('status', 'close')->count();
        }
        
        $list_data_per_bulan = array();
        for ($i=0; $i < 12; $i++) { 
            $data = Ticket::whereMonth('created_at', Carbon::now()->subMonths($i)->format('m'))->where('status', 'close')->get();            
            $jumlah_sla_gangguan = 0;

            foreach ($data as $item ){
                $waktu_pengerjaan = Carbon::parse($item->tanggal_proses)->diffInSeconds(Carbon::parse($item->tanggal_selesai));
                $sla_gangguan = $waktu_pengerjaan / 5 / 160;
                $jumlah_sla_gangguan = $jumlah_sla_gangguan + $sla_gangguan;
            }

            $rata_rata_sla_gangguan = $data->count() != 0 ? $jumlah_sla_gangguan / $data->count() : 100;
            $sla_akhir = 100 - $rata_rata_sla_gangguan;
            
            $list_data_per_bulan[$i] = array(
                'month' => Carbon::now()->subMonths($i)->format('M Y'),
                'sla_akhir' => $sla_akhir,
            );
        }

        return view('pages.dashboard.index',[
            'list_data_per_bulan' => $list_data_per_bulan,
            'total_open' => $total_open,
            'total_onprogress' => $total_onprogress,
            'total_close' => $total_close,
        ]);
    }
}
