<?php

namespace App\Http\Controllers;

use App\Models\Proje;
use App\Models\Mesaj;
use Illuminate\Http\Request;

class PortfolyoController extends Controller
{
    public function anasayfa()
    {
        return view('anasayfa');
    }

    public function projeler()
    {
        $projeler = Proje::latest()->get();
        return view('projeler', ['projeler' => $projeler]);
    }

    public function iletisim()
    {
        return view('iletisim');
    }

    public function iletisimGonder(Request $request)
    {
        $request->validate([
            'isim'   => 'required|min:2',
            'email'  => 'required|email',
            'konu'   => 'required|min:3',
            'mesaj'  => 'required|min:10',
        ]);

        Mesaj::create($request->only(['isim', 'email', 'konu', 'mesaj']));

        return redirect('/iletisim')->with('basari', 'Mesajın alındı! En kısa sürede dönüş yapacağım.');
    }
}