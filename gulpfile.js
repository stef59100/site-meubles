const gulp = require('gulp');
const sass = require('gulp-sass');


sass.compiler = require('node-sass');

gulp.task('sass', function(){
    return gulp.src('scss/*')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('dist/css'));
});

gulp.task('message', function(){
    return console.log('gulp ok');
});

gulp.task('sass:watch', function () {
    gulp.watch('./scss/**/*.scss', ['sass']);
  });