const gulp          = require('gulp')
const pump          = require('pump')
const webpack       = require('webpack')
const webpackStream = require('webpack-stream')

const paths = require('../paths')

const buildScripts = (mode) => (done) => {
  const webpackConfig = require('../webpack')(mode)

  pump([
      gulp.src(paths.src.js),
      webpackStream(webpackConfig, webpack),
      gulp.dest(paths.dist.js)
  ], done)
}

module.exports = buildScripts