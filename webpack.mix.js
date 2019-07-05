let mix = require('laravel-mix');
const path = require('path');

mix.webpackConfig({
  resolve: {
    alias: {
      root: path.resolve(__dirname, './resources/js'),
      styles: path.resolve(__dirname, './resources/sass'),
      frontend: path.resolve(__dirname, './resources/js/frontend'),
      utils: path.resolve(__dirname, './resources/js/utils'),
      directives: path.resolve(__dirname, './resources/js/directives')
    }
  }
});

mix.setPublicPath('theme/assets')
   .js('resources/js/frontend/app.js', 'js')
   .sass('resources/sass/theme.scss', 'css/styles.css')
;

mix.version();
