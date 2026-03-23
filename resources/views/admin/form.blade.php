@extends('layouts.ana')

@section('baslik', isset($proje) ? 'Projeyi Düzenle' : 'Yeni Proje Ekle')

@section('icerik')

    <div class="max-w-2xl mx-auto">

        <h1 class="text-3xl font-bold mb-8">
            {{ isset($proje) ? 'Projeyi Düzenle' : 'Yeni Proje Ekle' }}
        </h1>

        <form action="{{ isset($proje) ? '/admin/duzenle/'.$proje->id : '/admin/ekle' }}"
              method="POST"
              class="bg-white rounded-2xl shadow p-8 space-y-6">
            @csrf
            @if(isset($proje))
                @method('PUT')
            @endif

            {{-- Proje Adı --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Proje Adı *</label>
                <input type="text" name="isim"
                       value="{{ old('isim', $proje->isim ?? '') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="E-Ticaret Sitesi">
                @error('isim')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Açıklama --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Açıklama *</label>
                <textarea name="aciklama" rows="4"
                          class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                          placeholder="Proje hakkında kısa bir açıklama...">{{ old('aciklama', $proje->aciklama ?? '') }}</textarea>
                @error('aciklama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Teknolojiler --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Teknolojiler</label>
                <input type="text" name="teknolojiler"
                       value="{{ old('teknolojiler', $proje->teknolojiler ?? '') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="Laravel, MySQL, Tailwind CSS">
                <p class="text-gray-400 text-xs mt-1">Virgülle ayırarak yaz</p>
            </div>

            {{-- GitHub URL --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">GitHub URL</label>
                <input type="url" name="github_url"
                       value="{{ old('github_url', $proje->github_url ?? '') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="https://github.com/...">
            </div>

            {{-- Canlı URL --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Canlı Site URL</label>
                <input type="url" name="canli_url"
                       value="{{ old('canli_url', $proje->canli_url ?? '') }}"
                       class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                       placeholder="https://...">
            </div>

            {{-- Butonlar --}}
            <div class="flex gap-4 pt-2">
                <button type="submit"
                        class="bg-blue-600 text-white px-8 py-2 rounded-lg hover:bg-blue-700 transition">
                    {{ isset($proje) ? 'Güncelle' : 'Kaydet' }}
                </button>
                <a href="/admin"
                   class="bg-gray-100 text-gray-700 px-8 py-2 rounded-lg hover:bg-gray-200 transition">
                    İptal
                </a>
            </div>

        </form>
    </div>

@endsection