var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefix = require('gulp-autoprefixer'),
    browserSync = require('browser-sync'),
    reload = browserSync.reload;

/**
 * ------------------------------------------------------
 * Settings
 * ------------------------------------------------------
 */
var config = {
    proxy: 'warpaint.dev', // browsersync proxy
    src: './src/sass',
    dest: './dist'
};

gulp.task('sass', function() {
    return gulp.src(config.src + '/warpaint.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefix({cascade:false, browsers: ['> 1%']}))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest(config.dest))
        .pipe(reload({ stream:true }));
});

gulp.task('watch',function(){
    browserSync({
        proxy: config.proxy
    });

    gulp.watch(config.src+'/**/*.scss',['sass'],browserSync.reload());
});

gulp.task('default', ['sass']);