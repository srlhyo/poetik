// webpack.mix.js

let mix = require('laravel-mix');
require('laravel-mix-imagemin');
const CopyWebpackPlugin = require("copy-webpack-plugin");

mix
.options({
    processCssUrls: false,
})
.js('src/app.js', 'dist').setPublicPath('dist')
.sass('src/app.scss', 'dist')
.minify(['dist/app.css', 'dist/app.js']);
// .imagemin(
//     'images/**.*',
//     {
//         context: 'resources',
//     },
//     {
//         optipng: {
//             optimizationLevel: 5
//         },
//         jpegtran: null,
//         plugins: [
//             require('imagemin-mozjpeg')({
//                 quality: 100,
//                 progressive: true,
//             }),
//             new CopyWebpackPlugin(
//                 { 
//                   patterns: [
//                     { from: 'src/images/**.*', to: 'dist/images/**.*' },
//                     // { from: 'src/yyy.ext', to: 'dist/yyy.ext' }
//                   ]
//                 }
//               )
//         ],
//     }
// );