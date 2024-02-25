import { fileURLToPath, URL } from 'node:url';
import { defineConfig, loadEnv } from 'vite';
import vue from '@vitejs/plugin-vue';

// https://vitejs.dev/config/
export default defineConfig(({ mode }) => {
  const env = loadEnv(mode, process.cwd(), '');

  return {
    // define: {
    //   __APP_ENV__: JSON.stringify(env.APP_ENV),
    // },

    plugins: [
      vue(),
    ],

    resolve: {
      alias: {
        '@': fileURLToPath(new URL('./src', import.meta.url)),
      },
    },

    server: {
      host: true,
      port: parseInt(env.CP_PORT ?? '3000', 10),
    },
  };
});
