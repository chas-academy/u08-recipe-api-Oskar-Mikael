[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Issues][issues-shield]][issues-url]
<!-- TABLE OF CONTENTS -->
# U08 Laravel Recipe API
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li><a href="#about-the-project">About The Project</a>
            <ul>
                <li><a href="#built-with">Built With</a></li>
            </ul>
    </li>  
  </ol>
</details>

## About The Project<br>
### Built With
* [Laravel](https://laravel.com/)
* [Sanctum](https://laravel.com/docs/8.x/sanctum)

## Goals and Context
The goal of this project is to provide an API service for a recipe application, which is to be implemented with my other [Angular Recipe Application](https://github.com/chas-academy/u07-recipe-app-Oskar-Mikael). The Angular frontend was originally built without a backend in mind, but with this project, it is now possible to use backend functionality in the frontend. 
### Project Solves?
With this API, the frontend now has functionality for authentication using Laravel Sanctum, aswell as registering users. Users are then able to use CRUD methods to save recipes and ingredients to their own personal lists. With this, the users now have an easy to use design, as well as a quick way to save their favorite recipes to remember them at a later date.
<!-- GETTING STARTED -->
## Getting Started
### Installation
1. Clone down the repo
2. Install composer dependencies
```
composer install
```
3. Set up environment variables
4. Migrate the database
```
php artisan migrate
```
5. You're **done**! :tada:

## Team Github/LinkedIn
<!--Insert team members-->
*Oskar Boström* [GitHub](https://github.com/Oskar-Mikael) - [LinkedIn](https://www.linkedin.com/in/oskar-bostr%C3%B6m-6462b81b5/)<br>

<!-- MARKDOWN LINKS & IMAGES -->
[contributors-shield]: https://img.shields.io/github/contributors/chas-academy/u08-recipe-api-Oskar-Mikael.svg?style=for-the-badge
[contributors-url]: https://github.com/chas-academy/u08-recipe-api-Oskar-Mikael/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/chas-academy/u08-recipe-api-Oskar-Mikael.svg?style=for-the-badge
[forks-url]: https://github.com/chas-academy/u08-recipe-api-Oskar-Mikael/network/members
[issues-shield]: https://img.shields.io/github/issues/chas-academy/u08-recipe-api-Oskar-Mikael.svg?style=for-the-badge
[issues-url]: https://github.com/chas-academy/u08-recipe-api-Oskar-Mikael/issues
