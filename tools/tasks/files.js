const gulp         = require('gulp')
const pump         = require('pump')
const changed      = require('gulp-changed')

const paths = require('../paths')

const buildFiles = (mode) => (done) => {
  pump([
      gulp.src(paths.src.files),
      changed(paths.dist.files),
      gulp.dest(paths.dist.files)
  ], done)
}

module.exports = buildFiles