const path                    = require('path')
const merge                   = require('webpack-merge')
const UglifyJSPlugin          = require('uglifyjs-webpack-plugin')
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin')
const MiniCssExtractPlugin    = require('mini-css-extract-plugin')
const base                    = require('./webpack.base')

module.exports = merge(base, {
  mode    : 'production',
  devtool : 'source-map',
  optimization : {
    minimizer : [
      new UglifyJSPlugin({
        cache    : true,
        parallel : true
      }),
      new OptimizeCssAssetsPlugin({})
    ]
  },
  plugins: [ 
    new MiniCssExtractPlugin({
      filename : 'main.min.css'
    })
  ],
  module  : {
    rules : [
      { 
        test : /\.(sc|c)ss$/, 
        use  : [ 
          MiniCssExtractPlugin.loader, 
          'css-loader', 
          'sass-loader' 
        ] 
      }
    ]
  }
})