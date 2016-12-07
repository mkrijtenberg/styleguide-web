// Sass configuration
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
    gulp.src('site/sass/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/css/'))
});

gulp.task('default', ['sass'], function() {
    gulp.watch('**/*.scss', ['sass']);
})