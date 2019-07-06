const gulp         = require('gulp')
const pump         = require('pump')
const changed      = require('gulp-changed')
const ttf2woff     = require('gulp-ttf2woff')
const ttf2woff2    = require('gulp-ttf2woff2')

const paths = require('../paths')

const buildFonts = (mode) => (done) => {
  pump([
    gulp.src(paths.src.fonts + '.{woff,woff2}'),
    changed(paths.dist.fonts),
    ttf2woff(),
    gulp.dest(paths.dist.fonts)
  ])

  pump([
    gulp.src(paths.src.fonts + '.ttf'),
    changed(paths.dist.fonts),
    ttf2woff(),
    gulp.dest(paths.dist.fonts)
  ])

  pump([
    gulp.src(paths.src.fonts + '.ttf'),
    changed(paths.dist.fonts),
    ttf2woff2(),
    gulp.dest(paths.dist.fonts)
  ])
  
  done()
}

module.exports = buildFonts