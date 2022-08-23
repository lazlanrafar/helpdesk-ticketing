<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

use App\Models\Karyawan;
use App\Models\SubKategori;
use App\Models\Lokasi;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Ticket::all();
        $list_karyawan = Karyawan::all();
        $list_jenis_pengaduan = ['Gangguan Teknologi Informasi', 'Pemeliharaan Teknologi Informasi', 'Permintaan'];
        $list_sub_kategori = SubKategori::all();
        $list_lokasi = Lokasi::all();

        return view('pages.pengaduan.index', [
            'items' => $items,
            'list_karyawan' => $list_karyawan,
            'list_jenis_pengaduan' => $list_jenis_pengaduan,
            'list_sub_kategori' => $list_sub_kategori,
            'list_lokasi' => $list_lokasi
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
        $item['tanggal_pengaduan'] = date('d-m-Y');
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
    public function show($id)
    {
        //
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
        //
    }
}
