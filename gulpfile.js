var domain = "http://wpamp.dev";

var gulp = require('gulp'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    fileinclude = require('gulp-file-include'),
    runSequence = require('run-sequence'),
    browserSync = require('browser-sync').create();

var paths = {
    dev: 'dev/',
    scss: 'scss/',
    images: 'images/'
};

gulp.task('dev', ['render'], function() {
    browserSync.init({
        proxy: domain
    });

    gulp.watch(paths.scss + '**/*.scss', ['render']);
    gulp.watch('*.php').on('change', browserSync.reload);
});

gulp.task('sass', function() {
    return gulp.src([
        paths.scss + 'main.scss'
    ])
        .pipe(sass().on('error', sass.logError))
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(rename("all.min.css"))
        .pipe(gulp.dest(paths.dev));
});

gulp.task('watch', function() {
    gulp.watch([paths.scss + '**/*.scss'], ['render']);
});

gulp.task('add', function() {
    return gulp.src(
        paths.dev + 'all.min.css.php')
    .pipe(fileinclude({
        prefix: '@@',
        basepath: '@file'
    }))
    .pipe(gulp.dest('dist/'))
    .pipe(browserSync.stream());
});

gulp.task('render', function(callback) {
    runSequence('sass', 'add', callback);
});

gulp.task('default', function(callback) {
    runSequence('sass', 'add', callback);
});
