const gulp       = require('gulp')
const rev        = require('gulp-rev')
const revreplace = require('gulp-rev-replace')
const revdelete  = require('gulp-rev-delete-original')
const pump       = require('pump')

const paths = './tools/paths'

const revision = async (done) => {
  await pump([
    gulp.src([`dist/**/*.{css,js}`, `!dist/js/vendor.js`]),
    rev(),
    revdelete(),
    gulp.dest('dist'),
    rev.manifest(),
    gulp.dest('./')
  ])

  const manifest = gulp.src('rev-manifest.json')
  
  await pump([
    gulp.src(`dist/**/*.html`),
    revreplace({manifest: manifest}),
    gulp.dest('dist')
  ])

  done()
}

module.exports = revision