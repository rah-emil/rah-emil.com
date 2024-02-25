<script lang="ts">
import { defineComponent } from 'vue';
import { RouterLink, RouterView } from 'vue-router';

export default defineComponent({
  name: 'AuthLayout',
  components: { RouterLink, RouterView },
});
</script>

<template>
  <div class="auth">
    <h1>auth-layout</h1>

    <div class="auth__form">
      <RouterLink :to="{name: 'index'}">Back to home</RouterLink><br>
      <RouterLink :to="{name: 'auth-register'}">register</RouterLink><br>
      <RouterLink :to="{name: 'auth-login'}">login</RouterLink><br>

      <RouterView />
    </div>
  </div>
</template>
