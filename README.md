# Vehicle Info

A Laravel web application to store, search and manage vehicle information (VIN lookup, registration details, maintenance history, and more). This repository provides a clean, extensible starting point for vehicle-related tooling and services built on top of Laravel.

- Framework: Laravel (PHP)
- Purpose: Store and retrieve vehicle records, integrate VIN-decoding or external APIs, and provide an admin interface and API for clients.

---

## Table of Contents

- [Features](#features)
- [Tech stack](#tech-stack)
- [Requirements](#requirements)
- [Installation](#installation)
- [Environment configuration](#environment-configuration)
- [Database](#database)
- [Frontend assets](#frontend-assets)
- [Running the app](#running-the-app)
- [Testing](#testing)
- [Common tasks](#common-tasks)
- [API & integrations](#api--integrations)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

---

## Features

- CRUD for vehicles (make, model, year, VIN, registration, owner info, notes)
- VIN lookup / decoding integration (optional external API)
- Search and filters (by VIN, make, model, year, owner)
- Import/export CSV for bulk data
- Basic user authentication and role-based access (admin/user)
- API endpoints for integration with other services
- Database migrations and seeders for sample data

(Adjust feature list to match what's actually implemented in your repo.)

---

## Tech stack

- PHP (Laravel)
- Composer
- MySQL / MariaDB (or other supported DB)
- Node.js + NPM / Yarn (for frontend assets)
- (Optional) Docker / Laravel Sail

---

## Requirements

- PHP >= 8.1 (verify with your Laravel version)
- Composer
- Node.js >= 16 and npm or Yarn
- MySQL, MariaDB, or another supported database
- Git

Optional:
- Docker & Docker Compose (if using containers or Laravel Sail)

---

## Installation

1. Clone the repository
   git clone https://github.com/sanjanarathnyke/vehicle-info.git
   cd vehicle-info

2. Install PHP dependencies
   composer install

3. Install JS dependencies and build assets
   npm install
   npm run dev
   # or for production
   npm run build

4. Copy the environment file
   cp .env.example .env

5. Generate application key
   php artisan key:generate

6. Configure `.env` (see next section)

---

## Environment configuration

Edit the `.env` file to match your environment. Example required variables:

APP_NAME="Vehicle Info"
APP_ENV=local
APP_KEY=base64:...
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vehicle_info
DB_USERNAME=root
DB_PASSWORD=secret

# Optional (VIN decode API, mail, etc. — replace with actual providers/keys)
VIN_API_PROVIDER=your_vin_provider
VIN_API_KEY=your_api_key

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="no-reply@example.com"
MAIL_FROM_NAME="${APP_NAME}"

Be sure to update values to match your local database and credentials.

---

## Database

Run migrations and (optionally) seed sample data:

php artisan migrate
# To run seeders (if provided)
php artisan db:seed

If you want a fresh database with migrations and seeders:
php artisan migrate:fresh --seed

If using Docker / Sail:
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate --seed

---

## Frontend assets

- Install Node packages: `npm install`
- Local development build: `npm run dev`
- Production build: `npm run build`
- You may use Laravel Mix, Vite, or whichever build tool is configured.

If the project uses storage for user-uploaded files:
php artisan storage:link

---

## Running the app

Start local server:

php artisan serve

Visit: http://127.0.0.1:8000

If using Docker / Sail:
./vendor/bin/sail up -d
./vendor/bin/sail artisan serve --host=0.0.0.0 --port=80

---

## Testing

Run the test suite:

php artisan test
# or using PHPUnit directly:
vendor/bin/phpunit

Add tests for models, controllers and API endpoints as you implement features.

---

## Common tasks & commands

- Create a new migration:
  php artisan make:migration create_vehicles_table

- Create a new model with controller and migration:
  php artisan make:model Vehicle -mcr

- Make a seeder:
  php artisan make:seeder VehicleSeeder

- Run queued jobs locally:
  php artisan queue:work

- Clear caches:
  php artisan cache:clear
  php artisan route:clear
  php artisan config:clear
  php artisan view:clear

---

## API & integrations

If the app integrates with a VIN-decoding service or other third-party APIs:
- Store API keys in `.env`
- Add retries, timeouts, and error handling for external calls
- Consider caching VIN results to limit external requests

Document available API endpoints (e.g., /api/vehicles, /api/vehicles/{id}) and expected request/response structures in a separate API docs file or OpenAPI spec.

---

## Contributing

Contributions are welcome. Suggested workflow:

1. Fork the repository
2. Create a feature branch: `git checkout -b feat/your-feature`
3. Implement your changes and add tests
4. Run tests and linters
5. Submit a pull request describing your changes

Please follow the existing code style and add tests for new behavior where applicable.

---

## Troubleshooting

- "Cannot find composer": install Composer globally or use the composer.phar shipped locally.
- Database connection errors: verify `.env` DB_* values and that your DB server is running.
- Permission issues with storage: run `chmod -R 775 storage bootstrap/cache` (or adjust for your environment).

---

## License

This project is open source and available under the MIT License. See the LICENSE file for details.

---

Acknowledgements
- Built with Laravel — https://laravel.com
