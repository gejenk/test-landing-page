# LuxeLand - Luxury Modern Landing Page

Landing page Laravel yang mewah dan modern dengan fitur lengkap.

## 🎨 Fitur Utama

✨ **Navigation Bar** - Header tetap dengan smooth scrolling  
🎯 **Hero Section** - Banner yang eye-catching dengan CTA buttons  
⚡ **Features Section** - Showcase 6 fitur unggulan  
💰 **Pricing Section** - 3 paket dengan harga berbeda  
💬 **Testimonials** - Review dari pelanggan nyata  
📧 **Contact Form** - Form kontak dengan validasi  
📰 **Newsletter** - Subscribe untuk email marketing  
👣 **Footer** - Footer profesional dengan links  

## 🚀 Setup & Installation

### 1. Clone Repository
```bash
git clone https://github.com/gejenk/test-landing-page.git
cd test-landing-page
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Jalankan Development Server

Terminal 1 - Vite Development Server:
```bash
npm run dev
```

Terminal 2 - Laravel Server:
```bash
php artisan serve
```

### 5. Buka di Browser
```
http://localhost:8000
```

## 📁 Struktur File

```
.
├── app/
│   └── Http/Controllers/
│       └── LandingPageController.php   # Main controller
├── resources/
│   ├── css/
│   │   └── app.css                     # Tailwind CSS + custom styles
│   ├── js/
│   │   └── app.js                      # JavaScript animations
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php           # Main layout
│       └── landing/
│           └── index.blade.php         # Landing page view
├── routes/
│   └── web.php                         # Web routes
├── tailwind.config.js                  # Tailwind configuration
├── vite.config.js                      # Vite bundler config
└── package.json                        # Node dependencies
```

## 🎯 Routes

| Route | Method | Description |
|-------|--------|-------------|
| `/` | GET | Landing page utama |
| `/contact` | POST | Submit form kontak |
| `/newsletter` | POST | Subscribe newsletter |

## 🛠️ Customization

### Mengubah Warna
Edit `tailwind.config.js` di bagian theme colors atau langsung modify warna gradient di template.

### Menambah Fitur
Edit `resources/views/landing/index.blade.php` untuk menambah atau mengubah section.

### Mengubah Konten
Semua teks dapat diubah langsung di blade template.

## 📦 Build untuk Production

```bash
npm run build
php artisan config:cache
```

## 🔧 Dependencies

- **Laravel 11.x**
- **Tailwind CSS 3.x**
- **Vite 5.x**
- **Node.js 18+**

## 📝 Lisensi

MIT License

## 👨‍💼 Author

Gejenk - 2026

## 📞 Support

Jika ada pertanyaan atau issue, silakan buat issue baru di repository ini.
