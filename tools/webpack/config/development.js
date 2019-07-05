const entry = require('../entry')

module.exports = {
    mode: 'development',
    devtool: 'cheap-module-eval-source-map',
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
      jquery: 'jQuery',
      // vue: 'vue'
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