var gulp = require('gulp'),
    concat = require('gulp-concat'),
    sass = require('gulp-sass'),
    sassGlob = require('gulp-sass-glob'),
    prefixer = require('gulp-autoprefixer'),
    plumber = require('gulp-plumber');

gulp.task('styles', function () {
    gulp.src('assets/style/scss/main.scss')
        .pipe(plumber())
        .pipe(sassGlob())
        .pipe(sass({outputStyle: 'compressed'}))
        .pipe(prefixer('last 2 versions'))
        .pipe(concat('assets/style/style.css'))
        .pipe(gulp.dest(''));
});

gulp.task('watch', function () {
    gulp.watch('assets/style/scss/*.scss', ['styles']);
});
gulp.task('default', [
    'styles',
    'watch',
]);