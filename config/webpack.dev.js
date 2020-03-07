const path        = require('path')
const merge       = require('webpack-merge')
const BrowserSync = require('browser-sync-webpack-plugin');
const base        = require('./webpack.base')

module.exports = merge(base, {
  mode    : 'development',
  devtool : 'eval-source-map',
  module  : {
    rules : [
      { 
        test : /\.(sc|c)ss$/, 
        use  : [ 
          'style-loader', 
          'css-loader', 
          'sass-loader' 
        ]
      }
    ]
  },
  plugins : [
    new BrowserSync({
      files: '../**/*.php',
      host: 'localhost',
      port: 3000,
      proxy: 'http://sonriemedental.test'
    })
  ]

})