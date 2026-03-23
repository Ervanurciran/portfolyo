<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proje;

class ProjeSeeder extends Seeder
{
    public function run(): void
    {
        Proje::create([
            'isim' => 'E-Ticaret Sitesi',
            'aciklama' => 'Laravel ile geliştirilmiş tam kapsamlı bir alışveriş platformu.',
            'teknolojiler' => 'Laravel, MySQL, Tailwind CSS',
            'github_url' => 'https://github.com',
            'canli_url' => 'https://example.com',
        ]);

        Proje::create([
            'isim' => 'Blog Uygulaması',
            'aciklama' => 'Markdown destekli, kategori ve etiket sistemi olan bir blog.',
            'teknolojiler' => 'Laravel, Vue.js, MySQL',
            'github_url' => 'https://github.com',
            'canli_url' => null,
        ]);

        Proje::create([
            'isim' => 'Portfolyo',
            'aciklama' => 'Laravel 12 ve Tailwind CSS ile yapılmış kişisel portfolyo sitesi.',
            'teknolojiler' => 'Laravel, Tailwind CSS',
            'github_url' => 'https://github.com',
            'canli_url' => null,
        ]);
    }
}