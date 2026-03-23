@extends('layouts.ana')

@section('baslik', 'Mesajlar')

@section('icerik')

    <h1 class="text-3xl font-bold mb-6">Gelen Mesajlar</h1>

    @if(session('basari'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6">
            {{ session('basari') }}
        </div>
    @endif

    <div class="bg-white rounded-2xl shadow overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-100 text-gray-600 text-sm">
                <tr>
                    <th class="px-6 py-4">İsim</th>
                    <th class="px-6 py-4">Email</th>
                    <th class="px-6 py-4">Konu</th>
                    <th class="px-6 py-4">Tarih</th>
                    <th class="px-6 py-4 text-right">İşlemler</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($mesajlar as $mesaj)
                    <tr class="{{ $mesaj->okundu ? 'text-gray-400' : 'font-medium' }} hover:bg-gray-50">
                        <td class="px-6 py-4">
                            {{ $mesaj->isim }}
                            @if(!$mesaj->okundu)
                                <span class="bg-blue-100 text-blue-600 text-xs px-2 py-0.5 rounded-full ml-1">Yeni</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm">{{ $mesaj->email }}</td>
                        <td class="px-6 py-4 text-sm">{{ $mesaj->konu }}</td>
                        <td class="px-6 py-4 text-sm text-gray-400">{{ $mesaj->created_at->format('d.m.Y H:i') }}</td>
                        <td class="px-6 py-4 text-right flex justify-end gap-3">
                            <a href="/admin/mesajlar/{{ $mesaj->id }}"
                               class="text-blue-600 hover:underline text-sm">Oku</a>
                            <form action="/admin/mesajlar/{{ $mesaj->id }}" method="POST"
                                  onsubmit="return confirm('Mesajı silmek istediğine emin misin?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:underline text-sm">Sil</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-8 text-center text-gray-400">Henüz mesaj yok.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection