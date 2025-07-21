import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
  ],
  server: {
    host: 'localhost',
    port: 5174,
    strictPort: true,
    hmr: {
      host: 'localhost',
    },
    cors: {
      origin: 'https://ruetlistrasse-effretikon.ch.test',
      credentials: true,
    },
  },
});
