import { defineConfig } from "vite";

export default defineConfig({
  server: {
    host: "0.0.0.0",
    port: 3000,
    hmr: {
      host: "localhost",
      port: 3000,
    },
    proxy: {
      "/wp-content/themes/theme-starter-wp": {
        target: "http://wp-starter.local", // Remplacez par l'URL de votre site Local
        changeOrigin: true,
        secure: false,
      },
    },
    watch: {
      usePolling: true,
      interval: 1000,
    },
  },
  build: {
    outDir: "dist",
    rollupOptions: {
      input: {
        main: "assets/js/main.js",
      },
    },
    manifest: true,
  },
});
