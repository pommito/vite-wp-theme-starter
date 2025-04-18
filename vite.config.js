import { defineConfig } from "vite";

export default defineConfig({
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
