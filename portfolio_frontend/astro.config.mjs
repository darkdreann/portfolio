import { defineConfig } from 'astro/config';

import node from "@astrojs/node";

// https://astro.build/config
export default defineConfig({
  vite: {
    server: {
      host: "0.0.0.0",
      hmr: {
        clientPort: 4321
      },
      port: 4321,
      watch: {
        usePolling: true
      }
    }
  },
  output: "hybrid",
  adapter: node({
    mode: "standalone"
  })
});