import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/carousel.css', 'resources/js/app.js', 'resources/js/carousel.js', 'resources/css/bootstrap.division.css', 'resources/css/semantic.division.css','resources/css/app.division.css','resources/css/index.division.css'],
            refresh: true,
        }),
    ],
});
