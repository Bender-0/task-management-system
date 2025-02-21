## Setup Instructions

1. Clone repository
2. Copy .env.example to .env
3. Configure database
4. Run:
   ```bash
   composer install
   php artisan key:generate
   php artisan migrate

Start server: php artisan serve