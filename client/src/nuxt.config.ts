// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  devServer: {
    port: parseInt(process.env.CLIENT_PORT ?? '3000', 10),
  }
})
