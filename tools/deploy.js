const gulp   = require('gulp');
const deploy = require('gulp-gh-pages');

const deployTask = () => {
  return gulp.src("./dist/**/*")
    .pipe(deploy({
      branch: "master"
    }))
}

module.exports = deployTask