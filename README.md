## Laravel Clinic App
- Login to Admin (Doctor) Backoffice.
- Manage Patient, Drug, Appointment, Billing List.

## Installation

- `git clone https://github.com/naratipjamras/clinic-app.git`
- `cd clinic-app/`
- `composer install`
- `cp .env.example .env`
- Update `.env` and set your database credentials
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed --class=SettingsSeeder`
- `npm install`
- `npm run dev`
- `php artisan serve`
- Login admin@gmail.com with password 123456789
