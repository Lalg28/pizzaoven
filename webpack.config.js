var path = require('path');

module.exports = {
  mode: 'development',
  entry: './assets/js/z-custom.js',
  output: {
    path: path.resolve(__dirname, './'),
    filename: 'app.bundle.js'
  }
};