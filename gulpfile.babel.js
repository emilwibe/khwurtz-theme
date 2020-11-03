"use strict";

import gulp from "gulp";
import sourcemaps from "gulp-sourcemaps";
import concat from "gulp-concat";
import cleanCSS from "gulp-clean-css";
import autoprefixer from "gulp-autoprefixer";
import uglify from "gulp-uglify-es";
import babel from "gulp-babel";

const paths = {
  css: [
    "./src/css/animations.css",
    "./src/css/base.css",
    "./src/css/layout.css",
    "./src/css/state.css",
    "./src/css/modules.css",
    "./src/css/plugin.css"
  ],
  jsFooter: [
    "./src/js/scripts-footer.js"
  ]
}

const buildCSS = () => {
  return gulp.src( paths.css )
    .pipe( sourcemaps.init() )
    .pipe( concat( "core.css" ) )
    .pipe(autoprefixer())
    .pipe( cleanCSS({compatibility: "*"}))
    .pipe( sourcemaps.write() )
    .pipe( gulp.dest( "./dist/" ))
}

const jsFooter = () => {
  return gulp.src( paths.jsFooter )
    .pipe( sourcemaps.init() )
    .pipe( concat( "scripts-footer.js" ) )
    .pipe( babel({
      presets: ['@babel/preset-env'],
      plugins: [["@babel/plugin-proposal-decorators", { "legacy": true }]]
    }) ) 
    .pipe( uglify() )
    .pipe( sourcemaps.write() )
    .pipe( gulp.dest( "./dist" ) )
}

// WATCH
const watchCSS = () => {
  gulp.watch( paths.css, gulp.series( buildCSS ) );
}


exports.default = gulp.series( buildCSS, jsFooter );
exports.watch = gulp.series( watchCSS );