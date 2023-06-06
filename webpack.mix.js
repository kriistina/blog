const mix = require("laravel-mix");

var CaseSensitivePathsPlugin = require("case-sensitive-paths-webpack-plugin");

var webpackConfig = {
    plugins: [new CaseSensitivePathsPlugin()],
};

mix.webpackConfig(webpackConfig);

mix.js("resources/js/app.js", "public/js")
    .vue()
    .sass("resources/sass/app.scss", "public/css")
    .copy("node_modules/bootstrap/dist/css/bootstrap.min.css", "public/css")
    .copy("node_modules/bootstrap/dist/js/bootstrap.min.js", "public/js");
