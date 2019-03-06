var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var uncss = require('gulp-uncss');
var cssnano = require('gulp-cssnano');
var plumber = require('gulp-plumber');

/*const gulpDeployFtp = require('gulp-deploy-ftp');*/


gulp.task('sass', function () {
  return gulp.src('./resources/sass/*.scss')
    .pipe(plumber())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer({
     browsers:['last 20 versions'],
     add: true,
    cascade: false
   }))
    .pipe(gulp.dest('./public/css'));
});

/*gulp.task('deploy',function(){
    gulp.src('path/to/file')
  .pipe(gulpDeployFtp({
    remotePath: '/tmp',
    host: 'localhost',
    port: 21,
    user: 'foo',
    pass: 'bar'
  })
  .pipe(gulp.dest('dest')));
});*/
// Static Server + watching scss/html files



gulp.task('uncss', function () {
    return gulp.src('./site/css/**/*.css')
        .pipe(autoprefixer({
             browsers: ['last 99 versions'],
             cascade: false
         }))
        .pipe(gulp.dest('./public/css/'));
});


gulp.task('run', function(){

   browserSync.init({
         proxy: "http://lara-tur.ru"
    });

    gulp.watch('./resources/**/*.scss', ['sass']);
    
   gulp.watch(["resources/**/*.php",'public/css/*.css']).on('change', browserSync.reload);
});
