const gulp             = require('gulp')
const pump             = require('pump')
const gulpif           = require('gulp-if')
const changed          = require('gulp-changed')
const imagemin         = require('gulp-imagemin')
const imageminWebp     = require('imagemin-webp')
const imageminMozjpeg  = require('imagemin-mozjpeg')
const imageminOptiPng  = require('imagemin-optipng')
const responsive       = require('gulp-responsive')
const spritesmith      = require('gulp.spritesmith')

const paths = require('../paths')

const buildImages = (mode) => (done) => {
  pump([
    gulp.src(paths.src.images),
    ...((mode === 'development') ? [ changed(paths.dist.images) ] : []),
    responsive({
      '**/*.png': [
      {
        width: 600,
        progressive: true,
        rename: {
          suffix: '@0.5x',
        }
      },{
        width: 600,
        format: 'webp',
        rename: {
          suffix: '@0.5x'
        }
      },{
        width: 1200,
        progressive: true,
        rename: {
          suffix: '@1x',
        }
      },{
        width: 1200,
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: 2400,
        progressive: true,
        rename: {
          suffix: '@2x'
        }
      },{
        width: 2400,
        format: 'webp',
        rename: {
          suffix: '@2x'
        }
      }],
      '**/*.jpg': [{
        width: 600,
        progressive: true,
        rename: {
          suffix: '@0.5x',
          ext: 'jpg'
        }
      },{
        width: 600,
        format: 'webp',
        rename: {
          suffix: '@0.5x'
        }
      },{
        width: 1200,
        progressive: true,
        rename: {
          suffix: '@1x',
          ext: 'jpg'
        }
      },{
        width: 1200,
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: 2400,
        progressive: true,
        rename: {
          suffix: '@2x',
          ext: 'jpg'
        }
      },{
        width: 2400,
        format: 'webp',
        rename: {
          suffix: '@2x'
        }
      }]
    }, {
      errorOnUnusedConfig: false,
      skipOnEnlargement: true,
      errorOnEnlargement: false
    }),
    ...((mode === 'production') ? [
      imagemin([
        imageminWebp({
          quality: 80,
          method: 4
        }),
        imageminMozjpeg({
          quality: 80,
          progressive: true
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

module.exports = buildImages