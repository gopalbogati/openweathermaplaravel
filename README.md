# 🌤️ OpenWeatherMap Laravel App

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=flat&logo=laravel&logoColor=white)
![API](https://img.shields.io/badge/OpenWeatherMap-API-orange?style=flat)

A Laravel web application that fetches and displays real-time weather data for any city worldwide using the **OpenWeatherMap API**. Shows temperature in both Kelvin and Celsius with date/time formatting.

---

## ✨ Features

- 🌍 Search weather for any city or country worldwide
- 🌡️ Temperature display in Celsius and Kelvin
- 📅 Formatted date and time output
- 🔁 Live API integration with OpenWeatherMap
- 📊 Data table with sortable results (jQuery DataTables)
- ✅ Unit tested with PHPUnit

---

## 🛠️ Tech Stack

| Technology | Purpose |
|---|---|
| PHP 7+ | Server-side language |
| Laravel 5.x | MVC Framework |
| OpenWeatherMap API | Live weather data |
| Bootstrap 4 | UI Styling |
| jQuery DataTables | Data display |
| PHPUnit | Testing |

---

## 🚀 Getting Started

### Prerequisites
- PHP >= 7.1
- Composer
- Free API key from [openweathermap.org](https://openweathermap.org/api)

### Installation

```bash
# Clone the repository
git clone https://github.com/gopalbogati/openweathermaplaravel.git
cd openweathermaplaravel

# Install dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate app key
php artisan key:generate
```

### Configure `.env`
```env
OPENWEATHER_API_KEY=your_api_key_here
OPENWEATHER_API_LANG=en
OPENWEATHER_API_DATE_FORMAT=m/d/Y
OPENWEATHER_API_TIME_FORMAT=h:i A
OPENWEATHER_API_DAY_FORMAT=l
```

### Run
```bash
php artisan serve
```
Visit `http://localhost:8000`

---

## 📁 Project Structure

```
openweathermaplaravel/
├── app/          # Controllers, Models
├── config/       # App configuration
├── database/     # Migrations & seeders
├── public/       # Entry point & assets
├── resources/    # Blade views
├── routes/       # Web & API routes
└── tests/        # PHPUnit tests
```

---

## 👤 Author

**Gopal Bogati**
- GitHub: [@gopalbogati](https://github.com/gopalbogati)
- LinkedIn: [Gopal Bogati](https://au.linkedin.com/in/gopal-bogati-4164b7b8)
- Location: Sydney, Australia
