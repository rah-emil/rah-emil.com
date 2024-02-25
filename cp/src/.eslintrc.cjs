/* eslint-env node */
require('@rushstack/eslint-patch/modern-module-resolution');

module.exports = {
  root: true,
  extends: [
    'eslint:recommended',
    '@vue/eslint-config-typescript',
    '@vue/eslint-config-prettier/skip-formatting',
    'airbnb-base',
    'airbnb-typescript/base',
    'plugin:vue/vue3-essential',
  ],
  settings: {
    'import/resolver': {
      alias: {
        map: [
          ['@', './src'],
        ],
        extensions: ['.ts', '.js', '.jsx', '.tsx', '.vue'],
      },
    },
  },
  parserOptions: {
    parser: '@typescript-eslint/parser',
    ecmaVersion: 'latest',
    project: `${__dirname}/tsconfig.eslint.json`,
  },
  rules: {
    'max-len': ['warn', 120],
    'vue/max-len': ['warn', 120],
    'import/prefer-default-export': 'off',
    'import/no-extraneous-dependencies': [
      'error', {
        devDependencies: true,
      }],
  },
};
