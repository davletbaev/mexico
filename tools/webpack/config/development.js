const entry = require('../entry')

module.exports = {
    mode: 'development',
    devtool: 'cheap-source-map',
    entry: entry,
    output: {
        filename: '[name].js'
    },
    module: {
        strictExportPresence: true,
        rules: [
          {
            test: /\.(js|jsx)$/,
            exclude: /(node_modules)/,
            loader: 'babel-loader',
            query: {
              presets: ["@babel/preset-env"]
            }
          }
        ]
    },
    externals: {
      jquery: 'jQuery'
    },
    resolve: {
      alias: {
        vue: 'vue/dist/vue.js'
      }
    },
    optimization: {
        splitChunks: {
            cacheGroups: {
                commons: {
                    test: /[\\/]node_modules[\\/]/,
                    name: 'vendor',
                    chunks: 'all'
                }
            }
        }
    }
}