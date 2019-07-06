const gulp         = require('gulp')
const pump         = require('pump')
const postcss      = require('gulp-postcss')
const flexbugs      = require('postcss-flexbugs-fixes')
const uncss        = require('postcss-uncss')
const autoprefixer  = require('autoprefixer')
const cssnano      = require('cssnano')
const mqpacker     = require('css-mqpacker')
const sortCSSmq    = require('sort-css-media-queries');
const sourcemaps   = require('gulp-sourcemaps')
const cssvars      = require('postcss-css-variables')
const custommedia  = require('postcss-custom-media')
const easings      = require('postcss-easings')
const nesting      = require('postcss-nesting')
const inlinesvg    = require('postcss-inline-svg')
const colorfunc    = require('postcss-color-function')
const qqueries     = require('postcss-quantity-queries')
const cssimport    = require('postcss-import')
const extend       = require('postcss-extend')

const paths = require('../paths')

const buildStyles = (mode, bs) => (done) => {
  const plugins =  [
    cssimport,
    nesting,
    mqpacker({
      sort: sortCSSmq
    }),
    extend,
    cssvars({
      preserve: true
    }),
    custommedia({
      preserve: true
    }),
    colorfunc,
    inlinesvg,
    qqueries,
    easings({
      easings: { easeJump: 'cubic-bezier(.86,0,.69,1.57)' }
    }),
    autoprefixer,
    flexbugs,
    ...((mode === 'production') ? [
      uncss({
        html: ['dist/**/*.html'],
        ignore: ['\.js-.*', '--']
      }),
      cssnano,
    ] : [])
  ]

  pump([
    gulp.src(paths.src.css),
    ...((mode === 'development') ? [sourcemaps.init({ loadMaps: true })] : []),
    postcss(plugins),
    ...((mode === 'development') ? [
      sourcemaps.write('./')
    ] : []),
    gulp.dest(paths.dist.css),
    ...(bs ? [bs.stream()] : [])
  ], done)
}

module.exports = buildStyles