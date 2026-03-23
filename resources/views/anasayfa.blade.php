@extends('layouts.ana')

@section('baslik', 'Ana Sayfa')

@section('icerik')

    {{-- HERO --}}
    <section style="background: linear-gradient(135deg, #fff7ed 0%, #fef3c7 100%);" class="px-6 py-20">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center gap-12">
            <div class="flex-1">
                <span class="bg-orange-500 text-white text-sm font-semibold px-4 py-1 rounded-full">
                    👋 Merhaba
                </span>
                <h1 class="text-5xl font-extrabold text-gray-900 mt-4 mb-3 leading-tight">
                    Erva Nur <br>
                    <span class="text-orange-500">CİRAN</span>
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    Intern Software Developer  · Bulut Bilişim Operatörlüğü 
                </p>
                <div class="flex gap-4">
                    <a href="/projeler" class="bg-orange-500 text-white px-7 py-3 rounded-full font-semibold hover:bg-orange-600 transition shadow-md">
                        Projelerimi Gör →
                    </a>
                    <a href="/iletisim" class="border-2 border-orange-500 text-orange-500 px-7 py-3 rounded-full font-semibold hover:bg-orange-100 transition">
                        İletişime Geç
                    </a>
                </div>
            </div>
            <div class="flex-shrink-0">
                <div class="w-64 h-64 rounded-full overflow-hidden border-4 border-orange-400 shadow-xl">
                    <img src="/images/profile/profile.jpg" alt="Profil" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    {{-- HAKKIMDA --}}
    <section style="background: linear-gradient(135deg, #f97316 0%, #f59e0b 100%);" class="py-16 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-white mb-6">Hakkımda</h2>
            <p class="text-orange-50 text-lg leading-relaxed">
                2006 yılında Sakarya'da doğdum. 2024 yılında Sakarya Uygulamalı Bilimler Üniversitesi Bulut Bilişim Operatörlüğü bölümünde eğitimme başlayarak yazılım geliştirme alanına adım attım. Üniversite süreci boyunca özellikle web geliştirme üzerine yoğunlaşarak PHP ve Laravel teknolojileriyle projeler geliştirmeye başladık.

                sadece bir meslek değil, aynı zamanda sürekli öğrenmeyi ve sorunu çözmeyi içeren bir alan olarak öğrenme . Bu doğrultuda arka uç geliştirme , veri tabanı yönetimi ve modern web teknolojileri üzerine aktarıyorum .

                Amacım; Ölçeklenebilir, güvenli ve kullanıcı odaklı web uygulamaları geliştirerek profesyonel yazılım kariyerimde sağlam bir temel oluşturmak. 

            </p>
        </div>
    </section>

    {{-- İSTATİSTİKLER --}}
    <section class="py-16 px-6 bg-white">
        <div class="max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6">
            <div style="background: linear-gradient(135deg, #f97316, #fb923c);" class="rounded-3xl p-6 text-center shadow-md">
                <p class="text-4xl font-extrabold text-white">1+</p>
                <p class="text-sm mt-1 text-orange-100">Tamamlanan Proje</p>
            </div>
            <div style="background: linear-gradient(135deg, #f59e0b, #fbbf24);" class="rounded-3xl p-6 text-center shadow-md">
                <p class="text-4xl font-extrabold text-white">1+</p>
                <p class="text-sm mt-1 text-yellow-100">Yıl Deneyim</p>
            </div>
            <div style="background: linear-gradient(135deg, #fb923c, #fcd34d);" class="rounded-3xl p-6 text-center shadow-md">
                <p class="text-4xl font-extrabold text-white">+</p>
                <p class="text-sm mt-1 text-orange-100">Mutlu Müşteri</p>
            </div>
            <div style="background: linear-gradient(135deg, #f97316, #f59e0b);" class="rounded-3xl p-6 text-center shadow-md">
                <p class="text-4xl font-extrabold text-white">2+</p>
                <p class="text-sm mt-1 text-orange-100">Teknoloji</p>
            </div>
        </div>
    </section>

    {{-- BECERİLER --}}
    <section style="background: linear-gradient(135deg, #fef3c7 0%, #fff7ed 100%);" class="py-16 px-6">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-10">Beceriler</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach([
                    ['isim' => 'Laravel', 'seviye' => 50],
                    ['isim' => 'PHP', 'seviye' => 30],
                    ['isim' => 'MySQL', 'seviye' => 30],
                    ['isim' => 'C#', 'seviye' => 75],
                    ['isim' => 'C', 'seviye' => 40],
                    ['isim' => 'Git', 'seviye' => 30],
                    ['isim' => 'REST API', 'seviye' => 40],
                ] as $beceri)
                    <div class="bg-white rounded-2xl p-5 shadow-sm hover:shadow-md transition">
                        <div class="flex justify-between items-center mb-2">
                            <span class="font-semibold text-gray-800">{{ $beceri['isim'] }}</span>
                            <span class="text-orange-500 font-bold text-sm">{{ $beceri['seviye'] }}%</span>
                        </div>
                        <div class="w-full bg-gray-100 rounded-full h-3">
                            <div style="width: {{ $beceri['seviye'] }}%; background: linear-gradient(90deg, #f97316, #fbbf24);"
                                 class="h-3 rounded-full transition-all duration-700"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- HİZMETLER --}}
    <section class="py-16 px-6 bg-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-gray-900 mb-10">Neler Yapıyorum?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div style="background: linear-gradient(135deg, #fff7ed, #fef3c7);" class="rounded-3xl p-6 border border-orange-100 hover:shadow-md transition">
                    <div class="text-4xl mb-4">🌐</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">Web Geliştirme</h3>
                    <p class="text-gray-500 text-sm">Laravel ile güçlü, hızlı ve güvenli web uygulamaları geliştiriyorum.</p>
                </div>
                <div style="background: linear-gradient(135deg, #fef3c7, #fff7ed);" class="rounded-3xl p-6 border border-yellow-100 hover:shadow-md transition">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">UI Tasarım</h3>
                    <p class="text-gray-500 text-sm">Tailwind CSS ile modern, responsive ve kullanıcı dostu arayüzler tasarlıyorum.</p>
                </div>
                <div style="background: linear-gradient(135deg, #fff7ed, #fef9c3);" class="rounded-3xl p-6 border border-orange-100 hover:shadow-md transition">
                    <div class="text-4xl mb-4">🔌</div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">API Geliştirme</h3>
                    <p class="text-gray-500 text-sm">RESTful API'lar tasarlayıp üçüncü parti servislerle entegrasyon sağlıyorum.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- SOSYAL MEDYA --}}
    <section style="background: linear-gradient(135deg, #f97316 0%, #f59e0b 100%);" class="py-16 px-6 text-center">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-white mb-4">Beni Takip Et</h2>
            <p class="text-orange-100 mb-8">Sosyal medyada bağlantıda kalalım!</p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="https://github.com/Ervanurciran" target="_blank"
                   class="bg-gray-900 text-white px-7 py-3 rounded-full font-semibold hover:bg-gray-700 transition">
                    GitHub
                </a>
                <a href="https://www.linkedin.com/feed/" target="_blank"
                   class="bg-blue-600 text-white px-7 py-3 rounded-full font-semibold hover:bg-blue-700 transition">
                    LinkedIn
                </a>
                <a href="https://www.instagram.com/ervanurciran/" target="_blank"
                class="bg-gradient-to-tr from-yellow-400 via-red-500 to-purple-600 text-white px-7 py-3 rounded-full font-semibold hover:shadow-lg hover:opacity-90 transition shadow-md">
                    Instagram
                </a>
                <a href="https://nsosyal.com/ervanurciran" target="_blank"
                class="bg-gradient-to-r from-[#00ffea] to-[#0071b3] text-white px-7 py-3 rounded-full font-semibold hover:from-[#0071b3] hover:to-[#007b8b] transition shadow-md inline-block">
                N-Sosyal
                </a>
                </a>
            </div>
        </div>
    </section>

@endsection