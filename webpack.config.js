const path = require("path");
const HtmlWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');

module.exports = {
  entry: "./src/index.js",
  output: {
    filename: "main.js",
    path: path.resolve(__dirname, "dist")
  },
  plugins: [
    new HtmlWebpackPlugin({
      template: "./index.html",
      inject: true
    }),
    new HtmlWebpackPlugin({
      filename: "about.html",
      template: "./about.html",
      inject: true
    }),
    new MiniCssExtractPlugin({
      // Options similar to the same options in webpackOptions.output
      // all options are optional
      filename: 'style.css',
    }),
    new CopyWebpackPlugin([
      {
        from: 'src/images',
        to: 'images',
      },
    ])
  ],
  module: {
    rules: [
      {
        test: /\.(png|jpe?g|svg)$/i,
        use: [
          'file-loader',
          {
            loader: 'image-webpack-loader',
            options: {
              bypassOnDebug: false,
              disable: false,
              pngquant: {
                quality: [0.65, 0.90],
                speed: 4
              }
            }
          }
        ]
      },
      {
        test: /\.s[ac]ss$/i,
        exclude: /(node_modules|bower_components)/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },

          'css-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(html)$/,
        include: path.join(__dirname, 'src/partials'),
        use: {
          loader: 'html-loader',
          options: {
            interpolate: true
          }
        }
      },

    ],
  },
}
