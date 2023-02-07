const {src, dest, watch, series} = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const browsersync = require('browser-sync').create();

//Sass task
function scssTask(){
    return src('assets/sass/style.scss', { sourcemaps: true })
      .pipe(sass())
      .pipe(postcss([cssnano()]))
      .pipe(dest('assets-results/css', { sourcemaps: '.' }));
  }

//JavaScript Task
function jsTask(){
    return src('assets/js/custom.js', {sourcemaps: true})
        .pipe(terser())
        .pipe(dest('assets-results/js', { sourcemaps: '.'} ));
}

// Browsersync Tasks



function browsersyncReload(cb){
    browsersync.reload();
    cb();
}

// Watch Task
function watchTask(){
    watch('*.php', browsersyncReload);
    watch(['assets/sass/**/*.scss', 'assets/js/**/*.js'], series(scssTask, jsTask, browsersyncReload));
    watch('localhost:10058/', browsersyncReload)
}
  
// Default Gulp task
exports.default = series(
    scssTask,
    jsTask,
    watchTask
  );





