<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $portofolio = Portofolio::where([
            [function ($query) use ($request) {
                if (($term = $request->term)) {
                    $query->orWhere('judul', 'LIKE', '%' . $term . '%')
                        ->orWhere('deskripsi', 'LIKE', '%' . $term . '%')->get();
                }
            }]
        ])
            ->orderBy('id', 'asc')
            ->simplePaginate(10);

        return view('admin/package/portofolio/index', compact('portofolio'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/package/portofolio/create');
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        $photo      = $request->file('gambar');
        $photo_name = time() . '_photo_' . $photo->getClientOriginalExtension();
        $photo_path = $photo->storeAs('fotoPortofolio', $photo_name, 'public');
        Portofolio::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $photo_path,
        ]);

        return redirect()->route('portofolio.index')
        ->with('success', 'Data Portofolio Berhasil Ditambahkan!');
    }


    public function show($id)
    {
        // $Portofolio = Portofolio::find($id);
        // return view('admin/package/Portofolio/detail');
    }


    public function edit($id)
    {
        $portofolio = Portofolio::find($id);
        // echo json_encode($Portofolio);die();
        return view('admin/package/portofolio/update', compact('portofolio'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        $update = Portofolio::find($id);
        $update->judul = $request->get('judul');
        $update->deskripsi = $request->get('deskripsi');

        if ($request->hasFile('gambar')) {
            $photo = $request->file('gambar');
            $photo_name = time() . '_photo_gambar.' . $photo->getClientOriginalExtension();
            $photo_path = $photo->storeAs('gambar', $photo_name, 'public');
            $update->gambar = $photo_path;
        }

        $update->save();

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('portofolio.index')
            ->with('success', 'Portofolio Berhasil Diupdate!');
    }

    public function destroy($id)
    {
        // Fungsi eloquent untuk menghapus data
        Portofolio::find($id)->delete();
        return redirect('/admin/portofolio')
            ->with('success', 'Data Portofolio Berhasil Dihapus!');
    }
}
