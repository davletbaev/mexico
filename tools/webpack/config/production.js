const TerserPlugin = require('terser-webpack-plugin')

const entry        = require('../entry')

module.exports = {
    mode: 'production',
    devtool: false,
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
      vue: 'Vue'
    },
    optimization: {
		namedModules: true,
		noEmitOnErrors: true,
		minimize: true,
		minimizer: [
			new TerserPlugin({
				terserOptions: {
					parse: { ecma: 8 },
					compress: {
						ecma: 5,
						warnings: false,
						comparisons: false,
						inline: 2
					},
					mangle: { safari10: true },
					output: {
						ecma: 5,
						comments: false,
						ascii_only: true
					}
				},
				cache: true,
				parallel: true
			})
		],
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