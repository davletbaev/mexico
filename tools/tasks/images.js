const gulp             = require('gulp')
const pump             = require('pump')
const changed          = require('gulp-changed')
const imagemin         = require('gulp-imagemin')
const imageminWebp     = require('imagemin-webp')
const imageminMozjpeg  = require('imagemin-mozjpeg')
const imageminOptiPng  = require('imagemin-optipng')
const responsive       = require('gulp-responsive')

const paths = require('../paths')

const buildImages = (mode) => (done) => {
  pump([
    gulp.src(paths.src.images),
    ...((mode === 'development') ? [ changed(paths.dist.images) ] : []),
    responsive({
      '**/{feedback,team}/*.jpg': [
      {
        width: 150,
        height: 150,
        withoutEnlargement: false,
        format: 'jpg',
        rename: {
          suffix: '@1x',
        }
      },{
        width: 150,
        height: 150,
        withoutEnlargement: false,
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: 225,
        height: 225,
        withoutEnlargement: false,
        format: 'jpg',
        rename: {
          suffix: '@1.5x',
        }
      },{
        width: 225,
        height: 225,
        withoutEnlargement: false,
        format: 'webp',
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 300,
        height: 300,
        withoutEnlargement: false,
        format: 'jpg',
        rename: {
          suffix: '@2x',
        }
      },{
        width: 300,
        height: 300,
        withoutEnlargement: false,
        format: 'webp',
        rename: {
          suffix: '@2x'
        }
      },{
        width: 450,
        height: 450,
        withoutEnlargement: false,
        format: 'jpg',
        rename: {
          suffix: '@3x'
        }
      },{
        width: 450,
        height: 450,
        withoutEnlargement: false,
        format: 'webp',
        rename: {
          suffix: '@3x'
        }
      }],
      '**/{live,program}/*.jpg': [
      {
        width: 460,
        format: 'jpg',
        withoutEnlargement: false,
        rename: {
          suffix: '@1x',
        }
      },{
        width: 460,
        format: 'webp',
        withoutEnlargement: false,
        rename: {
          suffix: '@1x'
        }
      },{
        width: 720,
        format: 'jpg',
        withoutEnlargement: false,
        rename: {
          suffix: '@1.5x',
        }
      },{
        width: 720,
        format: 'webp',
        withoutEnlargement: false,
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 920,
        format: 'jpg',
        withoutEnlargement: false,
        rename: {
          suffix: '@2x'
        }
      },{
        width: 920,
        format: 'webp',
        withoutEnlargement: false,
        rename: {
          suffix: '@2x'
        }
      },{
        width: 1380,
        format: 'jpg',
        withoutEnlargement: false,
        rename: {
          suffix: '@3x'
        }
      },{
        width: 1380,
        format: 'webp',
        withoutEnlargement: false,
        rename: {
          suffix: '@3x'
        }
      }],
      '**/play-btn.jpg': [{
        width: 84,
        height: 84,
        format: 'jpg',
        rename: {
          suffix: '@1x',
        }
      },{
        width: 84,
        height: 84,
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: 126,
        height: 126,
        format: 'jpg',
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 126,
        height: 126,
        format: 'webp',
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 168,
        height: 168,
        format: 'jpg',
        rename: {
          suffix: '@2x'
        }
      },{
        width: 168,
        height: 168,
        format: 'webp',
        rename: {
          suffix: '@2x'
        }
      },{
        width: 252,
        height: 252,
        format: 'jpg',
        rename: {
          suffix: '@3x'
        }
      },{
        width: 252,
        height: 252,
        format: 'webp',
        rename: {
          suffix: '@3x'
        }
      }],
      '**/illustration1.png': [{
        width: 568,
        rename: {
          suffix: '@1x',
          ext: 'png'
        }
      },{
        width: 568,
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: 852,
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 852,
        format: 'webp',
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 1136,
        rename: {
          suffix: '@2x'
        }
      },{
        width: 1136,
        format: 'webp',
        rename: {
          suffix: '@2x'
        }
      },{
        width: 1704,
        rename: {
          suffix: '@3x'
        }
      },{
        width: 1704,
        format: 'webp',
        rename: {
          suffix: '@3x'
        }
      }],
      '**/illustration2.png': [{
        width: 607,
        rename: {
          suffix: '@1x'
        }
      },{
        width: 607,
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: 910,
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 910,
        format: 'webp',
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 1214,
        rename: {
          suffix: '@2x'
        }
      },{
        width: 1214,
        format: 'webp',
        rename: {
          suffix: '@2x'
        }
      },{
        width: 1821,
        rename: {
          suffix: '@3x'
        }
      },{
        width: 1821,
        format: 'webp',
        rename: {
          suffix: '@3x'
        }
      },{
        width: 2428,
        rename: {
          suffix: '@4x'
        }
      },{
        width: 2428,
        format: 'webp',
        rename: {
          suffix: '@4x'
        }
      }],
      '**/illustration3.png': [{
        width: 607,
        rename: {
          suffix: '@1x'
        }
      },{
        width: 607,
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: 910,
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 910,
        format: 'webp',
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 1214,
        rename: {
          suffix: '@2x'
        }
      },{
        width: 1214,
        format: 'webp',
        rename: {
          suffix: '@2x'
        }
      },{
        width: 1821,
        rename: {
          suffix: '@3x'
        }
      },{
        width: 1821,
        format: 'webp',
        rename: {
          suffix: '@3x'
        }
      },{
        width: 2428,
        rename: {
          suffix: '@4x'
        }
      },{
        width: 2428,
        format: 'webp',
        rename: {
          suffix: '@4x'
        }
      }],
      '**/illustration4.png': [{
        width: 600,
        rename: {
          suffix: '@1x'
        }
      },{
        width: 600,
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: 900,
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 900,
        format: 'webp',
        rename: {
          suffix: '@1.5x'
        }
      },{
        width: 1200,
        rename: {
          suffix: '@2x',
          ext: 'png'
        }
      },{
        width: 1200,
        format: 'webp',
        rename: {
          suffix: '@2x'
        }
      }],
      '**/illustration5.png': [{
        width: 548,
        rename: {
          suffix: '@1x'
        }
      },{
        width: 548,
        format: 'webp',
        rename: {
          suffix: '@1x'
        }
      },{
        width: 1096,
        rename: {
          suffix: '@2x'
        }
      },{
        width: 1096,
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
    // ...((mode === 'production') ? [
    //   imagemin([
    //     imageminWebp({
    //       quality: 80,
    //       method: 4
    //     }),
    //     imageminMozjpeg({
    //       quality: 80,
    //       progressive: true
    //     }),
    //     imageminOptiPng({
    //       optimizationLevel: 2,
    //       paletteReduction: true
    //     }),
    //   ])
    // ] : []),
    gulp.dest(paths.dist.images)
  ], done)
}

module.exports = buildImages