# Basic Laravel Project Scaffolding
Basic [Laravel 5.1](https://github.com/laravel/laravel) project scaffolding with Gulp, Bower, LESS, &amp; Bootstrap.

## Overview
This project helps speed up the process of setting up a simple Laravel 5 project. It configures Bower, Gulp, and Bootstrap automatically in a maintainable way. It strives to keep vendor files seperate from project files and uses programming best practices where possible.

## Project Tree
There are a few minor alterations from a standard Laravel installation. Most importantly, we keep our Bower components outside of our project and in `/vendor/bower_components`. They will be imported and overriden with the help of LESS and Gulp, ensuring that we won't have to make any drastic code changes if we want to update a component.

```
.
├── resources
|   └── assets
|   	├── js
|   	|   └── application.js
|   	└── less
|       	├── application.less
|			├── bootstrap.less
|       	└── variables.less
|
├── public
|   └── assets
|       ├── css
|		├── fonts
|		├── images
|       └── js
|
└── vendor
    └── bower_components
```

## Getting Started
**Prerequirements:** You must have [Composer](https://getcomposer.org/) and [Node.js](https://nodejs.org/) installed on your system. You should also install Bower and Gulp globally (`npm install -g bower gulp`).

1. Run `composer update` to download and install composer packages
2. Rename `.env.example` to `.env` (`mv .env.example .env`) and then run `php artisan key:generate`
3. Install node packages with `npm install`. This will automatically run `bower install` and `gulp` once it has finished.
4. Run `gulp watch` and start developing