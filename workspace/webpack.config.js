const VueLoaderPlugin = require('vue-loader/lib/plugin')
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: 'development',
  entry: './web/assets/js/app.js',
  output: {
    path: __dirname,
    filename: './web/js/dist/bundle.js',
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        loader: 'babel-loader',
        exclude: /node_modules/,
      },
      {
        test: /\.vue$/,
        loader: 'vue-loader',
      },
      {
      test: /\.(sc|c|sa)ss$/,
        use: [
          // vue-style-loaderをMiniCssExtractPlugin.loaderに変更
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ]
      }
    ]
  },
  resolve: {
    alias: {
      vue: 'vue/dist/vue.js',
    }
  },
  plugins: [
    // ...
    new VueLoaderPlugin(),
    new MiniCssExtractPlugin({filename: 'web/css/dist/bundle.css'}),
  ],
};
