const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');

// jQuery
gulp.task("jquery", () => {
    gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest("assets/js"));
});

// Bootstrap Bundle JavaScript
gulp.task("bootstrap", () => {
    gulp.src('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')
        .pipe(gulp.dest("assets/js"));
});

// Bootstrap Scss
gulp.task('styles', () => {
    gulp.src(['assets/css/*.scss'])
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('assets/css'));
});

// Watch Scss
gulp.task('watch', () => {
    gulp.watch(['assets/css/*.scss'], ['styles']);
});

gulp.task('default', ['jquery', 'bootstrap', 'styles', 'watch']);
