<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\{Kulit, Gejala};
use Illuminate\Http\Request;

class RuleController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:rules-list', ['only' => ['index']]);
        $this->middleware('permission:rules-edit', ['only' => ['update']]);
    }

    public function index($id)
    {
        $kulit = Kulit::select('nama', 'id')->get();
        $gejala = Gejala::all();
        $data_kulit = Kulit::find($id);
        $gejala_kulit = $data_kulit->gejalas();
        $gejala_id = $gejala_kulit->pluck('gejala_id')->toArray();

        return view('admin.rules.index', compact('data_kulit', 'kulit', 'gejala', 'gejala_kulit', 'gejala_id'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $kulit_list = DB::table('gejala_kulit')->where(['kulit_id' => $id])->get();

        $gejala_list = [];
        $enabled = 0;
        $disabled = 0;
        $changed = 0;

        foreach ($input as $key => $value) {
            if (str_contains($key, 'gejala')) {
                $gejala_id = explode('-', $key)[1];

                $gejala_kulit = DB::table('gejala_kulit')
                    ->where(['kulit_id' => $id, 'gejala_id' => $gejala_id]);

                if (count($gejala_kulit->get()) == 0) {
                    DB::table('gejala_kulit')
                        ->insert([
                            'kulit_id' => $id,
                            'gejala_id' => $gejala_id,
                            'value_cf' => $value
                        ]);
                } else {
                    if ($gejala_kulit->first()->value_cf != $value) {
                        $gejala_kulit->update(['value_cf' => $value]);
                        $changed++;
                    }
                }

                array_push($gejala_list, $gejala_id);
                $enabled++;
            }
        }


        foreach ($kulit_list as $kulit) {
            if (!in_array($kulit->gejala_id, $gejala_list)) {
                $data = DB::table('gejala_kulit')
                    ->where(['kulit_id' => $id, 'gejala_id' => $kulit->gejala_id])
                    ->first();

                DB::table('gejala_kulit')->delete($data->id);
                $disabled++;
            }
        }


        activity()
            ->causedBy(auth()->user())
            ->withProperties([
                'kulit' => Kulit::find($id)->nama,
                'enabled' => $enabled,
                'disabled' => $disabled,
                'changed' => $changed
            ])
            ->log('Updated basis rules');

        return back()->with('success', 'Rules berhasil diubah');
    }
}
