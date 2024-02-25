import type { ModuleOptions } from '@nuxtjs/tailwindcss'

const config: ModuleOptions['config'] = {
    content: [
        'components/**/*.{vue,js,ts}',
        'layouts/**/*.vue',
        'pages/**/*.vue',
        'composables/**/*.{js,ts}',
        'plugins/**/*.{js,ts}',
        'utils/**/*.{js,ts}',
        'App.{js,ts,vue}',
        'app.{js,ts,vue}',
        'Error.{js,ts,vue}',
        'error.{js,ts,vue}',
        'app.config.{js,ts'
    ],
    theme: {
        extend: {
            colors: {
                black: '#17191E',
                dark: '#1F232E',
                grey: '#3A4666',
                primary: '#4069FF',
                violet: '#BD3EC7',
                white: '#FFFFFF',
            },
        },
    },
    plugins: [],
}

export default config;

