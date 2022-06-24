# Simple blog

## Installation

#### 1. Composer

`` composer install ``


#### 2. Npm

`` npm install ``

`` npm run dev ``


#### 3. Laravel

`` cp .env.example .env ``

`` php artisan key:generate ``

`` php artisan storage:link ``


After creating the Database and providing credentials in .env file:

`` php artisan migrate --seed ``


## Development server

#### 1. Run local server

`` php artisan serve ``
