<?php

namespace App\Http\Controllers;

use App\Models\Kulit;
use Illuminate\Http\Request;

class KulitController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:kulit-list', ['only' => ['index']]);
        $this->middleware('permission:kulit-create', ['only' => ['store']]);
        $this->middleware('permission:kulit-edit', ['only' => ['update', 'json']]);
        $this->middleware('permission:kulit-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $kulit = Kulit::all();

        return view('admin.kulit.index', compact('kulit'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'pengobatan' => 'required'
        ]);

        $data = $request->all();

        Kulit::create($data);

        return back()->with('success', 'Data Kulit berhasil disimpan');
    }

    public function json()
    {
        $data = Kulit::find(request('id'));

        return response()->json($data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'pengobatan' => 'required'
        ]);

        $data = $request->all();

        Kulit::find($request->id)->update($data);

        return back()->with('success', 'Data Kulit berhasil diubah');
    }

    public function destroy(Kulit $kulit)
    {
        $kulit->delete();
        return back()->with('success', 'Data Kulit berhasil dihapus');
    }
}
