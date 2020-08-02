<?php

namespace App\Http\Controllers\Artikel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Artikel extends Controller
{
    public function index()
    {
        $artikel = \App\Artikel::all();
        return $artikel->toJson();
    }

    public function getArtikel($id)
    {
        $artikel = \App\Artikel::find($id);
        return $artikel->toJson();
    }

    public function store(Request $request)
    {
        $val = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $project = \App\Artikel::create([
            'title' => $val['title'],
            'content' => $val['content'],
        ]);
        if ($project) {
            $msg = [
                'success' => true,
                'message' => 'Artikel berhasil terbuat!'
            ];
        }
        if (!$project) {
            $msg = [
                'success' => false,
                'message' => 'Artikel gagal terbuat!'
            ];
        }
        return response()->json($msg);
    }

    public function update(Request $request, $id)
    {
        $val = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $artikel = \App\Artikel::find($id);
        $artikel->title = $val['title'];
        $artikel->content = $val['content'];
        $artikel->save();
        $msg = [
            'success' => false,
            'message' => 'Artikel berhasil diperbaharui!'
        ];
        return response()->json($msg);
    }

    public function delete($id)
    {
        $artikel = \App\Artikel::find($id);
        if ($artikel) {
            $artikel->delete();
            $msg = [
                'success' => true,
                'message' => 'Artikel berhasil tehapus!'
            ];
        }
        if (!$artikel) {
            $msg = [
                'success' => false,
                'message' => 'Artikel gagal tehapus!'
            ];
        }
        return response()->json($msg);
    }
}
