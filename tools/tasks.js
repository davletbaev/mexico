const views       = require('./tasks/views')
const styles      = require('./tasks/styles')
const scripts     = require('./tasks/scripts')
const images      = require('./tasks/images')
const fonts       = require('./tasks/fonts')
const favicon     = require('./tasks/favicon')
const clean       = require('./tasks/clean')
const svg         = require('./tasks/svg')
const sprite      = require('./tasks/sprite')
const autoreload  = require('./tasks/autoreload')
const revision    = require('./tasks/revision') 
const noindex     = require('./tasks/noindex')

module.exports = { views, styles, scripts, images, fonts, favicon, clean, svg, sprite, autoreload, revision, noindex }