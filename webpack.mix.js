let mix = require('laravel-mix')
require('laravel-mix-polyfill');


mix
  .sass('src/Resources/assets/scss/admin/admin.scss', 'dist/')
  .sass('src/Resources/assets/scss/public/main.scss', 'dist/')
  .js('src/Resources/assets/js/admin/admin.js', 'dist/')
  .js('src/Resources/assets/js/public/main.js', 'dist/')
  .copyDirectory('src/Resources/assets/img', 'dist/img')
  .polyfill({
    enabled: true,
    useBuiltIns: 'usage',
    targets: false, // false will use rc
    debug: true,
  });

// if (!mix.inProduction()) {
//   mix.webpackConfig({
//     devtool: 'inline-source-map'
//   })
// }

// if (mix.inProduction()) {
//   mix.options({
//     terser: {
//       terserOptions: {
//         compress: {
//           drop_console: true
//         }
//       }
//     }
//   });
// }
