## Setup Instructions

1. Clone repository
2. Copy .env.example to .env
3. Run:
   ```bash
   composer install
   php artisan key:generate
   php artisan migrate
   php artisan db:seed

4. Start server: php artisan serve