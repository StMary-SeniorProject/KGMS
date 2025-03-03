import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/homepage.css', 'resources/css/login.css', 'resources/css/admission.css', 'resources/js/login.js', 'resources/js/homepage.js', 'resources/sass/app.scss'],
            refresh: true,
        }),
    ],
});
