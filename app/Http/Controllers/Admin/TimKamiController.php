<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TimKami;

use Illuminate\Http\Request;

class TimKamiController extends Controller
{
    public function index(Request $request)
    {
        $TimKami = TimKami::where([
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('nama', 'LIKE', '%' . $term . '%')
                        ->orWhere('jabatan', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy('id', 'asc')
            ->simplePaginate(10);

        return view('admin/package/tim-kami/index', compact('TimKami'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/package/tim-kami/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required'
        ]);

        $photo      = $request->file('gambar');
        $photo_name = time() . '_photo_' . $photo->getClientOriginalExtension();
        $photo_path = $photo->storeAs('fotoTimKami', $photo_name, 'public');
        TimKami::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'gambar' => $photo_path,
        ]);

        return redirect()->route('tim-kami.index')
        ->with('success', 'Data Tim-Kami Berhasil Ditambahkan');
    }


    public function show($id)
    {
        // $TimKami = TimKami::find($id);
        // return view('admin/package/TimKami/detail');
    }


    public function edit($id)
    {
        $TimKami = TimKami::find($id);
        // echo json_encode($TimKami);die();
        return view('admin/package/tim-kami/update', compact('TimKami'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required'
        ]);

        $update = TimKami::find($id);
        $update->nama = $request->get('nama');
        $update->jabatan = $request->get('jabatan');

        if ($request->hasFile('gambar')) {
            $photo = $request->file('gambar');
            $photo_name = time() . '_photo_gambar.' . $photo->getClientOriginalExtension();
            $photo_path = $photo->storeAs('gambar', $photo_name, 'public');
            $update->gambar = $photo_path;
        }

        $update->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('tim-kami.index')
            ->with('success', 'TimKami Berhasil Diupdate');
    }

    public function destroy($id)
    {
        // Fungsi eloquent untuk menghapus data
        TimKami::find($id)->delete();
        return redirect('/admin/tim-kami')
            ->with('success', 'Data Tim-Kami Berhasil Dihapus');
    }
}
