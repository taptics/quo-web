var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
        .publish(
            'jquery/dist/jquery.min.js',
            'public/js/vendor/jquery.min.js'
        )
        .publish(
            'jquery/dist/jquery.min.map',
            'public/js/vendor/jquery.min.map'
        )
        .publish(
            'bootstrap-sass-official/assets/javascripts/bootstrap.min.js',
            'public/js/vendor/bootstrap.min.js'
        )
        .publish(
            'angular/angular.min.js',
            'public/js/vendor/angular.min.js'
        )
        .publish(
            'angular/angular.min.js.map',
            'public/js/vendor/angular.min.js.map'
        )
        .publish(
            'typed.js/js/typed.js',
            'public/js/vendor/typed.js'
        )
        .publish(
            'bootstrap-sass-official/assets/fonts',
            'public/fonts'
        )
        .publish(
            'bootbox/bootbox.js',
            'public/js/vendor/bootbox.js'
        );
});
