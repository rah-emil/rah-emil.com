<script lang="ts">
import { defineComponent, ref } from 'vue';

export default defineComponent({
  name: 'RegisterView',

  setup() {
    const componentName = ref<string>('RegisterView');

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
