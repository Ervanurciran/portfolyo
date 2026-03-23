<?php

namespace App\Http\Controllers;

use App\Models\Proje;
use Illuminate\Http\Request;
use App\Models\Mesaj;

class AdminController extends Controller
{
    // Proje listesi
    public function index()
    {
        $projeler = Proje::latest()->get();
        return view('admin.index', ['projeler' => $projeler]);
    }

    // Yeni proje formu
    public function create()
    {
        return view('admin.form');
    }

    // Yeni proje kaydet
    public function store(Request $request)
    {
        $request->validate([
            'isim' => 'required|min:3',
            'aciklama' => 'required',
        ]);

        Proje::create($request->only(['isim', 'aciklama', 'teknolojiler', 'github_url', 'canli_url']));

        return redirect('/admin')->with('basari', 'Proje başarıyla eklendi!');
    }

    // Düzenleme formu
    public function edit($id)
    {
        $proje = Proje::findOrFail($id);
        return view('admin.form', ['proje' => $proje]);
    }

    // Güncelle
    public function update(Request $request, $id)
    {
        $request->validate([
            'isim' => 'required|min:3',
            'aciklama' => 'required',
        ]);

        $proje = Proje::findOrFail($id);
        $proje->update($request->only(['isim', 'aciklama', 'teknolojiler', 'github_url', 'canli_url']));

        return redirect('/admin')->with('basari', 'Proje başarıyla güncellendi!');
    }

    // Sil
    public function destroy($id)
    {
        Proje::findOrFail($id)->delete();
        return redirect('/admin')->with('basari', 'Proje silindi.');
    }

    // Mesaj listesi
public function mesajlar()
{
    $mesajlar = Mesaj::latest()->get();
    return view('admin.mesajlar', ['mesajlar' => $mesajlar]);
}

// Mesajı oku (okundu olarak işaretle)
public function mesajOku($id)
{
    $mesaj = Mesaj::findOrFail($id);
    $mesaj->update(['okundu' => true]);
    return view('admin.mesaj-detay', ['mesaj' => $mesaj]);
}

// Mesajı sil
public function mesajSil($id)
{
    Mesaj::findOrFail($id)->delete();
    return redirect('/admin/mesajlar')->with('basari', 'Mesaj silindi.');
}
}