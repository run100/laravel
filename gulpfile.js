//var elixir = require('laravel-elixir');

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



var gulp       = require('gulp'),
    elixir     = require('laravel-elixir'),
    ext        = require('gulp-ext-replace'),
    uglify     = require('gulp-uglify'),
    sourcemaps = require('gulp-sourcemaps'),
    cssmin     = require('gulp-cssmin');

require('laravel-elixir-remove');


var Task = elixir.Task;

elixir.extend('uglify', function(sourceFile, outputFolder)
{
    new Task('uglify', function()
    {
        return gulp.src(sourceFile)
            .pipe(sourcemaps.init())
            .pipe(uglify())
            .pipe(ext('.min.js'))
            .pipe(gulp.dest(outputFolder))
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest(outputFolder));
    }).watch([sourceFile]);
});

elixir.extend('cssmin', function(sourceFile, outputFolder)
{
    new Task('cssmin', function()
    {
        return gulp.src(sourceFile)
            .pipe(sourcemaps.init())
            .pipe(cssmin())
            .pipe(ext('.min.css'))
            .pipe(gulp.dest(outputFolder))
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest(outputFolder));
    }).watch([sourceFile]);
});


elixir(function(mix) {
    mix.sass('app.scss');
});


/*
elixir(function(mix) {
    mix.copy('resources/assets/js/crm.js', 'public/assets/js/');
    mix.copy('resources/assets/css/crm.css', 'public/assets/css/');
    mix.uglify('resources/assets/js/crm.js', 'public/assets/js/');

    mix.uglify('resources/assets/js/laravel.validate.js', 'public/assets/js/');

    mix.uglify('resources/assets/js/call/japp.js', 'public/assets/js/');

    mix.uglify('resources/assets/js/call/jbardisplay.js', 'public/assets/js/');

    mix.uglify('resources/assets/js/call/core.js', 'public/assets/js/');

    mix.cssmin('resources/assets/css/crm.css', 'public/assets/css/');

    elixir(function(mix) {
        mix.version(['assets/css/crm.css', 'assets/css/crm.min.css', 'assets/js/crm.js', 'assets/js/crm.min.js']);
    });
});*/
