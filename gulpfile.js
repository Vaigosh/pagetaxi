var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*elixir(function(mix) {
    mix.sass('app.scss');
});
var gulp = require('gulp'),
    gutil = require('gulp-util'),
    browserify = require('gulp-browserify'),
    compass = require('gulp-compass'),

*/

elixir(function(mix) {
    mix.sass([
        'app.scss',
    ], 'public/assets/css')
    mix.styles([
        'blocks.css',
        'bootstrap.min.css',
        'box-shadows.css',
        'custom.css',
        'default.css',
        'footer-v7.css',
        'one.style.css',
        'page_log_reg_v2.css',
        'plugins.css',
        'style.css',
        'toastr.min.css'
    ], 'public/assets/css')
    mix.browserify([
        'custom.js',
        'app.js',
        'one.app.js',
        'contact.js',
        'login.js',
    ], 'public/assets/js');
});
