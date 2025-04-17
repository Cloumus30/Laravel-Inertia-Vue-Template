import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vuePlugin from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.ts', 
                'resources/css/app.css', 
                'resources/js/Landing/landing.ts'
            ],
            refresh: true,
            ssr:'resources/js/landing/ssr.ts'
        }),
        vuePlugin({}),
    ]
});
