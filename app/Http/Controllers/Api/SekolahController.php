<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{

    // LIST DATA
    public function index()
    {
        return response()->json(Sekolah::all());
    }

    // TAMBAH DATA
    public function store(Request $request)
    {
        $data = Sekolah::create($request->all());

        return response()->json([
            "message" => "Data berhasil ditambahkan",
            "data" => $data
        ]);
    }

    // DETAIL DATA
    public function show($id)
    {
        $data = Sekolah::find($id);

        return response()->json($data);
    }

}