# 🚀 Portfolio - Personal Portfolio Website

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

## 📋 Deskripsi

Website portofolio pribadi yang dibangun menggunakan **Laravel 11**. Menampilkan proyek-proyek, sertifikat dan informasi kontak dalam satu platform yang elegan dan responsif. Dilengkapi dengan fitur admin dashboard untuk mengelola konten secara dinamis.

## ✨ Fitur

- **Halaman Utama** - Landing page dengan informasi profil dan ringkasan
- **Projects** - Menampilkan daftar proyek dengan detail lengkap
- **Certificates** - Galeri sertifikat kursus dan pencapaian
- **Contact** - Formulir kontak dengan penyimpanan pesan ke database
- **Admin Dashboard** - Panel admin untuk mengelola:
  - Proyek (CRUD)
  - Sertifikat (CRUD)
  - Pesan kontak (lihat & kelola)
- **Authentication** - Sistem login admin yang aman
- **Responsive Design** - Tampilan yang optimal di semua perangkat

## 🛠️ Teknologi

| Teknologi | Kegunaan |
|-----------|----------|
| Laravel 11 | Framework PHP Backend |
| MySQL | Database |
| Tailwind CSS | Styling & Layout |
| Blade Templating | View Engine |
| Vite | Asset Bundling |

## ⚙️ Instalasi

```bash
# Clone repository
git clone https://github.com/Benhard121/Portofolio.git

# Masuk ke direktori project
cd Portofolio

# Install dependencies PHP
composer install

# Install dependencies JavaScript
npm install && npm run build

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Konfigurasi database di file .env
# DB_DATABASE=portofolio
# DB_USERNAME=root
# DB_PASSWORD=

# Jalankan migrasi dan seeder
php artisan migrate --seed

# Jalankan development server
php artisan serve
```

## 🔑 Akses Admin

| Role | Email | Password |
|------|-------|----------|
| Admin | admin@example.com | password |

Setelah login, akses panel admin di `/admin`.

## 📁 Struktur Direktori

```
Portofolio/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Admin/        # Admin Controllers
│   │       └── ...           # Public Controllers
│   └── Models/               # Eloquent Models
├── config/                   # Configuration files
├── database/
│   ├── migrations/           # Database migrations
│   └── seeders/              # Database seeders
├── public/
│   ├── images/               # Image assets
│   └── sertif/               # Certificate PDFs
├── resources/
│   └── views/                # Blade templates
└── routes/
    └── web.php               # Route definitions
```

## 📄 Lisensi

Hak cipta © 2024 **Benhard Simamora**. All rights reserved.

---

<p align="center">Dibangun dengan ❤️ menggunakan Laravel</p>