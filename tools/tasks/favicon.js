const gulp         = require('gulp')
const pump         = require('pump')
const changed      = require('gulp-changed')

const paths = require('../paths')

const buildFavicon = (mode) => (done) => {
  pump([
      gulp.src(paths.src.favicon),
      changed(paths.dist.favicon),
      gulp.dest(paths.dist.favicon)
  ], done)
}

module.exports = buildFavicon