import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
     server: {
        host: 'localhost',  // Tu dominio local personalizado
        port: 5173,                   // Puerto por defecto de Vite (NO CAMBIAR A 127)
        hmr: {
            host: 'localhost',  // Debe coincidir con tu dominio
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});

