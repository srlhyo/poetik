// webpack.mix.js

let mix = require('laravel-mix');

mix
.options({
    processCssUrls: false,
})
.js('src/app.js', 'dist').setPublicPath('dist')
.sass('src/app.scss', 'dist');