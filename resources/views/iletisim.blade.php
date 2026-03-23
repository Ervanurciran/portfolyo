@extends('layouts.ana')

@section('baslik', 'İletişim')

@section('icerik')

    <div class="max-w-2xl mx-auto px-6 py-16">

        <div class="mb-10 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-3">İletişime Geç 👋</h1>
            <p class="text-gray-500">Aklında bir proje mi var? Konuşalım!</p>
        </div>

        @if(session('basari'))
            <div class="bg-green-100 text-green-700 px-5 py-4 rounded-2xl mb-8 text-center font-medium">
                ✅ {{ session('basari') }}
            </div>
        @endif

        <form action="/iletisim" method="POST"
              class="bg-white border border-gray-100 rounded-3xl shadow-lg p-8 space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">İsim *</label>
                    <input type="text" name="isim" value="{{ old('isim') }}"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-400 transition"
                           placeholder="Adın Soyadın">
                    @error('isim')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Email *</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-400 transition"
                           placeholder="ornek@email.com">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Konu *</label>
                <input type="text" name="konu" value="{{ old('konu') }}"
                       class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-400 transition"
                       placeholder="Nasıl yardımcı olabilirim?">
                @error('konu')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Mesaj *</label>
                <textarea name="mesaj" rows="5"
                          class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-orange-400 transition"
                          placeholder="Mesajını buraya yaz...">{{ old('mesaj') }}</textarea>
                @error('mesaj')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                    class="w-full bg-orange-500 text-white py-3 rounded-xl font-bold hover:bg-orange-600 transition shadow-md text-lg">
                Gönder 🚀
            </button>

        </form>
    </div>

@endsection