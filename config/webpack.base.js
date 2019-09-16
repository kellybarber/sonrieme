const path                   = require('path')
const { CleanWebpackPlugin } = require('clean-webpack-plugin')

module.exports = {
  entry  : [ 
    'babel-polyfill', 
    './js/index.js', 
    './sass/main.scss' 
  ],
  output : {
    path     : path.join(__dirname, '../dist'),
    filename : 'bundle.min.js'
  },
  module  : {
    rules : [
      { 
        test    : /\.js$/, 
        use     : [ 'babel-loader' ], 
        exclude : /node_modules/ 
      },
      {
        test : /\.(png|jpg|gif)$/,
        use  : [ 'file-loader' ],
      }
    ]
  },
  plugins: [
    new CleanWebpackPlugin()
  ],
  resolve: { extensions: [ '*', '.js', '.css', '.scss' ] }
}