import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            // Specify the output directory for the built files.
            // Make sure it matches the Laravel public directory.
            output: 'public/build',

            // Set to `true` if you want Vite to reload the page on changes.
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ['alpinejs', 'axios']
    
    },
});
