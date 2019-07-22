const gulp     = require('gulp')
const pump     = require('pump')
const nunjucks = require('gulp-nunjucks')
const rename   = require('gulp-rename')
const beautify = require('gulp-html-beautify')
const data     = require('gulp-data')
const crypto   = require('crypto')

const paths = require('../paths')

const buildHtml = (mode) => (done) => {
  pump([
      gulp.src(paths.src.html),
      data(() => ({
        hash: crypto.createHash('md5').update(String(Date.now())).digest('hex').substr(-6)
      })),
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