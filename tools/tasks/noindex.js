const gulp         = require('gulp')
const pump         = require('pump')

const paths = require('../paths')

const noIndex = (done) => {
  pump([
      gulp.src(paths.src.config.robots),
      gulp.dest(paths.dist.exact)
  ], done)
}

module.exports = noIndex