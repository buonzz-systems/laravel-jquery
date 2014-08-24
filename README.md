Laravel jQuery
==============

[![Build Status](https://travis-ci.org/buonzz-systems/laravel-jquery.svg?branch=master)](https://travis-ci.org/buonzz-systems/laravel-jquery)

This package makes the jQuery Assets and Blade Extensions available for use in your blade templates.


# Installation

Edit your composer.json file, add this in the require property:

    "buonzz/laravel-jquery": "1.*"

fetch the package by:

    composer update

Add the service provider in your config/app.php file

    'Buonzz\LaravelJquery\LaravelJqueryServiceProvider'

Publish the assets

    php artisan asset:publish

## Usage

Use this Blade template tag to insert the js tag inside the head/body tag

    {{@jquery_js_tag}}

Your template should now have jQuery loaded

