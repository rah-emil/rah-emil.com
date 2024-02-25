<script lang="ts">
import { defineComponent, ref } from 'vue';

export default defineComponent({
  name: 'LoginView',

  setup() {
    const componentName = ref<string>('LoginView');

    return {
      componentName,
    };
  },
});
</script>

<template>
  <div>
    {{ componentName }}
  </div>
</template>
