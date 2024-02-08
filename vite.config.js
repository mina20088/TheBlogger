import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import sass from 'sass';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/tailwindcss.scss',
                'resources/css/app.scss',
                'resources/js/app.js',
                'resources/css/dashboard.scss',
                'resources/js/dashboard.js'
            ],
            refresh: true,
        }),
        
        
    ],
});
