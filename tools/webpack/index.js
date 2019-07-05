module.exports = (mode = 'development') => {
  switch (mode) {
    case 'production':
      return require('./config/production.js')
    default: 
      return require('./config/development.js')
  }
}