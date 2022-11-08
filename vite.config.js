import laravel from 'laravel-vite-plugin'
import {defineConfig} from 'vite'
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true
        }),
        {
            name: 'blade',
            handleHotUpdate({file, server}) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    resolve: {
        alias: {},
    },
    build: {
        commonjsOptions: {
            transformMixedEsModules: true,
        },
    }
});
