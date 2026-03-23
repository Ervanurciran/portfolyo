@extends('layouts.ana')

@section('baslik', 'Projeler')

@section('icerik')

    <div class="max-w-5xl mx-auto px-6 py-16">

        <div class="mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-2">Projelerim</h1>
            <p class="text-gray-500 text-lg">Üzerinde çalıştığım ve tamamladığım projeler</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($projeler as $proje)
                <div class="bg-white border border-gray-100 rounded-3xl shadow hover:shadow-lg transition overflow-hidden group">

                    {{-- Proje Görseli --}}
                    @if($proje->resim)
                        <img src="/storage/{{ $proje->resim }}" alt="{{ $proje->isim }}"
                             class="w-full h-48 object-cover group-hover:scale-105 transition duration-300">
                    @else
                        <div class="w-full h-48 bg-gradient-to-br from-orange-400 to-yellow-300 flex items-center justify-center">
                            <span class="text-white text-5xl">💻</span>
                        </div>
                    @endif

                    <div class="p-6">
                        <h2 class="text-xl font-bold text-gray-900 mb-2">{{ $proje->isim }}</h2>
                        <p class="text-gray-500 text-sm mb-4">{{ $proje->aciklama }}</p>

                        {{-- Teknolojiler --}}
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach(explode(',', $proje->teknolojiler) as $tek)
                                <span class="bg-orange-100 text-orange-700 text-xs px-3 py-1 rounded-full font-medium">
                                    {{ trim($tek) }}
                                </span>
                            @endforeach
                        </div>

                        {{-- Linkler --}}
                        <div class="flex gap-4">
                            @if($proje->github_url)
                                <a href="{{ $proje->github_url }}" target="_blank"
                                   class="text-sm font-semibold text-gray-700 hover:text-orange-500 transition">
                                    GitHub →
                                </a>
                            @endif
                            @if($proje->canli_url)
                                <a href="{{ $proje->canli_url }}" target="_blank"
                                   class="text-sm font-semibold text-orange-500 hover:text-orange-700 transition">
                                    Canlı Site →
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-gray-400 col-span-2 text-center py-12">Henüz proje eklenmemiş.</p>
            @endforelse
        </div>
    </div>

@endsection