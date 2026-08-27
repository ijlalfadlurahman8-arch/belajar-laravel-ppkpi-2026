<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function greeting()
    {
        return view('greeting');
    }

    public function penjumlahan()
    {
        $jumlah = 0;
        return view('penjumlahan', compact('jumlah'));
    }

    public function actionPenjumlahan(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 + $angka2;
        return view('penjumlahan', compact('jumlah'));
    }

    public function pengurangan()
    {
        $jumlah = 0;
        return view('pengurangan', compact('jumlah'));
        }

    public function actionPengurangan(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 - $angka2;
        return view('pengurangan', compact('jumlah'));

    }

    public function pembagian()
    {
        $jumlah = 0;
        return view('pembagian', compact('jumlah'));
        }

    public function actionPembagian(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 / $angka2;
        return view('pembagian', compact('jumlah'));

    }

    public function perkalian()
    {
        $jumlah = 0;
        return view('perkalian', compact('jumlah'));
        }

    public function actionPerkalian(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        $jumlah = $angka1 * $angka2;
        return view('perkalian', compact('jumlah'));

    }
}
