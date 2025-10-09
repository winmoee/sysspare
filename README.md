<p align="center">
  <img src="https://sys-shop.s3.ap-southeast-1.amazonaws.com/websiteFiles/SYS+LOGO.png" width="130" alt="Seinn Yaung So Logo">
</p>

<h1 align="center">Seinn Yaung So Spare Parts & Services</h1>

<p align="center">
  <b>Modern Laravel-based e-commerce and service platform for tractor spare parts, services, and support in Myanmar.</b>
</p>

---

## About This Project

Seinn Yaung So is a web application built with Laravel, designed to provide a seamless experience for browsing, searching, and purchasing tractor spare parts, as well as accessing related services and support. The platform is tailored for the Myanmar market, supporting both English and Myanmar languages.

**Key Features:**

-   Modern, responsive landing page with hero, carousel, and service cards
-   Modular Blade partials for maintainable and reusable UI sections
-   Product and spare parts catalog with search and filtering
-   Multi-language support (English & Myanmar)
-   User authentication and profile management
-   Contact and feedback forms
-   Wave payment integration
-   Admin and user dashboards

---

## Project Structure

-   **resources/views/welcome.blade.php**
    Main landing page, now modularized with Blade partials for hero, carousel, and service cards.
-   **resources/views/partials/**
    Contains reusable UI sections (e.g., `service-cards.blade.php`, `showroom-carousel.blade.php`).
-   **public/images/**
    Local images and assets for the site.
-   **app/Http/Controllers/**
    Application logic for products, spares, feedback, etc.
-   **lang/en/messages.php & lang/my/messages.php**
    Language files for localization.

---

## Getting Started

### Prerequisites

-   PHP >= 8.1
-   Composer
-   Node.js & npm (for frontend assets)
-   SQLite (default) or MySQL

### Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/yourusername/sysspare.git
    cd sysspare
    ```

2. **Install dependencies:**

```bash
composer install
npm install && npm run build
```

3. **Copy and configure environment:**

```bash
cp .env.example .env
# Edit .env as needed (DB, mail, etc.)
php artisan key:generate
```

4. **Run migrations:**

```bash
php artisan migrate
```

5. **Serve the application:**

```bash
php artisan serve
```

6. **Access the site:**

-   Visit http://localhost:8000

### Usage

-   **Browse products and spares:** Use the catalog and search features to find parts.
-   **Switch language:** Use the language switcher for English/Myanmar.
-   **Contact & feedback:** Submit forms for support or feedback.
-   **Admin features:** Manage products, spares, and users (if you have admin access).

### Development Notes

-   **UI is modularized:** Major sections are in Blade partials for easy updates and reuse.
-   **Images:** Place local images in `public/images/` and reference with `{{ asset('images/your-image.jpg') }}`.
-   **Responsive design:** All main sections and images are optimized for mobile and desktop.
-   **Testing:** Feature and unit tests are in the `tests/` directory.

### Contributors

-   winnmoe (Project Lead)
-   kaungsanthwin388
-   naychiwin04
-   kyisinthein
-   saihanhtet

### Credits

-   Built with Laravel
-   Icons and images © Seinn Yaung So
