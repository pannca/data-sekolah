# 🎓 Sistem Manajemen Data Sekolah

Sistem manajemen data sekolah berbasis web yang dibangun dengan Laravel 10 dan Tailwind CSS. Aplikasi ini memungkinkan admin untuk mengelola data siswa dan guru dengan interface yang modern dan responsif.

## ✨ Fitur Utama

### 🔐 Autentikasi
- Login dan Register sederhana
- Role-based access (Admin & Siswa)
- Session management

### 👨‍💼 Dashboard Admin
- Statistik total siswa, guru, dan user
- Quick actions untuk menambah data
- Interface yang clean dan informatif

### 👨‍🎓 Dashboard Siswa
- Profil siswa yang terdaftar
- Interface khusus untuk siswa
- Coming soon features preview

### 📊 Manajemen Data
- **Siswa**: CRUD lengkap (Create, Read, Update, Delete)
- **Guru**: CRUD lengkap dengan data lengkap
- Form validation dan error handling
- Responsive table design

## 🛠️ Tech Stack

- **Backend**: Laravel 10
- **Frontend**: Tailwind CSS + Alpine.js
- **Authentication**: Laravel Breeze
- **Database**: MySQL
- **Server**: XAMPP

## 📋 Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL
- XAMPP

## 🚀 Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/pannca/data-sekolah.git
cd data-sekolah
```

### 2. Install Dependencies
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install
```

### 3. Environment Setup
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Database Configuration
Edit file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=data_sekolah
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Database Migration
```bash
# Create database
mysql -u root -p
CREATE DATABASE data_sekolah;
exit

# Run migrations
php artisan migrate
```

### 6. Build Assets
```bash
# Development
npm run dev

# Production
npm run build
```

### 7. Start Server
```bash
php artisan serve
```

Akses aplikasi di: `http://localhost:8000`

## 👤 Default Users

### Admin Account
- **Email**: admin@sekolah.com
- **Password**: password
- **Role**: admin

### Student Account
- **Email**: siswa@sekolah.com
- **Password**: password
- **Role**: siswa

*Note: Buat manual di database atau register sebagai siswa*

## 📁 Struktur Database

### Users Table
```sql
- id (Primary Key)
- name (VARCHAR)
- email (VARCHAR, Unique)
- password (VARCHAR)
- role (ENUM: 'admin', 'siswa')
- timestamps
```

### Siswa Table
```sql
- id (Primary Key)
- name (VARCHAR)
- nis (VARCHAR)
- rombel (VARCHAR)
- rayon (VARCHAR)
- tempat_lahir (VARCHAR)
- timestamps
```

### Guru Table
```sql
- id (Primary Key)
- name (VARCHAR)
- umur (INTEGER)
- nuptk (VARCHAR)
- mapel (VARCHAR)
- jenis_kelamin (ENUM: 'Laki-laki', 'Perempuan')
- timestamps
```

## 🎨 UI Components

### Design System
- **Colors**: Blue (Siswa), Green (Guru), Gray (Neutral)
- **Typography**: Inter font family
- **Icons**: Emoji + SVG icons
- **Layout**: Responsive grid system

### Pages
- Login/Register pages
- Admin & Student dashboards
- CRUD pages untuk Siswa & Guru
- Error handling pages

## 🔒 Security Features

- CSRF protection
- Input validation
- Role-based middleware
- Password hashing
- Session security

## 📱 Responsive Design

- Mobile-first approach
- Tablet & desktop optimized
- Touch-friendly interface
- Adaptive navigation

## 🚧 Development

### File Structure
```
app/
├── Http/Controllers/
│   ├── SiswaController.php
│   ├── GuruController.php
│   └── Auth/
resources/
├── views/
│   ├── admin/
│   ├── siswa/
│   ├── guru/
│   └── layouts/
routes/
├── web.php
└── auth.php
```

### Commands
```bash
# Development server
php artisan serve

# Watch assets
npm run dev

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## 🤝 Contributing

1. Fork repository
2. Create feature branch
3. Commit changes
4. Push to branch
5. Create Pull Request

## 📄 License

MIT License - bebas digunakan untuk pembelajaran dan pengembangan.

## 📞 Support

Untuk pertanyaan atau bantuan:
- Email: support@sekolah.com
- Issues: GitHub Issues

---

**Dibuat dengan ❤️ menggunakan Laravel & Tailwind CSS**
