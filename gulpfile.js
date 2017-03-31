let elixir = require('laravel-elixir');
elixir(function(mix) {
    mix.sass("app.scss");
    mix.webpack('resources/assets/js/app.js', 'public/js');
});
