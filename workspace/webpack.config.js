module.exports = {
  entry: './web/assets/js/app.js',
  output: {
    path: __dirname,
    filename: './web/js/bundle.js',
  },
  module: {
  },
  resolve: {
    alias: {
      vue: 'vue/dist/vue.js',
    }
  }
};
