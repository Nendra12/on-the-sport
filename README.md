# on-the-sport
Website Berita Olahraga

## Instalasi

### 1. Clone Repository
```sh
git clone https://github.com/Nendra12/on-the-sport.git
cd on-the-sport
```

### 2. Install Dependensi
```sh
composer install
npm install && npm run dev
```

### 3. Konfigurasi Environment
Buat file `.env` dari template:
```sh
cp .env.example .env
```

### 4. Generate Key dan Migrate Database
```sh
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```

### 5. Menjalankan Aplikasi
```sh
php artisan serve
```
Akses website di `http://127.0.0.1:8000`

## Login ke Filament
Filament digunakan sebagai admin panel. Untuk mengaksesnya:
1. Buka: `http://127.0.0.1:8000/admin`
2. Gunakan akun admin default:
   - **Email:** `admin@example.com`
   - **Password:** `password123`

Jika tidak ada akun admin, buat dengan:
```sh
php artisan make:filament-user
```


