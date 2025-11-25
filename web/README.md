<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project: BINALAVOGAN – Program Pemagangan Nasional

This repository contains a Laravel-based web application implementing the public website and basic decision-support dashboard for:

- **Direktorat Bina Penyelenggaraan Pelatihan Vokasi dan Pemagangan (BINALAVOGAN)**  
- Under **Ditjen Binalavotas, Kementerian Ketenagakerjaan Republik Indonesia (Kemnaker)**  

The site is designed to:

- Inform the public and stakeholders about the **Program Pemagangan Nasional**.
- Provide quick access to **registration**, **program information**, **documents**, and **contact/helpdesk**.
- Offer a **public statistics page** and an **internal dashboard skeleton** for decision-makers.
- Be mobile-first, accessible (WCAG-friendly), and ready for integration with **MagangHub** and internal BI systems.

## Project Structure (Laravel app in `web/` directory)

- `routes/web.php` – Public pages (beranda, tentang, program, pendaftaran, statistik, cerita sukses, dokumen, kontak) and internal dashboard route.
- `routes/api.php` – Example JSON API for aggregated statistics (`statistics_snapshots`) secured with `auth:sanctum`.
- `app/Http/Controllers` – Main controllers:
  - `PublicController`, `ProgramController`, `RegistrationController`, `StatisticsController`, `DashboardController`
  - `StoryController`, `NewsController`, `DocumentController`, `ContactController`, `LocaleController`
- `app/Models` – Domain models:
  - `Industry` (industry/BLK/LPK interest form)
  - `StatisticsSnapshot` (aggregated metrics per batch/province/sector)
- `database/migrations` – Core tables for users, cache, jobs, industries, and statistics snapshots.
- `resources/views` – Blade templates:
  - `layouts/app.blade.php` – Government-style layout (header, footer, navigation, language selector).
  - `pages/*` – Content pages (home, about, program, registration, statistics, stories, documents, news, contact).
  - `dashboard/internal.blade.php` – Internal decision dashboard skeleton.
  - `static/privacy.blade.php`, `static/terms.blade.php` – Privacy & terms placeholders.

## Running Locally (Linux / macOS)

1. **Enter the Laravel app directory**

```bash
cd web
```

2. **Copy `.env` and configure database**

```bash
cp .env.example .env
```

Edit `.env` and set at least:

```env
APP_NAME="BINALAVOGAN – Program Pemagangan Nasional"
APP_URL="https://binalavogan.local"  # or your local URL

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=binalavogan
DB_USERNAME=your_mysql_user
DB_PASSWORD=your_mysql_password
```

3. **Install PHP dependencies (Composer)**

```bash
composer install
```

4. **Install front-end assets (optional but recommended)**

```bash
npm install
npm run build   # or: npm run dev
```

5. **Generate application key**

```bash
php artisan key:generate
```

6. **Run database migrations**

```bash
php artisan migrate
```

7. **Serve the application**

```bash
php artisan serve
```

Then open `http://127.0.0.1:8000` in your browser.

## Deployment Notes (Linux Server + MySQL)

- Use **PHP-FPM** + **Nginx/Apache** and point the virtual host root to `web/public`.
- Ensure the following directories are writable by the web server user:
  - `storage/`, `bootstrap/cache/`
- Configure environment in `.env`:
  - `APP_ENV=production`
  - `APP_DEBUG=false`
  - `APP_URL=https://binalavogan.kemnaker.go.id` (or chosen domain)
- Use **HTTPS (SSL)** via reverse proxy / load balancer / web server configuration.
- Configure **MySQL backup** and rotation policy according to government ICT standards.

## Multilingual & Accessibility

- Default locale is **Bahasa Indonesia (`id`)**, fallback is **English (`en`)**.
- Locale switching is handled via `LocaleController` and session (`/lang/{locale}`).
- Basic translations are stored in:
  - `resources/lang/id/messages.php`
  - `resources/lang/en/messages.php`
- Layout and forms use semantic HTML, keyboard-focusable elements, and clear labels to support WCAG-aligned implementations.

## Analytics & MagangHub Integration (Placeholders)

- Google Analytics 4 script is prepared (commented) in `resources/views/layouts/app.blade.php`.
- Public statistics use mocked data but the structure is ready to connect to:
  - `statistics_snapshots` table or
  - External BI / MagangHub APIs via `StatisticsController` and `routes/api.php`.

## Next Steps / Customization

- Connect real data sources for statistics and dashboard (MagangHub API, internal DW/BI).
- Replace placeholder text and mock datasets with production content.
- Harden security further:
  - Add CAPTCHA to public forms (contact, industry registration).
  - Implement proper auth/roles for internal dashboard and API.
- Align visual identity with official Kemnaker guidelines (logo, color palette, typography).
