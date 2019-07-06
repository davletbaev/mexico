const gulp             = require('gulp')
const pump             = require('pump')
const gulpif           = require('gulp-if')
const changed          = require('gulp-changed')
const imagemin         = require('gulp-imagemin')
const imageminWebp     = require('imagemin-webp')
const imageminOptiPng  = require('imagemin-optipng')
const responsive       = require('gulp-responsive')
const spritesmith      = require('gulp.spritesmith')
const buffer           = require('vinyl-buffer')

const paths = require('../paths')

const buildSprite = (mode) => (done) => {
  pump([
    gulp.src('src/img/icons/png/**/*.png'),
    ...((mode === 'development') ? [ changed(paths.dist.images + '/sprite.png') ] : []),
    spritesmith({
      imgName: 'sprite.png',
      cssName: 'sprite.css',
    }),
    gulpif('*.css', gulp.dest('src/css/temp')),
    buffer(),
    responsive({
      '*.png': [
      {
        width: '25%',
        progressive: true,
        rename: {
          suffix: '@0.5x',
        }
      },{
        width: '25%',
        format: 'webp',
        rename: {
          suffix: '@0.5x'
        }
      },{
        width: '50%',
        progressive: true,
        rename: {
          suffix: '@1x',
        }
      },{
        width: '50%',
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: '100%',
        progressive: true,
        rename: {
          suffix: '@2x'
        }
      },{
        width: '100%',
        format: 'webp',
        rename: {
          suffix: '@2x'
        }
      }]
    }, {
      errorOnUnusedConfig: false,
      skipOnEnlargement: true,
      errorOnEnlargement: false,
      errorOnUnusedImage: false,
    }),
    ...((mode === 'production') ? [
      imagemin([
        imageminWebp({
          quality: 80,
          method: 4
        }),
        imageminOptiPng({
          optimizationLevel: 2,
          paletteReduction: true
        }),
      ])
    ] : []),
    gulp.dest(paths.dist.images)
  ], done)
}

module.exports = buildSprite