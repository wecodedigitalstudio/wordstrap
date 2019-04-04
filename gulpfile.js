const { src, dest, parallel } = require('gulp');

function jQuery() {
    return src('node_modules/jquery/dist/jquery.min.js')
        .pipe(dest('assets/js'));
}

function bootstrapJs() {
    return src('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')
        .pipe(dest('assets/js'));
}

exports.build = parallel(jQuery, bootstrapJs);
