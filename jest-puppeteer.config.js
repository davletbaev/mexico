module.exports = {
  launch: {
    defaultViewport: {
      width: 1366,
      height: 768
    }
  },
  server: {
    command: `static-server ./dist -p 5000`
  }
}