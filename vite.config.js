import { defineConfig } from 'vite';
import { resolve } from 'path'
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  build: {
    outDir: resolve(__dirname, 'dist'),
    assetsDir: '',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: resolve(__dirname, 'main.js'),
    },
  },
  plugins: [tailwindcss()],
});
