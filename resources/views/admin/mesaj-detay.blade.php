@extends('layouts.ana')

@section('baslik', 'Mesaj Detayı')

@section('icerik')

    <div class="max-w-2xl mx-auto">

        <a href="/admin/mesajlar" class="text-blue-600 hover:underline text-sm">← Mesajlara Dön</a>

        <div class="bg-white rounded-2xl shadow p-8 mt-4">
            <div class="grid grid-cols-2 gap-4 mb-6 text-sm text-gray-500">
                <div><span class="font-medium text-gray-700">İsim:</span> {{ $mesaj->isim }}</div>
                <div><span class="font-medium text-gray-700">Email:</span> {{ $mesaj->email }}</div>
                <div><span class="font-medium text-gray-700">Tarih:</span> {{ $mesaj->created_at->format('d.m.Y H:i') }}</div>
                <div><span class="font-medium text-gray-700">Durum:</span>
                    {{ $mesaj->okundu ? '✅ Okundu' : '🔵 Yeni' }}
                </div>
            </div>

            <h2 class="text-xl font-semibold mb-3">{{ $mesaj->konu }}</h2>
            <p class="text-gray-600 leading-relaxed whitespace-pre-line">{{ $mesaj->mesaj }}</p>

            <div class="mt-6 pt-6 border-t">
                <form action="/admin/mesajlar/{{ $mesaj->id }}" method="POST"
                      onsubmit="return confirm('Mesajı silmek istediğine emin misin?')">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-600 transition text-sm">
                        Mesajı Sil
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection