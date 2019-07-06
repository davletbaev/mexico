const gulp        = require('gulp')
const browserSync = require('browser-sync')

const paths  = require('./tools/paths')
const tasks  = require('./tools/tasks')
const deploy = require('./tools/deploy')

/**
* Generic Task for all Main Gulp Build/Export Tasks
* @param {stirng} - mode (NODE_ENV) production / development
*/
const genericTask = (mode = 'development') => {
  const modeType = mode !== 'production' ? 'Development mode' : 'Production mode'

  const isDev = mode === 'development'

  // Browser Loading & Watching
  const startBrowserSync = (done) => {
    const bs = browserSync.init({
      server: {
        baseDir: "./dist",
        serveStaticOptions: {
          extensions: ['html']
        }
      },
      ui: false,
      https: true,
      port: 3000,
      open: false,
      reloadOnRestart: true
    })

    // Watch - HTML
    gulp.watch(paths.watch.html)
    .on('all', gulp.series(
      Object.assign(tasks.clean(`${paths.dist.html}/**/*.html`), { displayName: 'Clean HTML' }),
      Object.assign(tasks.views(mode), { displayName: `Watching HTML` }),
      Object.assign(bs.reload, { displayName: `Reloading browser` })
    ))

    // Watch - Images
    gulp.watch(paths.watch.images)
    .on('all', gulp.series(
      Object.assign(tasks.images(mode), { displayName: `Watching Images` }),
      Object.assign(bs.reload, { displayName: `Reloading browser` })
    ))

    // Watch - SVG
    gulp.watch(paths.watch.icons)
    .on('all', gulp.series(
      Object.assign(tasks.clean(`${paths.dist.images}/icons.svg`), { displayName: 'Clean SVG Sprite' }),
      Object.assign(tasks.sprite(mode), { displayName: `Watching SVG` }),
      Object.assign(bs.reload, { displayName: `Reloading browser` })
    ))

    // Watch - Fonts
    gulp.watch(paths.watch.fonts)
    .on('all', gulp.series(
      Object.assign(tasks.clean(paths.dist.fonts), { displayName: 'Clean Fonts' }),
      Object.assign(tasks.fonts(mode), { displayName: `Watching Fonts` }),
      Object.assign(bs.reload, { displayName: `Reloading browser` })
    ))

    // Watch - Favicon
    gulp.watch(paths.watch.favicon)
    .on('all', gulp.series(
      Object.assign(tasks.clean(paths.dist.favicon), { displayName: 'Clean Favicons' }),
      Object.assign(tasks.favicon(mode), { displayName: `Watching Favicon` }),
      Object.assign(bs.reload, { displayName: `Reloading browser` })
    ))

    // Watch - Styles
    gulp.watch(paths.watch.css)
    .on('all', gulp.series(
      Object.assign(tasks.clean([paths.dist.css, 'src/css/css-modules.json']), { displayName: 'Clean Styles' }),
      Object.assign(tasks.styles(mode, bs), { displayName: `Watching Styles` }),
    ))

    // Watch - Scripts
    gulp.watch(paths.watch.js)
    .on('all', gulp.series(
      Object.assign(tasks.scripts(mode), { displayName: `Watching Scripts` }),
      Object.assign(bs.reload, { displayName: `Reloading browser` })
    ))

    done()
  }

  // Building tasks series
  return [
    Object.assign(tasks.clean('dist'), { displayName: `Clean bulding folder - ${ modeType }` }),
    Object.assign(tasks.views(mode), { displayName: `Build HTML - ${ modeType }` }),
    Object.assign(tasks.scripts(mode), { displayName: `Build Scripts - ${ modeType }` }),
    Object.assign(tasks.styles(mode), { displayName: `Build Styles - ${ modeType }` }),
    Object.assign(tasks.images(mode), { displayName: `Build Images - ${ modeType }` }),
    Object.assign(tasks.sprite(mode), { displayName: `Build PNG Sprite- ${ modeType }` }),
    Object.assign(tasks.svg(mode), { displayName: `Build SVG Sprite- ${ modeType }` }),
    Object.assign(tasks.fonts(mode), { displayName: `Build Fonts - ${ modeType }` }),
    isDev && Object.assign(startBrowserSync, { displayName: `Browser Loading & Watching Task` }),
    !isDev && Object.assign(tasks.noindex, { displayName: `Added Robots.txt to prevent indexing` }),
    !isDev && Object.assign(tasks.revision, { displayName: `Creating New Revision` })
  ].filter(Boolean)
}

/**
* Main Gulp tasks that are inserted within `package.json`
*/
// Default task with watching for gulpfile and tools folder updates (`npm start` or `yarn start`) => Development
gulp.task('serve', tasks.autoreload)

// Dev (`npm run dev` or `yarn dev`) => Development
gulp.task('dev', gulp.series(...genericTask('development')))

// Build (`npm run build` or `yarn build`) => Production
gulp.task('build', gulp.series(...genericTask('production')))

// Deploy to GitHub Pages
gulp.task('deploy', Object.assign(deploy, { displayName: `Deploying to GitHub Pages` }))