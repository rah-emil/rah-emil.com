<script lang="ts">
import { defineComponent } from 'vue';
import { RouterLink } from 'vue-router';

export default defineComponent({
  name: 'TopHeader',

  components: { RouterLink },

  setup() {
    const links = [
      { name: 'Home', to: 'index' },
      { name: 'Example page', to: 'index-example' },
      { name: 'Login', to: 'auth-login' },
      { name: 'Register', to: 'auth-register' },
    ];

    return {
      links,
    };
  },
});
</script>

<template>
  <header>
    <nav>
      <RouterLink
        v-for="link in links"
        :key="link.to"
        :to="{name: link.to}"
      >
        {{ link.name }} <br>
      </RouterLink>
    </nav>
  </header>
</template>

<style lang="scss" scoped>
@import "./top-header.scss";
</style>
