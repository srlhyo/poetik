// webpack.mix.js

let mix = require('laravel-mix');
require('laravel-mix-imagemin');
const CopyWebpackPlugin = require("copy-webpack-plugin");

mix
.options({
    processCssUrls: false,
})
.js('src/app.js', 'dist').setPublicPath('dist')
.sass('src/app.scss', 'dist');
// .minify(['dist/app.css', 'dist/app.js']);
