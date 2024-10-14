import { defineConfig } from "vite";
import path from "path";

export default defineConfig(({ mode }) => {
  if (mode === "css") {
    return {
      root: path.resolve(__dirname, "assets", "src"),
      build: {
        outDir: "../dist/tailwindcss",
        sourcemap: true,
        emptyOutDir: true,
        minify: true,
        rollupOptions: {
          input: {
            index: path.resolve(__dirname, "assets/src/tailwindcss/index.js"),
          },
          output: {
            entryFileNames: `[name].js`,
            chunkFileNames: `[name].js`,
            assetFileNames: `[name].[ext]`,
          },
          watch: {
            include: [
              path.resolve(__dirname, "assets/src/**/*"),
              path.resolve(__dirname, "templates/**/*"),
              path.resolve(__dirname, "view/**/*"),
            ],
          },
        },
      },
    };
  } else if (mode === "js") {
    return {
      root: path.resolve(__dirname, "assets", "src"),
      build: {
        outDir: "../dist/js",
        sourcemap: true,
        emptyOutDir: true,
        minify: true,
        rollupOptions: {
          input: {
            index: path.resolve(__dirname, "assets/src/js/index.js"),
          },
          output: {
            entryFileNames: `[name].js`,
            chunkFileNames: `[name].js`,
            assetFileNames: `[name].[ext]`,
          },
          watch: {
            include: [path.resolve(__dirname, "assets/src/js/**/*")],
          },
        },
      },
    };
  }
});
