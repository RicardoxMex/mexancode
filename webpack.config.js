const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');

module.exports = {
    entry: {
      js: './public/src/js/index.js', // Entrada para JavaScript
      // El CSS se manejará a través de la importación en JavaScript
    },
    output: {
      filename: 'bundle.js',  // Archivo de salida JS
      path: path.resolve(__dirname, 'public/js'), // Ruta de salida para JS
    },
    mode: 'production', // Cambiado a 'production' para minificación
    module: {
        rules: [
            {
                test: /\.css$/, // Manejo de archivos CSS
                use: [
                    MiniCssExtractPlugin.loader, // Extraer CSS en un archivo separado
                    'css-loader'
                ],
            },
            {
                test: /\.js$/, // Transpilación de archivos JS
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader', // Transpilación con Babel
                    options: {
                        presets: ['@babel/preset-env']
                    }
                }
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: '../css/styles.css', // Archivo de salida CSS en 'public/css'
        }),
    ],
    optimization: {
        minimize: true,
        minimizer: [
            new TerserPlugin({ // Minifica JavaScript
                terserOptions: {
                    compress: true,
                },
            }),
            new CssMinimizerPlugin({ // Minifica CSS
                minimizerOptions: {
                    preset: ['default', { discardComments: { removeAll: true } }],
                },
            }),
        ],
    }
};
