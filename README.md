<div id="top"></div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#installation">Installation</a>
      <ul>
        <li><a href="#part-1">### Part 1 - Set up codebase locally</a></li>
        <li><a href="#part-2">### Part 2 - Set up .env with API Keys</a></li>
      </ul>
    </li>
    <li><a href="#user-log-in-details">User Log In Details</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

This is my Laravel PHP Project (with Vue.js and Inertia), that fetches forecast data for an inputted city,
and calculates a visual display of climate metrics based on the area's weather; informed by summarisations
made by openAI that uses current climate statics to contextualise the data.

Thanks to https://github.com/bruzp/laravel-inertia.git for the inital template.

### Built With

* [Inertia](https://inertiajs.com/)
* [DaisyUI](https://daisyui.com/)
* [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission/v5/introduction)

<!-- GETTING STARTED -->
## Installation

Follow these steps to run this project on your localhost.

Set up codebase locally:

1. Clone the repo
   ```sh
   git clone git@github.com:max-behrens/laravelInertiaWeather.git
   ```
2. Run composer install
   ```sh
   composer install
   ```
3. Create .env
   ```sh
   cp .env.example .env
   ```
4. Generate key
   ```sh
   php artisan key:generate
   ```
5. Run npm install
   ```sh
   npm install
6. Run npm run dev
   ```sh
   npm run dev
   ```
7. Run migration files
   ```sh
   php artisan migrate
   ```
8. Run seeders
   ```sh
   php artisan db:seed
   ```
9. Run on your localhost
   ```sh
   php artisan serve
   ```
