'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');
var gutil = require('gulp-util');

gulp.task('js', function () {
    //concat in order, init.js excluded until last.
    gulp.src(
        [
        './src/js/index.js',
        './src/js/**/!(init)*.js',
        './src/js/modules/init.js'
        ])
    .pipe(concat('main.js'))
    .pipe(buffer())
    .pipe(sourcemaps.init({loadMaps: true}))
    // Add transformation tasks to the pipeline here.
    .pipe(uglify())
    .on('error', gutil.log)
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./dist/scripts/'));
});

gulp.task('styles', function() {
    gulp.src('./src/sass/**/*.scss')
    .pipe(sass({
        outputStyle: 'compressed',
        errLogToConsole: true
    }))
    .pipe(gulp.dest('./dist/styles/'));
});

gulp.task('copy', function() {
    // stylesheet images
    gulp.src('./src/images/styles/**/*')
        .pipe(gulp.dest('./dist/styles/images/'))
});

gulp.task('build', ['styles','copy','js']);

// watch task
gulp.task('default',function() {
    gulp.watch('sass/**/*.scss',['styles']);
});