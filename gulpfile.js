var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');


gulp.task('sass', function () {
  return gulp.src('./catalog/view/theme/phpner-wedding/sass/*.scss')
    .pipe(autoprefixer({
             browsers: ['last 99 versions'],
             cascade: false
         }))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./catalog/view/theme/phpner-wedding/stylesheet/'));
});

// Static Server + watching scss/html files
gulp.task('run', function(){

    browserSync.init({
         proxy: "http://open-3.ru"
    });

    gulp.watch('./catalog/view/theme/phpner-wedding/sass/*.scss', ['sass']);
    
    gulp.watch(['./catalog/view/theme/phpner-wedding/sass/*.scss','./catalog/view/theme/phpner-wedding/js/*.js']).on('change', browserSync.reload);
});