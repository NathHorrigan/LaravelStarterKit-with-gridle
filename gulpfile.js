var elixir      = require('laravel-elixir'),
    gulp        = require('gulp');


elixir(function(mix) {

    mix.browserSync({
      proxy: 'codecrate.dev'
    });

    mix.sass([
      'app.scss',
    ]);

});
