const gulp = require('gulp'),
  browserSync = require('browser-sync'),
  sourcemaps = require('gulp-sourcemaps'),
  sass = require('gulp-sass'),
  images = require('gulp-imagemin'),
  rename = require('gulp-rename'),
  eslint = require('gulp-eslint'),
  babel = require('gulp-babel'),
  concat = require('gulp-concat'),
  webpack = require('webpack-stream');



gulp.task('serve', () => {
  browserSync.init({
    proxy: 'themebase.test'
  })

  gulp.watch('./src/sass/**/*.scss', ['sass'])
  gulp.watch('./src/img/**/*', ['images'])
  gulp.watch('./src/js/**/*.js', ['scripts'])
  gulp.watch('./**/*.php').on('change', browserSync.reload);
})


gulp.task('sass', () => {
  return gulp.src('./src/sass/style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream())
})


gulp.task('images', () => {
  return gulp.src('./src/img/**/*.{jpg,png,gif,svg}')
    .pipe(images())
    .pipe(gulp.dest('./img/'))
    .pipe(browserSync.reload())
})


gulp.task('scripts', () => {
  gulp.src('./src/js/**/*.js')
    .pipe(sourcemaps.init())
    .pipe(babel({
      presets: ['@babel/env']
    }))
    .pipe(concat('scripts.js'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./js'))
})


gulp.task('default', ['serve'])

// gulp.task('scripts', () => {
//   // eslint() attaches the lint output to the "eslint" property
//   gulp.src('./src/js/main.js')
//     // of the file object so it can be used by other modules.
//     .pipe(sourcemaps.init())
//     .pipe(eslint({
//         "env": {
//           "browser": true,
//           "es6": true
//         },
//         "parserOptions": {
//           "ecmaVersion": 6
//         },
//         "rules": {
//           "camelcase": 1
//         }
//     }))
//     // eslint.format() outputs the lint results to the console.
//     // Alternatively use eslint.formatEach() (see Docs).
//     .pipe(eslint.format())
//     // To have the process exit with an error code (1) on
//     // lint error, return the stream and pipe to failAfterError last.
//     .pipe(eslint.failAfterError())
//     .pipe(babel({
//       presets: ['env']
//     }))
//     .pipe(webpack({
//       watch: true,
//       module: {
//         rules: [
//           { test: /\.css$/, loader: 'style!css' },
//         ],
//       },
//       devtool: "source-map",
//       mode: 'development',
//       node: {
//         fs: "empty"
//       },
//       output: {
//         filename: 'main.js',
//       }
//     }))
//     .pipe(sourcemaps.write())
//     .pipe(gulp.dest('./js/'));
// })

// gulp.task('watch', () => {
//   gulp.watch('./src/sass/**/*.scss', ['css'])
//   gulp.watch('./src/img/**/*', ['images'])
//   gulp.watch('./src/js/**/*.js', ['scripts'])
// })

// gulp.task('default', ['css', 'scripts', 'images', 'browser-sync', 'watch'])