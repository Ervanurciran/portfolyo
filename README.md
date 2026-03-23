# 🚀 Personal Portfolio | Kişisel Portfolyo

A modern personal portfolio website built with Laravel 12 and Tailwind CSS.  
Laravel 12 ve Tailwind CSS ile geliştirilmiş modern bir kişisel portfolyo sitesi.

---

## 🇬🇧 English

### ✨ Features
- 🏠 Home page with hero section, skills, services and social media links
- 💼 Projects page with technology tags and live/GitHub links
- 📬 Contact form with database storage
- 🔐 Admin panel to manage projects and messages (CRUD)
- 📊 Message management with read/unread status
- 📱 Fully responsive design

### 🛠️ Technologies
| Technology | Version |
|------------|---------|
| PHP | 8.2 |
| Laravel | 12.x |
| Tailwind CSS | 3.x |
| MySQL | 8.x |
| Vite | 6.x |

### ⚙️ Installation

**1. Clone the repository**
```bash
git clone https://github.com/kullaniciadin/portfolyo.git
cd portfolyo
```

**2. Install dependencies**
```bash
composer install
npm install
```

**3. Environment setup**
```bash
cp .env.example .env
php artisan key:generate
```

**4. Configure database**

Open `.env` file and update:
```env
DB_DATABASE=portfolyo_db
DB_USERNAME=root
DB_PASSWORD=
```

**5. Run migrations and seeders**
```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
```

**6. Create admin user**
```bash
php artisan tinker
\App\Models\User::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => bcrypt('password')]);
```

**7. Start the development server**
```bash
php artisan serve
npm run dev
```

Visit **http://localhost:8000** 🎉

---

## 🇹🇷 Türkçe

### ✨ Özellikler
- 🏠 Hero alanı, beceriler, hizmetler ve sosyal medya bağlantıları içeren ana sayfa
- 💼 Teknoloji etiketleri ve GitHub/canlı site linkleri olan projeler sayfası
- 📬 Veritabanına kaydeden iletişim formu
- 🔐 Proje ve mesaj yönetimi için admin paneli (CRUD)
- 📊 Okundu/okunmadı durumlu mesaj yönetimi
- 📱 Tam responsive tasarım

### 🛠️ Teknolojiler
| Teknoloji | Sürüm |
|-----------|-------|
| PHP | 8.2 |
| Laravel | 12.x |
| Tailwind CSS | 3.x |
| MySQL | 8.x |
| Vite | 6.x |

### ⚙️ Kurulum

**1. Repoyu klonla**
```bash
git clone https://github.com/kullaniciadin/portfolyo.git
cd portfolyo
```

**2. Bağımlılıkları yükle**
```bash
composer install
npm install
```

**3. Ortam ayarları**
```bash
cp .env.example .env
php artisan key:generate
```

**4. Veritabanı ayarları**

`.env` dosyasını aç ve güncelle:
```env
DB_DATABASE=portfolyo_db
DB_USERNAME=root
DB_PASSWORD=
```

**5. Migration ve seeder çalıştır**
```bash
php artisan migrate
php artisan db:seed
php artisan storage:link
```

**6. Admin kullanıcısı oluştur**
```bash
php artisan tinker
\App\Models\User::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => bcrypt('sifre123')]);
```

**7. Geliştirme sunucusunu başlat**
```bash
php artisan serve
npm run dev
```

**http://localhost:8000** adresini ziyaret et 🎉

---

## 📁 Proje Yapısı | Project Structure
```
portfolyo/
├── app/Http/Controllers/
│   ├── PortfolyoController.php   # Public pages
│   └── AdminController.php       # Admin panel
├── app/Models/
│   ├── Proje.php                 # Project model
│   └── Mesaj.php                 # Message model
├── resources/views/
│   ├── layouts/ana.blade.php     # Main layout
│   ├── anasayfa.blade.php        # Home page
│   ├── projeler.blade.php        # Projects page
│   ├── iletisim.blade.php        # Contact page
│   └── admin/                    # Admin panel views
└── routes/web.php                # All routes
```

---

## 🔐 Admin Panel

After logging in at `/login`, visit `/admin` to manage your projects and messages.

Giriş yaptıktan sonra `/admin` adresinden proje ve mesajlarını yönetebilirsin.

---

*Made with using Laravel & Tailwind CSS*
