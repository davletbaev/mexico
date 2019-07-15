const gulp     = require('gulp')
const pump     = require('pump')
const nunjucks = require('gulp-nunjucks')
const rename   = require('gulp-rename')
const beautify = require('gulp-html-beautify')

const paths = require('../paths')

const buildHtml = (mode) => (done) => {
  pump([
      gulp.src(paths.src.html),
      nunjucks.compile(),
      beautify({
        indentSize: 2,
        indent_with_tabs: false,
        preserve_newlines: false,
      }),
      rename({
        dirname: '',
        // extname: ".php"
      }),
      gulp.dest(paths.dist.html)
  ], done)
}

module.exports = buildHtml