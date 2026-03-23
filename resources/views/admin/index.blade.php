@extends('layouts.ana')

@section('baslik', 'Admin Panel')

@section('icerik')

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Admin Paneli</h1>
        <a href="/admin/ekle"
           class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
            + Yeni Proje
        </a>
    </div>

    {{-- Başarı mesajı --}}
    @if(session('basari'))
        <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6">
            {{ session('basari') }}
        </div>
    @endif

    {{-- Proje tablosu --}}
    <div class="bg-white rounded-2xl shadow overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-100 text-gray-600 text-sm">
                <tr>
                    <th class="px-6 py-4">Proje Adı</th>
                    <th class="px-6 py-4">Teknolojiler</th>
                    <th class="px-6 py-4">Tarih</th>
                    <th class="px-6 py-4 text-right">İşlemler</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($projeler as $proje)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">{{ $proje->isim }}</td>
                        <td class="px-6 py-4 text-gray-500 text-sm">{{ $proje->teknolojiler }}</td>
                        <td class="px-6 py-4 text-gray-400 text-sm">{{ $proje->created_at->format('d.m.Y') }}</td>
                        <td class="px-6 py-4 text-right flex justify-end gap-3">

                            {{-- Düzenle --}}
                            <a href="/admin/duzenle/{{ $proje->id }}"
                               class="text-blue-600 hover:underline text-sm">Düzenle</a>

                            {{-- Sil --}}
                            <form action="/admin/sil/{{ $proje->id }}" method="POST"
                                  onsubmit="return confirm('Bu projeyi silmek istediğine emin misin?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:underline text-sm">Sil</button>
                            </form>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-8 text-center text-gray-400">Henüz proje yok.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection