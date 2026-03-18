<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
{
    $data = Siswa::with('kelas')->get();

    return response()->json($data);
}
        public function store(Request $request)
{
    try {
        $data = Siswa::create($request->all());

        return response()->json([
            'status' => true,
            'data' => $data
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'error' => $e->getMessage()
        ], 500);
    }
}
    public function show($id)
{
    $data = Siswa::with('kelas')->find($id);

    if (!$data) {
        return response()->json([
            'message' => 'Data tidak ditemukan'
        ], 404);
    }

    return response()->json($data);
}
}