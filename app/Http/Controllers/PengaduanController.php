<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

use App\Models\Karyawan;
use App\Models\SubKategori;
use App\Models\Lokasi;

use Carbon\Carbon;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(auth()->user()->level != 'TEKNISI'){
            $items = Ticket::where('id_pelapor', auth()->user()->id)->orderBy('tanggal_pengaduan', 'DESC')->get();
        }else{
            $items = Ticket::orderBy('tanggal_pengaduan', 'DESC')->get();
        }

        if($request->status){
            $status = $request->status;
            $response = $items->where('status', $request->status);
        }else{
            $status = 'all';
            $response = $items;
        }

        $list_karyawan = Karyawan::all();
        $list_jenis_pengaduan = ['Gangguan Teknologi Informasi', 'Pemeliharaan Teknologi Informasi', 'Permintaan'];
        $list_sub_kategori = SubKategori::all()->sortBy('kategoris');
        $list_lokasi = Lokasi::all();

        $karyawan = Karyawan::where('id', auth()->user()->id_karyawan)->first();

        return view('pages.pengaduan.index', [
            'items' => $response,
            'status' => $status,
            'list_karyawan' => $list_karyawan,
            'list_jenis_pengaduan' => $list_jenis_pengaduan,
            'list_sub_kategori' => $list_sub_kategori,
            'list_lokasi' => $list_lokasi,
            'karyawan' => $karyawan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = $request->all();
        $item['status'] = 'open';
        $item['tanggal_pengaduan'] = Carbon::now();
        $item['id_pelapor'] = auth()->user()->id;

        Ticket::create($item);
        return redirect()->route('pengaduan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function onprogress($id)
    {
        $item = Ticket::find($id);
        $item->status = 'on progress';
        $item->id_teknisi = auth()->user()->id;
        $item->tanggal_proses = Carbon::now();
        $item->save();
        return redirect()->route('pengaduan.index')->with('success', 'Data berhasil di konfirmasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function close(Request $request, $id)
    {
        $item = $request->all();
        $item['status'] = 'close';
        $item['tanggal_selesai'] = Carbon::now();

        Ticket::find($id)->update($item);
        return redirect()->route('pengaduan.index')->with('success', 'Data berhasil di konfirmasi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ticket::destroy($id);
        return redirect()->route('pengaduan.index')->with('success', 'Data berhasil dihapus');
    }
}
