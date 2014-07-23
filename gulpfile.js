var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    // jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    clean = require('gulp-clean'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    gutil = require('gulp-util'),
    filesize = require('gulp-filesize'),
    gulpif = require('gulp-if'),
    argv = require('yargs').argv;

gulp.task('default', ['clean'], function() {
    gulp.start('styles', 'scripts', 'images');
});

gulp.task('watch', function() {
  livereload.listen();

  // Watch .scss files
  gulp.watch('app/assets/stylesheets/**/*.scss', ['styles']);

  // Watch .js files
  gulp.watch('app/assets/javascripts/**/*.js', ['scripts']);

  // Watch image files
  gulp.watch('app/assets/images/**/*', ['images']);

});

gulp.task('styles', function() {
  return gulp.src('app/assets/stylesheets/**/*.scss')
    .pipe(sass())
    .pipe(autoprefixer({ cascade: true }))
    .pipe(gulp.dest('public/assets/css'))
    .pipe(gulpif(argv.production, minifycss()))
    .pipe(gulpif(argv.production, rename({suffix: '.min'})))
    .pipe(gulpif(argv.production, gulp.dest('public/assets/css')))
    .pipe(notify({ message: 'Processing of styles complete' }))
    .on('error', gutil.log);
});

gulp.task('scripts', function() {
  return gulp.src('app/assets/javascripts/**/*.js')
    // .pipe(jshint('.jshintrc'))
    // .pipe(jshint.reporter('default'))
    .pipe(concat('main.js'))
    .pipe(gulp.dest('public/assets/js'))
    .pipe(filesize())
    .pipe(gulpif(argv.production, uglify()))
    .pipe(gulpif(argv.production, rename({suffix: '.min'})))
    .pipe(gulpif(argv.production, gulp.dest('public/assets/js')))
    .pipe(gulpif(argv.production, filesize()))
    .pipe(notify({ message: 'Processing of scripts complete' }))
    .on('error', gutil.log);
});

gulp.task('images', function() {
  return gulp.src('app/assets/images/**/*')
    .pipe(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true }))
    .pipe(gulp.dest('public/assets/img'))
    .pipe(notify({ message: 'Processing of images complete' }))
    .on('error', gutil.log);
});

gulp.task('clean', function() {
  return gulp.src(['public/assets/css', 'public/assets/js', 'public/assets/img'], {read: false})
    .pipe(clean());
});
