const paths = {
  config: [ 'package.json', 'gulpfile.js', 'tools/**/*.*' ],
  src: {
    html: 'src/html/**/[^_]*.html',
    css: 'src/css/*.css',
    js: 'src/js/**/*.js',
    images: ['src/img/**/*.{jpg,jpeg,png,webp}', '!src/img/icons/**/*'],
    icons: ['src/img/icons/**/*.svg','src/img/logo/*.svg'],
    fonts: 'src/fonts/**/*',
    favicon: 'src/favicon/**/*.ico',
    config: {
      robots: 'src/config/robots.txt'
    }
  },
  watch: {
    html: 'src/html/**/*.html',
    css: 'src/css/**/*.css',
    js: 'src/js/**/*.js',
    images: 'src/img/**/*.{jpg,jpeg,png,webp}',
    icons: ['src/img/icons/svg/**/*.svg','src/img/logo/*.svg'],
    fonts: 'src/fonts/**/*.{ttf,woff,woff2}',
    favicon: 'src/favicon/**/*.ico',
    config: {
      robots: 'src/config/robots.txt'
    }
  },
  dist: {
    exact: 'dist',
    html: 'dist',
    css: 'dist/css',
    js: 'dist/js',
    images: 'dist/img',
    fonts: 'dist/fonts',
    favicon: 'dist/favicon'
  }
}

module.exports = paths